<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post - Emisonics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Create a New Blog Post</h1>
        <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="optional.php">Tools / Tutorials</a></li>

            </ul>
    
        </nav>
    </header>
    <main>
        <form method="POST">
           <label>Title:</label>
           <input type="text" name="title"><br><br>
           <label>Content:</label>
          <textarea name="content" rows="10" cols="60"></textarea><br><br>
          <button type="submit" name="submit">Publish</button>

        </form>
        <?php
        if(isset($_POST['submit'])) {
            $title = $conn->real_escape_string($_POST['title']);
            $content =  $conn->real_escape_string($_POST['content']);

            $sql = "INSERT INTO emmy (title, content) VALUES('$title', '$content')";
            if($conn->query($sql)){
                echo "<p> Post Published successfully!</p>";
            }else{
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </main>
    <footer><p>&copy; <?php echo date("Y"); ?>Emisonics. All rights reserved</p></footer>
</body>
</html>