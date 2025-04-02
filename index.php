<?php
include('./partials/header.php');
?>
    <?php
     if(isset($_SESSION['accountCreated'])){
        echo $_SESSION['accountCreated'];
        unset( $_SESSION['accountCreated']);
     }
 ?>

<div class="form_container">
        <div class="overlay">
        </div>
        <div class="titleDiv">
                <h1 class="title">Login</h1>
            <span class="subTitle">Wellcome back!</span>
        </div>

     <?php
     if(isset($_SESSION['noAdmin'])){
        echo $_SESSION['noAdmin'];
        unset($_SESSION['noAdmin']);
     }
     ?>

        <form action="" method="POST">
            <div class="row grid">
                <div class="row">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="userName" placeholder="Enter user name" required>
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter user password" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Login" style="background-color: black" required>
                    <span class="registerLink">Don't have an account 
                        <a href="register.php">register</a>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <?php
    include('partials/footer.php');
    ?>


<?php
if(isset($_POST['submit']))
{
   // echo'yes data submited';

$userName = $_POST['userName'];
$passWord = $_POST['password'];

$sql = "SELECT * FROM admin WHERE usernames = '$userName' AND passwords = '$passWord'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);



if($count ==1){
    echo
    "<script>alert('Sucess');</script>";

    $_SESSION['loginMessage'] = '<span class="success">Wellcome '.$userName.' </span>';
    header('location:' .SITEURL. 'dashboard.php');
    exit();
}
else{
    $_SESSION['noAdmin'] = '<span class="fail">'.$userName.' is not registered! </
    span>';
    header('loation' .SITEURL. 'index.php');
    exit();
}









}
?>