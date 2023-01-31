<html>

<head>  

    <title> 
        SoApp

    </title>
    <style>
    body {
    background-color: #93b6b8;
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: 100% 100%;
    }
    </style>

</head>

<body >
    
    <h3 style = "text-align:center">
        <span style="text-align:center; margin-bottom: 0px; color: #31911a;"><font size="25">SOAPP</font></span>
        <span style="float:right;text-align:right;margin-left: -50px;"><a href="loginPHP.php">Login </a></span>
        
    </h3>
    
    <h4 style = "text-align:center">
    
        <span style="text-align:center; margin: 20px; color: #31911a;"><a href="contactAdminMenu.html">IF YOU HAVE ANY PROBLEMS, CONTACT OUR SUPPORT</a></span>
        
    </h4>



    
    <?php 

    include "config.php"; // Makes mysql connection

    $sql_statement = "SELECT * FROM all_accounts"; 

    $result = mysqli_query($db, $sql_statement); // Executing query

   

    ?>
    </div>

</body>




</html>