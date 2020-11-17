<?php
    require "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Secure Banking System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<?php
    require "navbar.php";
?>

<div class="container my-4" style="margin-top:10px;">
    <table class="table" id="myTable1">
        <thead>
        <tr>
            <th scope="col">Transfer_Id</th>
            <th scope="col">Sender Name</th>
            <th scope="col">Receiver Name</th>
            <th scope="col">Amount Transfer</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `transfer`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = '#'>";
            echo "<td>". $row['transfer_id'] . "</td>
            <td>". $row['sender'] . "</td>
            <td>". $row['receiver'] . "</td>
            <td>". $row['amount'] . "</td>";
           
            echo "</form>";
           echo  "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

   <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable1').DataTable();

    });
</script> 
</body>
</html>