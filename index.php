<?php
$vage = array(0 => array(
    "img" => "img/image.png",
    "name" => "Sałatka",
    "date" => "2022-03-14"
    ),
    1 => array(
    "img" => "img/image (1).png",
    "name" => "Sałatka fajna",
    "date" => "2022-03-18"
    ),
    2 => array(
    "img" => "img/image (2).png",
    "name" => "Sałatka niefajna",
    "date" => "2022-03-12"
    ),
    3 => array(
    "img" => "img/image (3).png",
    "name" => "Zupa",
    "date" => "2022-03-19"
    )
);
foreach($vage as $n){
    echo $n['name'] . " " . "<br>";
    echo $n['date'] . " " . "<br>";
    echo '<img src="' . $n['img'] . '"/>' . "<br>";
    echo 
    
};
?>