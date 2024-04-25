import { useNavigate } from 'react-router';

let navigate;

/**
 * @experimental
 */
const RouterStore = () => {
  navigate = useNavigate();
};

export default RouterStore;

export { navigate };