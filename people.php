

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
          
                echo "<li><a href=\"logout.php\"> Logout </a></li>";
                
?>
            </ul>
           
        </header>
    
    </nav>
</body>
    <main class="main">
        <section>   
    <?php

require "config.php";
$id = $_GET['id'];

$sql = ("SELECT id, name, email, keyprogramming, profile, education FROM cvs WHERE id = '$id'");
$result = mysqli_query($conn, $sql);
$rows=mysqli_fetch_assoc($result);
echo "
        <table align ='center' border='10px' style='width:80%; line-height:100px; background:grey ;margin-left:10%; margin-right:5%;  min-width:80vw; min-height: 10vw;'>
        <tr>
                                        <th colspan ='6'><h2> Data </h2></th>
                                        </th>
                                    </tr>
                                    <t>
                                        <th> ID </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Key Programming </th>
                                        <th> Profile</th>
                                        <th> Education </th>
                                        
                                    </t>

                                    <tr style='text-align: center;'>
                                            <td><a href=\"index.php\"> {$rows['id']}</a> </td>
                                            <td>{$rows['name']} </td>
                                            <td>{$rows['email']} </td>
                                            <td>{$rows['keyprogramming']} </td>
                                            <td>{$rows['profile']} </td>
                                            <td>{$rows['education']} </td>
                                        



";



?>
    
            </section>
   </main>
       
   <footer>
       
       
       
   
   </footer>
</body>
</html>