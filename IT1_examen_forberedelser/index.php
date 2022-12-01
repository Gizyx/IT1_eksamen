<?php 
    require_once 'db.config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it1 examen</title>
</head>

<body>
    <?php
    echo "hello";
    ?>
    <form>
        navn<input type="text"><br>
        data<input type="text"><br>
        <input type="submit">


    </form>
    <table>
        <th>id</th>
        <th>navn</th>
        <th>data</th>

        <?php
        $sql = "SELECT * FROM crud";
        $resultat = $conn->query($sql);
        
        echo '<div>';
        while($rad = $resultat->fetch_assoc()) {
            $id = $rad["id"];
            $navn = $rad["navn"];
            $data = $rad["data"];

            echo '<tr>';
            echo '<tr>';
            echo '<td> '.$id.' </td>';
            
            echo '<td> '.$navn.' </td>';
                 
            echo '<td> '. $data .' </td>';
            echo "<tr>";
        }
        echo '<div>';
    ?>
    </table>
</body>

</html>