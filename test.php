<?php
/* 
* ... 语法 不固定长度函数参数
* 将传递的参数 装到...后面的变量里 形成数组 通过索引获取参数
* php5.6增加   除了php 之外 ES6 , go, 都有这种语法, python 中... 变成了* 
*/
function test(...$lis){
   $num = 0;
   $length = count($lis);
   for($i=0;$i<$length;$i++){
       $num += $lis[$i];
   }
   return $num;
}
echo test(1,2,3);//6

/******************************************************************************/

//写一个函数，通过递归调用将以下数组打印出来： 
$arr = array(
array('id'=>1, 'pid'=>0, 'text'=>'1'),
array('id'=>2, 'pid'=>0, 'text'=> '2'),
array('id'=>3, 'pid'=>0, 'text'=> '3'),
array('id'=>4, 'pid'=>0, 'text'=> '4'),
array('id'=>5, 'pid'=>0, 'text'=> '5'),
array('id'=>6, 'pid'=>0, 'text'=> '6'),
array('id'=>7, 'pid'=>3, 'text'=> '3.1'),
array('id'=>8, 'pid'=>3, 'text'=> '3.2'),
array('id'=>9, 'pid'=>3, 'text'=> '3.3'),
array('id'=>10, 'pid'=>9, 'text'=> '3.3.1'),
array('id'=>11, 'pid'=>9, 'text'=> '3.3.2'),
array('id'=>12, 'pid'=>9, 'text'=> '3.3.3'), );
//1 2 3 --------3.1 --------3.2 --------3.3 ----------------3.3.1 ----------------3.3.2 ----------------3.3.3 4 5 6

function test($data,$id=0,$deep=0)
{
  $lis = [];
  foreach($data as $row)
  {
      if($row['pid']==$id)
      {
          $row['deep'] = $deep;
          $lis[] = $row;
          $lis = array_merge($lis,test($data,$row['id'],$deep+1));
      }
      
     
        
  }
   
   return $lis;
    
}
echo '<pre>';
print_r(test($arr));
/*
Array
(
    [0] => Array
        (
            [id] => 1
            [pid] => 0
            [text] => 1
            [deep] => 0
        )

    [1] => Array
        (
            [id] => 2
            [pid] => 0
            [text] => 2
            [deep] => 0
        )

    [2] => Array
        (
            [id] => 3
            [pid] => 0
            [text] => 3
            [deep] => 0
        )

    [3] => Array
        (
            [id] => 7
            [pid] => 3
            [text] => 3.1
            [deep] => 1
        )

    [4] => Array
        (
            [id] => 8
            [pid] => 3
            [text] => 3.2
            [deep] => 1
        )

    [5] => Array
        (
            [id] => 9
            [pid] => 3
            [text] => 3.3
            [deep] => 1
        )

    [6] => Array
        (
            [id] => 10
            [pid] => 9
            [text] => 3.3.1
            [deep] => 2
        )

    [7] => Array
        (
            [id] => 11
            [pid] => 9
            [text] => 3.3.2
            [deep] => 2
        )

    [8] => Array
        (
            [id] => 12
            [pid] => 9
            [text] => 3.3.3
            [deep] => 2
        )

    [9] => Array
        (
            [id] => 4
            [pid] => 0
            [text] => 4
            [deep] => 0
        )

    [10] => Array
        (
            [id] => 5
            [pid] => 0
            [text] => 5
            [deep] => 0
        )

    [11] => Array
        (
            [id] => 6
            [pid] => 0
            [text] => 6
            [deep] => 0
        )

)

*/
