<?php
//including the database connection file
include_once("config.php");
 
// select data in descending order from table/collection "users"
$result = $db->data->find()->sort(array('_id' => -1));
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.html">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
 
    <tr bgcolor='#CCCCCC'>
        <td>NAMA</td>
        <td>KELAS</td>
        <td>JURUSAN</td>
        <td>ACTION</td>
    </tr>
    <?php     
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['borough']."</td>";
        echo "<td>".$res['cuisine']."</td>";
        echo "<td><a href=\"edit.php?id=$res[_id]\">Edit</a> | <a href=\"delete.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
    </table>
</body>
</html>