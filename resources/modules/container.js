export default (req) => {
  const module = './' + wei.route + '.js';

  if (req.keys().indexOf(module) !== -1) {
    // eslint-disable-next-line babel/new-cap
    const container = new (req(module).default)();
    container.render();
  } else {
    throw new Error('Route "' + wei.route + '" not found');
  }
};
