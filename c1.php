<?php
echo '<body bgcolor="#ffffff">';
class Rooms
{
	const BR = "<br>";
	var $name;
	var $picture;
	var $price;
	var $dir = 'photos/';
	public function Attributes()
	{
		echo '<div style="margin-left:30px; float:left;">';
		echo '<b style="color:#f30; font-size:18px;">';
		echo $this->name . self::BR;
		echo "</b>";
		echo "<img height='300' width='300' src='{$this->dir}{$this->picture}'>" . self::BR;
		echo '<b style="color:#666;">';
		echo "Price:" . $this->price . "</b>";
		echo "<br><br></div>";
	}
}
$rooms = new Rooms;
//001
$rooms->name = "Item 1";
$rooms->picture = "p1.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//002
$rooms->name = "Item 2";
$rooms->picture = "p2.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//003
$rooms->name = "Item 3";
$rooms->picture = "p3.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();

//004
$rooms->name = "Item 4";
$rooms->picture = "p4.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//005
$rooms->name = "Item 5";
$rooms->picture = "p5.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//006
$rooms->name = "Item 6";
$rooms->picture = "p6.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//007
$rooms->name = "Item 7";
$rooms->picture = "p7.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//008
$rooms->name = "Item 8";
$rooms->picture = "p8.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//009
$rooms->name = "Item 9";
$rooms->picture = "p9.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//010
$rooms->name = "Item 10";
$rooms->picture = "p10.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//011
$rooms->name = "Item 11";
$rooms->picture = "p11.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//012
$rooms->name = "Item 12";
$rooms->picture = "p12.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//013
$rooms->name = "Item 13";
$rooms->picture = "p13.jpg";
$rooms->price = "\$1,000,000";
$rooms->Attributes();
//Adding image 014 reusing one of the already called-in photos
$rooms->name = "Item 14";
$rooms->picture = "p5.jpg";
$rooms->price = "\$14,000,000";
$rooms->Attributes();
//Adding image 015 and 016 reusing one of the already called-in photos
$rooms->name = "Item 15";
$rooms->picture = "p9.jpg";
$rooms->price = "\$12,000,000";
$rooms->Attributes();
$rooms->name = "Item 16";
$rooms->picture = "p1.jpg";
$rooms->price = "\$3,000,000";
$rooms->Attributes();



echo '</body>';
