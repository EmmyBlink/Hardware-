<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Emisonics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Emisonics Blog</h1>
    <nav><ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="optional.php">Tools / Tutorials</a></li>

        </ul>
    </nav>
</header>
<main>
    <h2>All Blog Posts</h2>
    <?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "emisonics";

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
    $sql = "SELECT * FROM emmy";
    $result = $conn->query($sql);
   if( $result = $result->num_rows > 0);
      while ($row = $result-> fetch_assoc()){

        echo "<h2>" . $row['title'].  "</h2>";
        echo "<p>" . $row['content']. "</p>";
        echo "<hr>";
     
    

      } 
      
      $conn-close();
?>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?>Emisonics. All rights reserved</p>
</footer>
</body>
</html>