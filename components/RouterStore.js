import { useNavigate } from 'react-router';
import { useLocation } from 'react-router-dom';
import { req } from '@mxjs/app';
import { useEffect } from 'react';

let navigate;
let location;

/**
 * @experimental
 */
const RouterStore = () => {
  navigate = useNavigate();

  location = useLocation();
  useEffect(() => {
    req.setLocation(location);
  }, [location]);
};

export default RouterStore;

export { navigate, location };