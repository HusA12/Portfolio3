<?php
    require 'config.php';
    if (!empty($_SESSION["id"])) {
        header("Location: index.php");
    }

    if (isset($_POST['Submit'])) {
        require_once('connectdb.php');

        $name = $email = $language = $profile = $education = $links = $password = '';

        $name = $_POST['name'];
        $email = $_POST['email'];
        $language = $_POST['language'];
        $profile = $_POST['profile'];
        $education = $_POST['education'];
        $links = $_POST['links'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        
        

        
        $duplicate = mysqli_query($conn, "SELECT * FROM cvs WHERE email ='$email'");
        if (mysqli_num_rows($duplicate)> 0) {
            echo "<script> alert('Email has been taken'); </script>";
        } elseif ($password == $confirmPassword)
        { $password = md5($password);
        
        $sql = "INSERT INTO cvs (name, email, password, keyprogramming, profile, education, URLlinks)
        VALUES ('$name', '$email', '$password', '$language', '$profile', '$education', '$links')";
        
        
        $result = mysqli_query($conn, $sql);
        

        if ($result) {
            echo("Success!");
            header("Location: login.php");

        }
        
        
        }else if ($password != $confirmPassword) {
          echo  "<script> alert('Passwords do not match'); </script>";} }

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script defer src="script.js"></script>
</head>
<body>
    <nav class="navbar" style="min-width: 100%;">
        <header style="min-width: 100%;"> 
            <img src="Images/PinClipart.com_bull-riding-clip-art_115590.png" alt="Bull" style="width:50px;height:50px"> 
            <h1 class = "main-header">Portfolio</h1>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php"><STRONG>Register</STRONG> </a></li>
            </ul>
            
        </header>
    
    </nav>
    <main>
        <section class="register-me">
            <div class="register-box">
                <div class="register-info"></div>
                <h3 class ="register-title">Register</h3>
                
                <div id="register-img"><img src="Images/PinClipart.com_bull-riding-clip-art_115590.png" alt="Bull logo" style="width:50px;height:50px"> </div>

                <form class="register-form", method="post", action = "register.php", id="register-form" autocomplete="off">
                    
                    <div class="row">
                        <input type="text" class="register-input" id="FullName" required name="name" placeholder="Full name"> 
                        <input type="password" class="register-input" id="Password" required name="password" placeholder="Password"
                         > 
                         <input type="password" class="register-input" id="confirmPassword" required name="confirmPassword" placeholder="Confirm Password"
                         > 
                    </div>
                    <div class="row">
                        <input type="email" class="register-input" id="Email" required name="email" placeholder="Email">
                        
                        <input type="text" class="register-input" id="Language" required name="language"  placeholder="Key Programming language">
                    </div>
                    <div class="row">
                        <input type="text" class ="register-input" id="Profile" name ="profile" placeholder="Profile" >
                        <input type="text" class="register-input" id="Education" name="education" placeholder="Education" >
                    </div>
                    <div class="row">
                    
                        <input type="text" id="Links" name="links" class="register-input" placeholder="Links" >
        
                    </div>
                    <div class="row">

                    
                            <button type="submit" id="submit-button" name="Submit">Submit</button>
                    </div>
                    </form>

                    <p> Already a user? <a href="login.php">Log in</a>  </p>
                
                </div>
            
            
        </section>

    </main>

    <footer>
        
    
    </footer>
    
</body>
</html>

