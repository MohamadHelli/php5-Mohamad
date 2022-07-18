<?php
require_once 'db_connect.php';
require_once 'file_upload_user.php';
if ($_POST) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $date_of_birth = $_POST['date_of_birth'];
        $pass = $_POST['pass'];
        $id = $_POST['id'];
    //variable for upload pictures errors is initialised
    $uploadError = '';
    $picture = file_upload($_FILES['picture']);//file_upload() called 
    if($picture->error===0){
        ($_POST["pic"]=="avatar.png")?: unlink("../pic/$_POST[pic]");
         $sql = "UPDATE user SET   fname = '$fname', lname = '$lname', email = '$email', date_of_birth = '$date_of_birth',pass = '$pass' , picture = '$picture->fileName'  WHERE id = {$id}";
    }else{
         $sql = "UPDATE user SET   fname = '$fname', lname = '$lname', email = '$email', date_of_birth = '$date_of_birth',pass = '$pass' WHERE id = {$id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update_user.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../home.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>