// ... 语法
// php5.6
function test(...$lis){
   $num = 0;
   $length = count($lis);
   for($i=0;$i<$length;$i++){
       $num += $lis[$i];
   }
   return $num;
}
echo test(1,2,3);//6

