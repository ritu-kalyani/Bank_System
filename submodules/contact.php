<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Secure Banking system</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <?php
        require "navbar.php";
    ?>


    <h1 style="text-align:center;margin-top:40px;font-weight:400;">CONTACT US</h1>
    <div class="container">
        <form style="margin-top:30px;">
            <div class="form-group">
                <label for="username">User Name : </label>
                <input type="text" class="form-control" id="username" placeholder="Write your Name">
            </div>
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="text" class="form-control" id="email" placeholder="Write your Email">
            </div>
            <div class="form-group">
                <label for="query">Write your problem here : </label>
                <textarea class="form-control" id="query" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="button" onclick= message() class="btn btn-outline-dark" id="submit">Submit</button>
            </div>
        </form>
    </div>
    <br><br><br><br><hr>
    <?php
        require "footer.php";
    ?>

    <script>
        function message(){
            confirm("Your problem has been reached and will update you soon")
        }
    </script>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>
</html>