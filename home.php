<?php 
session_start();
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM proudct";
$result = mysqli_query($connect , $sql);
$tbody = '';
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$tbody .= "<tr>
<td><img class='img-thumbnail' src='pic/" .$row['pic']."'</td>
<td class='text-center'>" .$row['name']."</td>
<td class='text-center'>" .$row['price']."</td>
<td class='text-center'>" .$row['dis']."</td>
";
};

}else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}
$res = mysqli_query($connect, "SELECT * FROM user WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

mysqli_close($connect)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">
            <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add product</button></a>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-2">
                        <img class="userImage" src="pic/<?php echo $row['picture']; ?>" alt="<?php echo $row['fname']; ?>">
                        <p class="text-white">Hi <?php echo $row['fname']; ?></p>
                </div>
                    <a href="logout.php?logout">Sign Out</a>
                    <a href="update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
                </div>
                <div class="col-8 mt-2">
                        <p class='h2'>Users</p>
                        <table class='table table-hover shadow p-3 mb-5'>
                        <thead class='table-success'>
                            <tr>
                                <th scope="col">Picture</th>
                                <th scope="col">Name</th>
                                <th scope="col">price</th>
                                <th scope="col">dis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $tbody;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>