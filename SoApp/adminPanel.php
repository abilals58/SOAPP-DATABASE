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
        <span style="float:right;text-align:right;margin-left: -50px;"><a href="supportAdminDropdown.php">Support Page</a></span>
        
    </h3>
    
    <h4 style = "text-align:center">
    
        <span style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/account_operations.php">ACCOUNT OPERATIONS</a></span>
        <span style="float:right;text-align:right;margin-left: -60px;"><a href="applogin.html">APP Login </a></span>
    </h4>

    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/freeAccount_operations.php">FREE ACCOUNT OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/premiumAccountOperations.php">PREMIUM ACCOUNT OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/adminAccountOperations.php">ADMIN ACCOUNT OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/app_operations.php">APP OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/owner_operations.php">OWNER OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/organisation_operations.php">ORGANISATION OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/profitOrganisation_operations.php">PROFIT ORGANISATION OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/nonProfitOrganisation_operations.php">NON-PROFIT ORGANISATION OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/post_operations.php">POST OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/story_operations.php">STORY OPERATIONS</a></div>
    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="operations/profile_operations.php">PROFILE OPERATIONS</a></div>
    

    <div style="text-align:center;">

    
    <?php 

    include "config.php"; // Makes mysql connection

    $sql_statement = "SELECT * FROM all_accounts"; 

    $result = mysqli_query($db, $sql_statement); // Executing query

   

    ?>
    </div>

</body>




</html>