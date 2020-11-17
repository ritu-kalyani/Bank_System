<?php
    session_start();
    require "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Secure Banking system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    .general{
    text-align: center;
    margin: 20px;
    font-weight: 500;
    font-size: 25px;
    padding: 8px;
    color: black;
    border-radius: 15px;
    background-color: #e9ecef;  
}
    
    </style>      
</head>
<body>
    <?php
        require "navbar.php";
    ?>
    <?php 

    if(isset($_POST['submit'])){
        $users = $_POST['users'];
        $result = mysqli_query($conn,"SELECT * FROM users WHERE name='$users'");
        while($row=mysqli_fetch_array($result))
        {
            echo "<div class='jumbotron jumbotron-fluid'>
                <div class='container'>
                    <h1 class='display-4'>Welcome&nbsp " . $row['name'] ."</h1><br>
                    <p class='lead'> Here you can view your account details and can avail our services like transactions. </p>
                </div>
           </div>"; 

        echo "<div class='container'>";
        echo "<h3 style='text-align:center;' class='general'>Account Details of ". $row['name'] ."</h3>";
        echo "<br><br>";
        echo "<form action='transferprocess.php' method='POST'>

            <div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>";
            echo "<p><b> User ID </b> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['user_id']."</p><br>
            </div>";
            
            echo "<div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>";
            echo "<p name='sender'><b> Name </b> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['name']."</p><br>
             </div>";

            echo "<div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>";
            echo "<p><b> Email ID </b>  : &nbsp;&nbsp; ".$row['email']."</p><br>
            </div>";

            echo "<div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>";
            echo "<p><b> Amount </b>  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row['money']."</p><br>
            </div>";

      echo "<br><br>";
      echo "<h3 style='text-align:center;' class='general'>Transfer Money</h3>";
      echo "<br><br>";

      echo "<div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>";
      echo "<label><b>Sender<b> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type='text' name='sender'  value=" . $users  .">
      <br></div>";


      echo "<div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>
      <label><b>Select Reciever </b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <select name='recieve' id='receive' required>
        <option>--Select Reciever--</option>
      <br>";  

$res = mysqli_query($conn, "SELECT * FROM users WHERE name!='$users'");
while($row = mysqli_fetch_array($res)) {
  echo("<option> " . "  " .$row['name']."</option>");
}
echo "</select>
<br><br></div>";

    echo "<div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>
      <label><b>Amount to be transferred </b> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input name='amount' type='number' required>
      <br><br></div>";
      echo "<div class='form-group' style='margin-top:10px;margin-left:50px;font-size:20px;'>
      <button id='transact'  name='transact' class='btn btn-outline-dark'><b>Transfer Money</b></button></div>
 
    </form>
    </div>";
        }
    }
    require "footer.php";
  ?> 
 
  
</body>
</html>