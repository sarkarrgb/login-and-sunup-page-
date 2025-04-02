<?php
include('partials/header.php');
?>
    <div class="register_container">
        <div class="overlay">
        </div>
        <div class="titleDiv">
                <h1 class="title">Register</h1>
            <span class="subTitle">Thanks for choosing us!</span>
        </div>
        <form action="" method="POST">
            <div class="row grid">
                <div class="row">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="username" placeholder="Enter user name" required>
                </div>
                <div class="row">
                    <label for="email">Email Address</Address></label>
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="row">
                    <label for="phone">Phone Number</label>
                    <input type="phone" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter user password" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Login" style="background-color:black;"  required>
                    <span class="registerLink"> have an account allready
                        <a href="index.php">Login</a>
                    </span>
                </div>
            </div>
        </form>
    </div>
<?php
include('partials/footer.php');
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin SET
            usernames = '$username',
            email = '$email',
            passwords = '$password',
            phone = '$phone'";

$result = mysqli_query($conn, $sql);
    if($result == true){
        $_SESSION['accountCreated'] = '<span class="addedAccount">Account '.$username.'
        created!</span>';
        header('location' .SITEURL. 'index.php');
        exit();
    }
    else{
        $_SESSION['unSuccessful'] = '<span class="fail">Account '.$userName.' failed</
        span>';
        header('locations:' .SITEURL. 'register.php');
        exit();
    }


}
?>