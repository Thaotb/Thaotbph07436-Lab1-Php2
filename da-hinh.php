<?php
class Hoa {
    function mauSac(){
        echo "màu đỏ";
    }
}
class Sen extends Hoa{
    function mauSac(){
        echo "màu hồng";
    }
}
$hoaSen = new Sen();
$hoaSen->mauSac();
echo "<br>";

class Student {
    var $ten ;
    function __construct($ten=""){
        $this->ten=$ten;
    }
    function say(){
        echo"$this->ten say Hello";
    }
}

class StudentChild extends Student{
    function say(){
        echo"$this->ten say GoodBye ";
    }
}
$thaotb = new StudentChild("Thaotb");
$thaotb->say();
?>