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

