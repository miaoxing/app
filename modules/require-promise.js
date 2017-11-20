export default function (modules) {
  return new Promise((resolve) => {
    requirejs(Array.isArray(modules) ? modules : [modules], resolve);
  });
};
