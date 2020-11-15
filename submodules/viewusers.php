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
            <th scope="col">Money</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>". $row['user_id'] . "</td>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['money'] . "</td>
            <td> <button class='view btn btn-sm btn-primary' onclick=vieweach() id=".$row['user_id'].">View</button></td>
        </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<hr>
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

   user= document.getElementByClassName('view')
   
</script>

<?php
    require "footer.php"
?>

</body>
</html>