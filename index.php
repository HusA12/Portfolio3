<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width, inital-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <nav class="navbar" style="min-width: 100%;">
        <header style="min-width: 100%;"> 
            <img src="Images/PinClipart.com_bull-riding-clip-art_115590.png" alt="Bull" style="width:50px;height:50px"> 
            <h1 class = "main-header">Portfolio</h1>
            <ul class="menu">
                <li><a href="index.php"><STRONG>Home</STRONG></a></li>  

                <?php
                require "config.php";
                
                if (isset($_SESSION["id"])) {
                    
                
                echo "<li><a href=\"logout.php\"> Logout </a></li>";
                } else { 
                    echo "<li><a href=\"login.php\"> Login </a></li>
                        <li><a href=\"register.php\">Register </a></li>";
                        
                        
                }
?>
            </ul>
           
        </header>
    
    </nav>
    
    <main class="main">
        <section>
        <?php   
        include "connectdb.php";
                
                if (isset($_SESSION["id"])) {
                   
                    $sql = ("SELECT id, name, email, keyprogramming FROM cvs");
                    $result = mysqli_query($conn, $sql);
                    
                    echo "
                    <div style='margin-left:10%; margin-right:5%;  min-width:80vw; min-height: 10vw;'>
                        <div class ='scroll-div'>
                            <div class ='scroll-object'>
                                <table align ='center' border='10px' style='width:100%; min-width:1000px;  line-height:100px; background:grey'>
                                    <tr>
                                        <th colspan ='3'><h2> Data </h2></th>
                                        <th colspan ='2'>
                                        
                                        <form class='search', method='post' ,  autocomplete='off'>
                                            <input type='text' name='search' required/>
                                            <button type='searchSubmit'> Search </button>

                                        </form>
                                        
                                        
                                        </th>
                                    </tr>
                                    <t>
                                        <th> ID </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Key Programming </th>
                                        
                                    </t>";
                                    
                                        if (isset($_POST['search'])){
                                            $nameAndLanguage = $_POST['search'];
                                            $sql = ("SELECT id, name, email, keyprogramming FROM cvs where name = '$nameAndLanguage' or keyprogramming = '$nameAndLanguage'");
                                            $result = mysqli_query($conn, $sql);
                                            while($rows=mysqli_fetch_assoc($result)) {
                                                echo "
                                            <tr style='text-align: center;'>
                                            <td>{$rows['id']} </td>
                                            <td>{$rows['name']} </td>
                                            <td>{$rows['email']} </td>
                                            <td>{$rows['keyprogramming']} </td>";
                                            
                                        
                                            }
                                        }

                                        
                                        

                                        
                                    
                                        while($rows=mysqli_fetch_assoc($result)) 
                                        {
                                            echo "
                                        <tr style='text-align: center;'>
                                            <td>{$rows['id']} </td>
                                            <td>{$rows['name']} </td>
                                            <td>{$rows['email']} </td>
                                            <td>{$rows['keyprogramming']} </td>";
                                        }
                                            
                                    echo" </tr>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>";
                    
                
                } else { 
                    echo "<div class=\"home-content\">
                    <div class=\"homeBx\">
                        <div class=\"login_buttons\"> 
                        
                        <p> Login to add your CV</p>
                        <a href=\"login.php\">
                            <span>Login</span>
                        </a>
                        <a  href=\"register.php\">
                            <span>Register</span>
                        </a>
                    </div>
                        <blockquote cite=\"https://dzone.com/articles/best-programming-jokes-amp-quotes\"></blockquote>
                        <p><STRONG>“First, solve the problem. Then, write the code.” – John Johnson</STRONG></p>
                    </div>
                </div>";
                        
                }
        ?>
           
    
                
        </section>
   
    </main>
        
    <footer>
        
        
    
    </footer>
</body>
</html>

