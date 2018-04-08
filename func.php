<?php

/**
 * 获取日期
 * @param $timestamp   int unix时间戳
 * @return array
*/
function get_date($timestamp=0)
{
     $timestamp = $timestamp ? $timestamp : time();
    /*
        t =>这个月有多少天
        first_day_of_last_month=>上个月第一天
        last_day_of_last_month=>上个月最后一天
        frist_day_of_next_month=>下个月第一天
        last_day_of_next_month=>下个月最后一天
        seconds=>秒  (0-60)
        minutes=>分  (0-60)
        hours=>小时  (0-23)
        mday=>这个月第几天 (1-31)
        wday=>星期几 0表示星期天 (0-6)
        mon=>几月 (1-12)
        yday=>该年中第几天    (1-365)
        weekday=>英文星期几
        month=>英文月份
        0=>时间戳 秒

     */

    $other = [];
    $other['t'] = intval(date('t'));
    $other['first_day_of_last_month'] = date('Y-m-01 H:i:s',strtotime(date('Y-m-01 00:00:00',$timestamp).'-1 day'));
    $other['last_day_of_last_month'] = date('Y-m-t 23:59:59',strtotime(date('Y-m-01 00:00:00',$timestamp).'-1 day'));
    $other['first_day_of_next_month'] = date('Y-m-01 00:00:00',strtotime(date('Y-m-t 23:59:59',$timestamp).'+1 day'));
    $other['last_day_of_next_month'] = date('Y-m-t 23:59:59',strtotime(date('Y-m-t 23:59:59',$timestamp).'+1 day'));

    return array_merge(getdate($timestamp),$other);

}

// 例:
// 2008-12-01 00:00:00
echo get_date(strtotime('2009-01-31'))['first_day_of_last_month'];
// 2009-01-31 23:59:59
echo get_date(strtotime('2009-02-28'))['last_day_of_last_month'];
// 2009-02-01 00:00:00
echo get_date(strtotime('2009-01-31'))['first_day_of_next_month'];
// 2009-02-28 23:59:59
echo get_date(strtotime('2009-01-31'))['last_day_of_next_month'];



