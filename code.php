<?php
$a = 3;
$b = 5;
if($a = 5 || $b = 7) {
    $a++;
    $b++;
}
echo $a . " " . $b;
?>

/**************************************************************/
<?php
$i = '11';
printf("%d\n",printf("%d",printf("%d",$i)));
?>
/**************************************************************/
<?php
class Person{
    private $name;
    private $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct()
    {
       echo $this->name.'<br>';
    }
    
    
    
}
$p = new Person('zs',28);
$p = new Person('ls',28);
$p = new Person('ww',28);
?>

/**************************************************************/
<?php
class Person{
    private $name;
    private $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct()
    {
       echo $this->name.'<br>';
    }
    
    
    
}
$p1 = new Person('zs',28);
$p2 = new Person('ls',28);
$p3 = new Person('ww',28);
?>
/**************************************************************/
<?php
class Person{
    private $name;
    private $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct()
    {
       echo $this->name.'<br>';
    }
    
    
    
}
$p1 = new Person('zs',28);
$p2 = new Person('ls',28);
$p2 = 123;
$p3 = new Person('ww',28);
?>



