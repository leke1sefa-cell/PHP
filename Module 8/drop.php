<?php

try{

$conn= new PDO("mysql:host=localhost; dbname=leka's database","root","");

$sql="ALTER table users drop email ";

$conn->exec($sql);
echo "column droped";

}catch(Exception $e){
    echo "column not droped";
}

?>