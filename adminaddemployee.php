<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard group Theatres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .required {
        color: red;
    }
</style>

<body>
    <?php
    include "navigationbar.php"
    ?>


    <div class="container-sm shadow-lg border col-6 mt-5 mb-5"><br>
        <h2 style="text-align: center;">Add Employee</h2>
        <div class="alert alert-danger">
            <?php $_SESSION['info'] = "Fill the fields with *";
            echo $_SESSION['info'];
            ?></div><?php
                    if (isset($_SESSION['status'])) {
                    ?>
            <div class="alert alert-danger">
                <h4>Info! <?= $_SESSION['status'] ?></h4>
            </div>
        <?php
                        unset($_SESSION['status']);
                    }
        ?>
        <form action="signupdb.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Employee FirstName:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Employee LastName:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Level Of Education:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>County:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Phone Number:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Email:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <span class="glyphicon glyphicon-earphone"></span><input type="email" class="form-control" name="email" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Theatre Allocated:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Profile Picture:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                    <div class="col-sm-6">
                    <input class="input" type="file" id="product_image" name="product_image"> 
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">
                            <b>Job Specification:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                </div>
                <br>
            </div>
            <br>
            <button type="submit" name="signup-button" class="btn btn-primary btn-block active col-12">Add</button><br><br>
    </div>
    <div class="form-group">
    </div>
    <br>
   </form>

    </div>




    <?php
    include "footer.php"
    ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src=."/js/bootstrap.bundle.js"></script>

</html>