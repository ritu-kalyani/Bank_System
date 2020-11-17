<?php
    require "dbconnect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Secure Banking system</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>

<?php

        require "navbar.php";

echo "<div class='alert alert-warning alert-dismissible fade show' id='text1' role='alert'>
Transaction Successful :) <br> Visit Again and use our facilities.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";

echo "<div class='alert alert-warning alert-dismissible fade show' id='text2' role='alert'>
Transaction unSuccessful :( <br> Please Try Again .Required Amount is not present in your account.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";

?>
<script>
  $('#text1').hide();
  $('#text2').hide();
  </script>

<?php

            $flag=false;

            if (isset($_POST['transact']))
            {
            $sender=$_POST["sender"];
            $receiver=$_POST["recieve"];
            $amount=$_POST["amount"];

            $query2 = "SELECT money FROM users WHERE name='$sender'";
            $result = $conn->query($query2);
            //$result = myquery2i_query($conn;$query2);
            
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
             if($row["money"]-$amount>200){
            $query2 = "UPDATE `users` SET money=(money-$amount) WHERE name='$sender'";
            
            if ($conn->query($query2) === TRUE) {
              $flag=true;
            } else {
              echo "Error updating record: " . $conn->error;
            }
             }
              }
            }  

            if($flag==true){
                $query2 = "UPDATE `users` SET money=(money+$amount) WHERE name='$receiver'";
                
                if ($conn->query($query2) === TRUE) {
                  $flag=true;  
                  
                } else {
                  echo "Error updating record: " . $conn->error;
                }
                }
                if($flag==true){
                $query2 = "INSERT INTO `transfer` (`transfer_id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$sender','$receiver','$amount')"; 
                if ($conn->query($query2) === TRUE) {
                  $flag=true;  
                } else 
                {
                  echo "Error updating record: " . $conn->error;
                }
                }
                }

                if($flag==true){
                  echo "<script>
                  $('#text1').show();
                       </script>";
                  }
                  elseif($flag==false)
                  {
                      echo "<script>
                          $('#text2').show()
                       </script>";
                  }
                ?>

<div class="head" style=" text-align:center;margin-top: 40px;">
        <h3>Our Services</h3>
    </div>
    <div class="container" style="display:flex;justify-content:center;align-items:center;margin-top:25px;">
        <div class="card" style="width: 18rem;margin:40px;">
            <a href="viewusers.php"><img src="../images/us.jpg" class="card-img-top" width="200" height="200" alt="..."></a>
            <div class="card-body">
                <p class="card-text"><h3 style="text-align:center;">Transaction</h3>Here,you can transfer money with the other people</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;margin:40px;">
            <a href="viewusers.php"><img src="../images/user.jpg" class="card-img-top" width="200" height="200"  alt="..."></a>
            <div class="card-body">
                <p class="card-text"><h3 style="text-align:center;">Users</h3>Here you can search users and view users</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;margin:40px;">
            <a href="contact.php"><img src="../images/contact.jpg" class="card-img-top" width="200" height="200" alt="..."></a>
            <div class="card-body">
                <p class="card-text"><h3 style="text-align:center;">Contact Us</h3>If you face any problem,here you can contact us.</p>
            </div>
        </div>
    </div>

    <?php
        require "footer.php";
    ?>            

</body>
</html>
