<?php
$login = false;
$showerror = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conection.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;

            header("location: index2.php");
            exit();
        } else {
            $showerror = true;
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pizza Pie</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
     <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Login successful.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $showerror) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Invalid username or password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
    }
    
?>    
<center><br><br><br>
    <form class="form" method="post" action="login.php">
        <div class="header">logIn</div>
        <div class="inputs">
            <input placeholder="Email" class="input" type="text" name="email" required>
            <input placeholder="Password" class="input" type="password" name="password" required>
            <div class="checkbox-container">
                <label class="checkbox">
                    <input type="checkbox" id="checkbox">
                </label>
                <label for="checkbox" class="checkbox-text">Remember me</label>
            </div>
            <button class="sigin-btn" type="submit">Submit</button>
            <a class="forget" href="#">Forget password?</a>
            <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </form>
    <!-- Link To JavaScript -->
    <script src="login.js"></script>
</body>

</html>
