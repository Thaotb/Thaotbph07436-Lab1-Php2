<?php

class TV{
    var $name;
    function __construct($name = "")
    {
        $this->name = $name;
        
    }
    function giaTien(){
        echo "TV $this->name có giá 15 triệu";
    }
}
class SamSung extends TV{
    
}
$Qled = new SamSung('Qled');
$Qled->giaTien();
echo"<br>";



class Chim{
    var $ten;
    var $loaiChim;
    var $noiSong ;
    function __construct($ten = "", $loaiChim="",$noiSong="")
    {
        $this->ten = $ten;
        $this->loaiChim = $loaiChim;
        $this->noiSong = $noiSong;      
    }
    function getInfo(){
        echo "Tôi là $this->ten -Là $this->loaiChim - Tôi sống ở $this->noiSong";
    }
}
class chimCanhCut extends Chim{
    
}
$Rose = new chimCanhCut('Rose',"chim cánh cụt","Nam cực");
$Rose->getInfo();


