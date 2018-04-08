<?php
/***************************日期函数*****************************/
/*
strtotime($str,$timestamp=time())
将字符串日期时间解析为unix时间戳
*/
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

// 获取上个月第一天
echo date('Y-m-01',strtotime(date('Y-m-01',strtotime('2008-03-31')).'-1 day'));//2008-02-01
// 获取上个月第一天
echo date('Y-m-d',strtotime('-1 month',strtotime(date('Y-m-01',strtotime('2008-03-31')))));//2008-02-01
// 获取上个月第一天
echo date('Y-m-d',strtotime(date('Y-m-01',strtotime('first day of last month 2008-03-31'))));//2008-02-01
// 获取上个月最后一天
echo date('Y-m-d',strtotime(date('Y-m-01',strtotime('2008-03-31')).'-1 day'));//2008-02-29
// 获取上个月最后一天
echo date('Y-m-d',strtotime('-1 day',strtotime(date('Y-m-01',strtotime('2008-03-31')))));//2008-02-29

// 获取下个月第一天
echo date('Y-m-d',strtotime('first day of next month 2008-01-31'));//2008-02-01
// 获取下个月最后一天
echo date('Y-m-d',strtotime('last day of next month 2008-01-31'));//2008-02-29
// 获取这个月有多少天
echo date('t',strtotime('2018-04-08'));//30

// 加一天
echo date('Y-m-d H:i:s',strtotime('+1 day 2018-04-08 01:00:00'));//2018-04-09 01:00:00
// 减一天
echo date('Y-m-d H:i:s',strtotime('-1 day 2018-04-08 01:00:00'));//2018-04-07 01:00:00
// 加一周
echo date('Y-m-d H:i:s',strtotime('+1 week 2018-04-08 01:00:00'));//2018-04-15 01:00:00
// 减一周
echo date('Y-m-d H:i:s',strtotime('-1 week 2018-04-08 01:00:00'));//2018-04-01 01:00:00
echo date('Y-m-d H:i:s',strtotime('+1 week 2 days 4 hours 2 seconds 2018-04-08 01:00:00'));//2018-04-17 05:00:02
// 下个月第一天
echo date('Y-m-d H:i:s',strtotime('first day of next month 2018-04-08 01:00:00'));//2018-05-01 01:00:00
// 下个月最后一天
echo date('Y-m-d H:i:s',strtotime('last day of next month 2018-04-08 01:00:00'));//2018-05-31 01:00:00

//获取这个月第一天
echo date('Y-m-01',strtotime('2018-04-08'));//2018-04-01
// 获取最后一天
echo date('Y-m-t',strtotime('2018-04-08'));//2018-04-30
// 加一个月,一天
echo date('Y-m-d H:i:s',strtotime('+1 month 1 day',strtotime('2018-04-08')));//2018-05-09 00:00:00
// 加一天, 一小时
echo date('Y-m-d H:i:s',strtotime('+1 day,+1 hours 2018-04-08'));//2018-04-09 01:00:00

// now, +/-num day, +/-num week, +/-num month, +/- num wook num days num hours num second,
// first day of next nonth,
// first day of last month,
// last day of next month,
// last day of last month,

