<?php
require_once 'actions/db_connect.php';
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $fname = $data['fname'];
        $lname = $data['lname'];
        $email = $data['email'];
        $date_of_birth = $data['date_of_birth'];
        $pass = $data['pass'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pic/<?php echo $picture ?>' alt="<?php echo $fname ?>"></legend>
            <form action="actions/a_update_user.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>First Name</th>
                        <td><input class="form-control" type="text"  name="fname" placeholder ="first Name" value="<?php echo $fname ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><input class="form-control" type="text"  name="lname" placeholder ="last Name" value="<?php echo $lname ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input class="form-control" type="text"  name="email" placeholder ="email" value="<?php echo $email ?>"  /></td>
                    </tr>
                    <tr>
                        <th>date_of_birth</th>
                        <td><input class="form-control" type="text"  name="date_of_birth" placeholder ="19**/**/**" value="<?php echo $date_of_birth ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input class="form-control" type="password"  name="email" placeholder ="****" value="<?php echo $pass ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "pic" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "home.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
