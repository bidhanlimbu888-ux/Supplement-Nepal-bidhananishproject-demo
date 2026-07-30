




<?php
$conn = mysqli_connect("localhost", "root", "", "login_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname  = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);
    $password  = $_POST['password'];

    $sql = "INSERT INTO `account record`
            (`First Name`, `Last Name`, `E-mail`, `Password`)
            VALUES
            ('$firstname', '$lastname', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location:Main.html");
    exit();
} else {
    $message = "Error: " . mysqli_error($conn);
}
}

mysqli_close($conn);
?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account</title>

<link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="wrapper">

    <!-- LEFT PANEL -->

    <div class="left-panel">

        

        <img src="logo1.jpg" class="bg-image" alt="Background">


        <div class="overlay"></div>

        <div class="bottom-text">
                        <div class="slider">
                <span></span>
                <span class="active"></span>
                <span></span>
            </div>
        </div>

    </div>

    <!-- RIGHT PANEL -->

    <div class="right-panel">

        <h1>Create an account</h1>

        <p class="login-text">
            Already have an account?
            <a href="Main.html">Login</a>
        </p>

        <?php
        if($message!=""){
            echo "<div class='success'>$message</div>";
        }
        ?>

        <form action="" method="POST">

            <div class="row">

                <div class="input-box">
                    <input type="text" name="firstname" placeholder="First Name" required>
                </div>

                <div class="input-box">
                    <input type="text" name="lastname" placeholder="Last Name" required>
                </div>

            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-box password">

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password"
                    required>

                <i class="fa-regular fa-eye" id="eye"></i>

            </div>

            <label class="checkbox">

                <input type="checkbox" required>

                <span>
                    I agree to the
                    <a href="login.php" target="_blank">Terms & Conditions</a>
                </span>

            </label>

            <button class="create-btn" type="submit">
    Create Account
</button>




        </form>

        <div class="divider">
            <span>Or register with</span>
        </div>

        <div class="social">

            <button
                type="button"
                onclick="window.location.href='https://accounts.google.com/'">
                <i class="fab fa-google"></i>
                Google
            </button>

            <button
                type="button"
                onclick="window.location.href='https://www.facebook.com/'">
                <i class="fab fa-facebook"></i>
                Facebook
            </button>

        </div>

    </div>

</div>

<script>
const eye=document.getElementById("eye");
const password=document.getElementById("password");

eye.onclick=function(){

    if(password.type==="password"){
        password.type="text";
        eye.classList.replace("fa-eye","fa-eye-slash");
    }else{
        password.type="password";
        eye.classList.replace("fa-eye-slash","fa-eye");
    }

}
</script>

</body>
</html>