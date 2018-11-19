import jQuery from "jquery";
import 'bootstrap/dist/js/bootstrap.bundle.min'; // TODO 使用时引入
import 'comps/bootstrap-mobile/dist/js/bootstrap-mobile.min';
import 'vendor/miaoxing/app/public/js/app';
import 'vendor/miaoxing/app/public/js/tips';
import 'vendor/miaoxing/app/public/js/bootstrap-popup';
import 'vendor/miaoxing/app/public/js/bootstrap-ajax-tips';
import 'vendor/miaoxing/app/resources/styles/bootstrap.scss';
import 'comps/bootstrap-mobile/dist/css/bootstrap-mobile.css';
import 'vendor/miaoxing/app/public/css/tips.css';
import 'vendor/miaoxing/app/public/css/app.css';

window.$ = window.jQuery = jQuery;
$.tips.defaults.baseClass = 'badge';
