import { useNavigate } from 'react-router';
import { useLocation } from 'react-router-dom';

let navigate;
let location;

/**
 * @experimental
 */
const RouterStore = () => {
  navigate = useNavigate();
  location = useLocation();
};

export default RouterStore;

export { navigate, location };