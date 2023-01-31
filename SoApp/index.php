<html>

<head>

    <title> 
        Account Operations
    </title>

</head>

<body>

    <div style="text-align:center; margin: 20px; color: #31911a;"><a href="account_operations.php">ACCOUNT OPERATIONS</a></div>

    <div style="text-align:center;">
    <?php 

    include "config.php"; // Makes mysql connection

    $sql_statement = "SELECT * FROM all_accounts"; 

    $result = mysqli_query($db, $sql_statement); // Executing query

    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $username = $row['username']; 
        $nickname = $row['nickname']; 
        $pass = $row['pass']; 
        $age = $row['age'];
        echo "<div><a>" . $username . " - " . $nickname . " - " . $pass . " - " .$age . "</a></div>";
    } 

    ?>
    </div>

</body>




</html>