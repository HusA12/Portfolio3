

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <nav class="navbar" style="min-width: 100%;">
        <header style="min-width: 100%;"> 
            <img src="Images/PinClipart.com_bull-riding-clip-art_115590.png" alt="Bull" style="width:50px;height:50px"> 
            <h1 class = "main-header">Portfolio</h1>
            <ul class="menu">
                <li><a href="index.php"> Home</a></li>
                <?php
                if(isset($_SESSION["id"])) {
                echo "<li><a href=\"logout.php\"> Logout </a></li>";
                } else { 
                    echo "<li><a href=\"login.php\"> Login </a></li>
                        <li><a href=\"register.php\">Register </a></li>";
                }
?>
            </ul>
            
        </header>
    </nav>
    <main>
        <section class="login">
            <div class="login-box">
                <div class="login-info">
                    <h3 class="login-title">Login</h3>
                    <div id="login-img"><img src="Images/PinClipart.com_bull-riding-clip-art_115590.png" alt="Bull logo" style="width:50px;height:50px"> </div>
                    
                    <form class="login-form" id="login-form" autocomplete="off" method="post" action="auth.php">

                        <div class="row">
                            <input type="email" class="login-input" id="EmailLogin" name="email" placeholder="Email"> 
                        </div>

                        <div class="row">   
                            <input type="password" class="login-input" id="PasswordLogin" name="password" placeholder="Password"> 
                        </div>

                        <div class="row">
                            <button type="submit" id="Login-button" name ="Submit">Login</button>
                        </div>

                    </form>



                </div>




            </div>




        </section>
        
        



    </main>

    <footer>
    
    </footer>
    
</body>
</html>