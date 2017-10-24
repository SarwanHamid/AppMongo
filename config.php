<?php
 $connection = new MongoClient("mongodb://admin:admin123@ds129315.mlab.com:29315/mongodbsarwan"); 
 $db = $connection->mongodbsarwan;
 if($connection->connected){
 	echo "Berhasil";
 }else {
 	echo "Gagal";
 }
?>