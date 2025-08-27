<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post - Emisonics</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="optional.php">Tools / Tutorials</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        if (isset($_GET['userId'])) {
            $id = intval($_GET['userId']);
            $stmt = $conn->prepare("SELECT * FROM emmy WHERE userId = ?");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0);
            $post = $result->getch_assoc();
        
        ?>
        <h2><?php echo htmlspecialchars($post['title']); ?></h2>
         <small> Posted on <?php echo $row['created_at']; ?> </small>
        <p><?php echo nl2br($post($row['content']), 0, 150); ?>...</p>

<?php
        else:
            echo "<p> Post not found.</p>";
        endif;
    }else{
        echo "<p> Invalid post ID.</p>";
    }
        ?>
    </main>
    <footer>
         <p>&copy; <?php echo date("Y"); ?>Emisonics. All rights reserved</p>
    </footer>
</body>
</html>