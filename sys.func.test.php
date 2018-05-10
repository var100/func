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

// 下面几个常用到 求上个月,下个月的思路 求上个月(本月第一天减去1天) 求下个月(本月最后一天加1天)
//获取这个月第一天
$timestamp = strtotime('2018-04-08');
echo date('Y-m-01',$timestamp);//2018-04-01
//获取这个月最后一天
echo date('Y-m-t',$timestamp);//2018-04-30
//获取上个月第一天
echo date('Y-m-01',strtotime(date('Y-m-01',$timestamp).'-1 day'));//2018-03-01
//获取上个月最后一天
echo date('Y-m-d',strtotime(date('Y-m-01',$timestamp).'-1 day'));//2018-03-31
//获取下个月第一天
echo date('Y-m-01',strtotime(date('Y-m-t',$timestamp).'+1 day'));//2018-05-01
//获取下个月最后一天
echo date('Y-m-t',strtotime(date('Y-m-t',$timestamp).'+1 day'));//2018-05-31

/////////////////////////////////////////////////////////////////////////////////////
/*
time(void)
说明:获取当前unix时间戳
 */
// 例:
echo time();//1523195405
echo date('Y-m-d H:i:s',time());//2018-04-08 21:50:05

/////////////////////////////////////////////////////////////////////////////////////
/*
date($format,$timestamp=time())
说明:格式化日期时间
@param $format string 格式字符串
@param $timestamp 时间戳,如果不给默认为time()
@return string

 */

// $format说明:
// 月:
// m 表示几月,带前缀 01-12
// n 表示几月,不带前缀 1-12

// 日:
// d  表示月中第几天,带前缀 01-31
// j  表示月中第几天,不带前缀 1-31

// 年:
// Y 表示年,四位
// y 表示年,两位

// t 指定的月份有几天 28-31
// L 1或0,表示是否为闰年

// 星期:
// N 1-7 表示星期一到星期天
// w 0-6 0表示星期天

// 一年中的第几天:z
// 0-365 年份中的第几天

// 上下午:
// a 上下午 am/pm
// A 上下午 AM/PM

// 时:
// H: 24小时制 00-23
// h: 12小时制 01-12

// 分:
// i 分钟,有前导0  00-59
// s 秒,有前导0    00-59

// 例:
echo date('Y-m-d H:i:s',strtotime('2018-04-08'));//2018-04-08 00:00:00
echo date('j/n/y',strtotime('2018-04-08'));//8/4/18
echo date('Y-m-t',strtotime('2018-04-08'));//2018-04-30
echo date('Y-m-01',strtotime('2018-04-08'));//2018-04-01

/////////////////////////////////////////////////////////////////////////////////////
/*
mktime(hours,minute,second,month,day,year)
说明:取得一个日期的unix时间戳
参数类型均为 int
*/

// 例:2018-04-08
echo date('Y-m-d H:i:s',mktime(0,0,0,4,8,2018));//2018-04-08 00:00:00
// 例:2018-04-08 13:30:00
echo date('Y-m-d H:i:s',mktime(13,30,0,4,8,2018));//2018-04-08 13:30:00

/////////////////////////////////////////////////////////////////////////////////////
/*
 microtime(yes_float=false)
 说明:返回微妙及秒时间戳
 默认返回 string型 msec sec
 参数为true,返回float 型保留4位小数的,含微妙的秒
 */

echo microtime();//0.48505100 1523198818
echo microtime(true);//1523198818.4851
$arr = explode(' ',microtime());
// 微妙
$msec = $arr[0]*1000000;//485071
// 秒
$sec = $arr[1];//1523198818

echo microtime(true);//1523199364.3194
echo array_sum(explode(' ',microtime()));//1523199364.3194

/////////////////////////////////////////////////////////////////////////////////////
/*
 getdate($timestamp=time())
 说明:获得日期 时间信息
 */

// 例:
$date_arr = getdate(strtotime('2018-04-08'));
print_r($date_arr);
/*
Array
(
    [seconds] => 0
    [minutes] => 0
    [hours] => 0
    [mday] => 8
    [wday] => 0
    [mon] => 4
    [year] => 2018
    [yday] => 97
    [weekday] => Sunday
    [month] => April
    [0] => 1523116800
)
*/

/////////////////////////////////////////////////////////////////////////////////////
/*
gettimeofday(return_float)
说明:取得当前时间 默认返回数组
$return_float 为真返回等价于 microtime(true)的值 含4位小数点的 包含微妙的以秒为单位的值
*/

// 例:
$arr = gettimeofday($return_float=false);
print_r($arr);
/*
Array
(
    [sec] => 1523200070
    [usec] => 371225
    [minuteswest] => -480
    [dsttime] => 0
)
*/

echo gettimeofday(true);//1523200070.3713
echo microtime(true);//1523200070.3713
//说明: gettimeofday(true)等价于 microtime(true)

/////////////////////////////////////////////////////////////////////////////////////
// 函数内获取参数的方法 用于不定参数长度的自定义函数
func_num_args(); // 获取函数参数长度 int
func_get_arg(index); // 获取函数指定索引的参数 mixed
func_get_args(); //获取函数的所有参数 array 







