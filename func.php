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

/*************************************************************************/
/**
 * 冒泡排序
 * @param $arr array  需要排序的数组
 * @return array 排序后的数组
*/

function bubble_sorting($arr)
{
   $len = count($arr);
   $temp;
   for ($i=0; $i <$len-1 ; $i++) 
   { 
	   	for ($j=0; $j <$len-$i-1 ; $j++) 
	   	{ 
	   		if($arr[$j]>$arr[$j+1])
	   		{
	   			$temp = $arr[$j];
	   			$arr[$j] = $arr[$j+1];
	   			$arr[$j+1] = $temp;
	   		}
	   	}
   }
   return $arr;
}

// 使用例:
$arr=rand_arr(-10,30,20);//产生一个20个长度的数组,数组值范围是-10到30
$res = bubble_sorting($arr);
echo '<pre>';
print_r($res);

//////////////////////////////////////////////////////////////////////////
/**
 * 冒泡排序-优化版(针对于已经排好序的数组) 原理:比较一轮没有发生交换数据,说明已经是排好序的,就无须再比较了
 * @param $arr array  需要排序的数组
 * @return array 排序后的数组
*/
function bubble_sorting($arr)
{
   $len = count($arr);
   $temp;
   for ($i=0; $i <$len-1 ; $i++) 
   { 
   		$flag = 0;
	   	for ($j=0; $j <$len-$i-1 ; $j++) 
	   	{ 
	   		if($arr[$j]>$arr[$j+1])
	   		{
	   			$temp = $arr[$j];
	   			$arr[$j] = $arr[$j+1];
	   			$arr[$j+1] = $temp;
	   			$flag = 1;
	   		}
	   	}
	   	if($flag === 0) break;

   }
   return $arr;
}

echo date('H:i:s').'<br>';
$arr = range(0,10000);
$arr = bubble_sorting($arr);
echo date('H:i:s');

///////////////////////////////////////////////////////////////////////////

/**
 * 冒泡排序-优化版(针对逆序排好的数组, 或趋势于逆序排列的数组缩短时间)
 * 如果发现是有逆序趋势, 会反转, 进行排序, 如果反转过来发现是排好的, 就不会再比较了 
 * @param $arr array  需要排序的数组
 * @return array 排序后的数组
*/
function bubble_sorting($arr)
{
	$tmp_arr = $arr;
	$len = count($arr);
	$temp;
	for($i=0;$i<$len-1;$i++)
	{
		$flag = 0;
		for($j=0;$j<$len-$i-1;$j++)
		{
			if($arr[$j]>$arr[$j+1])
			{
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
				++$flag;
			}
		}
		if($flag === 0) break;
		if($flag === $len-1)
		{

			$arr = array_reverse($tmp_arr);
		}
	}

	return $arr;
}


echo '<pre>';
$arr =array_reverse(range(1,20));
print_r(bubble_sorting($arr));

echo date('H:i:s').'<br>';
$arr = array_reverse(range(1,6000));
$arr[10] = 3;
$res = bubble_sorting($arr);
echo date('H:i:s').'<br>';

/*************************************************************************/
/**
 * 选择排序算法
 * 思路:假设i索引为最小值,然后与后面i+1,i+2,...比较, 找到最小值, 与i交换
 * @param $arr array  需要排序的数组
 * @return array 排序后的数组
*/
function select_sorting($arr)
{
	$len = count($arr);
	for($i=0;$i<$len-1;$i++)
	{
		$min_index = $i;
		for($j=$i;$j<$len-1;$j++)
		{
			if($arr[$min_index]>$arr[$j+1])
			{
				$min_index = $j+1;
			}
		}
		$temp = $arr[$min_index];
		$arr[$min_index] = $arr[$i];
		$arr[$i] = $temp;
	}
	return $arr;
}

$arr = [3,2,1,-6,-8,-4,6,1,8,5,-1,5];
$res = select_sorting($arr);
echo '<pre>';
print_r($res);

//////////////////////////////////////////////////////////////////////////

/**
 * 选择排序算法-优化版
 * 优化计算,优化交换
 * @param $arr array  需要排序的数组
 * @return array 排序后的数组
*/
function select_sorting($arr)
{
	$len = count($arr);
	$num = $len-1;
	for($i=0;$i<$num;$i++)
	{
		$min_index = $i;
		for($j=$i+1;$j<$len;$j++)
		{
			if($arr[$min_index]>$arr[$j]) 
				$min_index = $j;
		}

		if($min_index !== $i)
		{
			$temp = $arr[$min_index];
			$arr[$min_index] = $arr[$i];
			$arr[$i] = $temp;
		}
		
	}
	return $arr;
}

$data = rand_arr(-60,1000000,200);
echo '<pre>';
print_r(select_sorting($data));

/*************************************************************************/
/*
将一组数据假设分成两组，分别将其称为有序组与待插入组。
每次从待插入组中取出一个元素，与有序组的元素进行比较，
并找到合适的位置，将该元素插到有序组当中。就这样，
每次插入一个元素，有序组增加，待插入组减少。直到待插入组元素个数为0。
插入过程中涉及到了元素的移动。
*/
/**
 * 插入排序算法
 * [4,8][6,4,8,0]
 * @param $arr array  需要排序的数组
 * @return array 排序后的数组
*/
function insert_sorting($arr)
{
	$len = count($arr);
	for($i=1;$i<$len;$i++)
	{
		// 要插入的值
		$insert_val = $arr[$i];
		$index = $i-1;//对比的最右的位置
		while($index>=0 && $arr[$index]>$insert_val)
		{
			//左边的往右移
			$arr[$index+1] = $arr[$index];
			$index--;
		}
		// 插入值
		$arr[$index+1] = $insert_val;
	}
	return $arr;
}

/*************************************************************************/
/**
 * 生成随机元素num值的数组
 * @param $minval int  随机元素最小值
 * @param $maxval int 随机元素最大值
 * @param $num int 数组长度
 * @return 产生的数组
*/
function rand_arr($minval,$maxval,$num)
{
	$arr = [];
	for($i=0;$i<$num;$i++)
	{
		$arr[] = mt_rand($minval,$maxval);
	}
	return $arr;
}

//调用:产生一个5个长度的数组,取值范围从-3到6
$arr = rand_arr(-3,6,5);
print_r($arr);

/*************************************************************************/

/**
 * 在数组开头插入一个单元 [模拟array_unshift 插入多个单元未实现] 
 * @param $arr *array 要操作的数组
 * @param $val mixed  要插入的值
 * @return 数组长度
 * 测试:一百万数据,跟原生array_unshift 无明显差距
*/
function arr_unshift(&$arr,$val)
{
	$len = count($arr);
	$index = $len-1;
	while($index>=0)
	{

		$arr[$index+1]= $arr[$index];
		$index--;
	}
	$arr[0] = $val;
	return $len+1;
}


$arr = [4,8,9,6];
arr_unshift($arr,666);
print_r($arr);// Array ( [0] => 666 [1] => 4 [2] => 8 [3] => 9 [4] => 6 )

//////////////////////////////////////////////////////////////////////////
/**
 * 在数组开头插入一个或多个单元 [arr_unshift增加]
 * @param $arr *array 要操作的数组
 * @param $val mixed  不定参数 要插入的值 要插入多个值用逗号分开
 * @return 数组长度
 * 测试:一百万数据,跟原生array_unshift 相差在1秒内 待优化
*/
function arr_unshift_2(&$arr,$args)
{
	$args_len = func_num_args();
	$args = func_get_args();
	while($args_len>1)
	{
		arr_unshift($arr,$args[$args_len-1]);
		$args_len--;
	}

	return count($arr);

}

$lis = ['php','python','java'];
arr_unshift_2($lis,'go','js');

// ['go','js','php','python','java' )
print_r($lis);

/*************************************************************************/





