import { useHistory } from 'react-router';

let history;

/**
 * @experimental
 */
const RouterStore = () => {
  history = useHistory();
};

export default RouterStore;

export { history };