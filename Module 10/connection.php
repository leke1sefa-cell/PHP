<?php



$host="localhost";
$dbname="digital2";//emrin e databazes tone
$user="root";
$pass="";


try{

    $conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "connected";
}catch(exception $e){
    echo "not connected";


}


?>