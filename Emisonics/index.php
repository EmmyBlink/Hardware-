<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emisonics - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Welcome to Emisonics</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About</a></li>
              <li><a href="blog.php">Blog</a></li>
               <li><a href="contact.php">Contact</a></li>
                <li><a href="optional.php">Tools/ Tutorials</a></li>

        </ul>
    </nav>
</header>
<main>
    <h2>Recent post</h2>
    <p>This is a hardware maintenance blog that shares tutorials, guides, and tools for fixing or managing hardware systems </p>
<!-- Example: latest posts preview( to be fetched from Db later)-->
</main>
<footer><p>&copy; <?php echo date("Y"); ?> Emisonics. All rights Reserved</p></footer>

</body>
</html>