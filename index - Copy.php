<?php
include('index.php');
function mysqli_query("select * from prod");
#$result=mysqli_querry($querry);
?>


<html>
    <title>
        <head> fetch data from database</head>
    </tittle>
<body>
    <table algn="center" boder="1px" style="width: 600px; line: height:40px; ">
        <tr>
            <th colspan="4"><h2>goods list</h2></th>
        </tr>
        <t>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>quantity(gms)</th>
        </t>
    <?php
        while($rows=mysqli_fetch_assoc(mysqli_query))
        {
     ?>        
            <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['name'];  ?></td>
                <td><?php echo $rows['price'];?></td>
                <td><?php echo $rows['quantity(gms)'];?></td>
            </tr>
     <?php       
        }
    ?>
    </table>
</body>
</html>