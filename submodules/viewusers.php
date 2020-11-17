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
    <table class="table" id="myTable">
        <thead>
        <tr>
            <th scope="col">User_Id</th>
            <th scope="col">User Name</th>
            <th scope="col">Email Id</th>
            <th scope="col">Amount</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'viewone.php'>";
            echo "<td>". $row['user_id'] . "</td>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['money'] . "</td>";
           echo "<td> <a href='viewone.php'><button class='view btn btn-sm btn-dark' name='users1' id= 'users1'>view</button></a></td>";
            echo "</form>";
           echo  "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<hr>
<form action="viewone.php" method="POST">
    <h5 style="margin-left:40px;height:40px;color:black;font-size:30px;padding-top:20px;">Or you can select from here to view details </h5>
    <h6 style="margin-left:40px;color:black;padding-top:20px;">
    Select User to view details:
  <select name="users" id="users" required>
    <option>--Select User--</option>
<?php
$res = mysqli_query($conn, "SELECT * FROM users");
while($row = mysqli_fetch_array($res)) {
    echo("<option> ".$row['name']."</option>");
}
?>
</select>
</h6>

<div style="margin-left:40px;color:black;padding-top:20px;">
<button href="viewone.php" id="submit" name="submit" class="btn btn-outline-dark"><b>View User Details</b></button>
</div><br><br>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();

    });
</script>

<?php
    require "footer.php"
?>

</body>
</html>