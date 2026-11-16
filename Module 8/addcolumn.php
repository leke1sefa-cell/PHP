<?php

try{

$conn= new PDO("mysql:host=localhost; dbname=leka's database","root","");

$sql="ALTER table users add adress varchar(255)";

$conn->exec($sql);
echo "column created";

}catch(Exception $e){
    echo "column not created";
}

?>