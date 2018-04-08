<?php
/***************************日期函数*****************************/
//strtotime
//2009-03-01 00:00:00 下一天
echo date('Y-m-d H:i:s',strtotime('next day 2009-02-28'));
//2009-03-01 00:00:00 下一天
echo date('Y-m-d H:i:s',strtotime('2009-02-28 +1 day'));
//2009-03-01 00:00:00  下一天
echo date('Y-m-d H:i:s',strtotime('2009-02-28+24 hours'));
//2009-02-28 00:00:00 上一天
echo date('Y-m-d H:i:s',strtotime('last day 2009-03-01'));

//2009-03-03 00:00:00
echo date('Y-m-d H:i:s',strtotime('2009-03-31 -1 month'));
//2009-03-03 00:00:00
echo date('Y-m-d H:i:s',strtotime('next month 2009-01-31'));
//2009-03-01 00:00:00
echo date('Y-m-d H:i:s',strtotime('2009-01-29 +1 month'));

// 明天 2018-04-09 00:00:00
echo date('Y-m-d H:i:s',strtotime('next day',strtotime('2018-04-08 00:00:00')));
// 明天 2018-04-09 00:00:00
echo date('Y-m-d H:i:s',strtotime('+1 day',strtotime('2018-04-08 00:00:00')));
// 昨天 2018-04-07 00:00:00
echo date('Y-m-d H:i:s',strtotime('last day',strtotime('2018-04-08 00:00:00')));
// 昨天 2018-04-07 00:00:00
echo date('Y-m-d H:i:s',strtotime('-1 day',strtotime('2018-04-08 00:00:00')));


