<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data table</title>
    <link rel="stylesheet" href="homepage.css" type="text/css">
</head>
<body style = "background-color:light;">
    <h2>List of data obtained from the field</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Moisture</th>
            <th>Datetime</th>
        </tr>
        <?php
        $sql = "select * from datatable";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" .$row['id']."</td><td>" . $row['temperature']. "</td><td>".$row['humidity']."</td><td>" . $row['moisture']."</td><td>" . $row['date']."</td></tr>";
            }
            echo '</table>';
        }
        else{
            echo ' Table is empty';
        }
        
        
        ?>
    </table>
</body>
</html>