<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th>NO.</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
        </tr>
        <?php
            for($i=1;$i<=10;$i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>นายชยางกูร</td>";
                echo "<td>ขำเถื่อน</td>";
                echo "<td>6/10</td>";
                echo "</tr>";
               }
        ?>
</table>
    <?php
        $names = array("2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41");
        echo count($names);
    ?>
</body>
</html>
