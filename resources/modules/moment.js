import moment from 'node_modules/moment';
import 'moment/locale/zh-cn';

moment.locale('zh-cn');

console.log('2', moment.monthsShort());

export default moment;
