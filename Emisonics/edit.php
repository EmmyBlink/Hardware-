<?php
include('db.php');

if(!isset($_GET['userId'])){
    die("No post ID specified.");
}

$id =intval($_GET["userId"]);
$message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $title = $conn->real_escape_string($_POST['title'] ?? '');
    $content = $conn->real_escape_string($_POST['content'] ?? '');

    if($title && $content){
        $sql = "UPDATE emmy SET title = '$title', content = '$content' WHERE id=$userId";
        if($conn->query($sql)){
            $message = "Post updated successfully.";
        }else{
            $message = "Error updating post: ". $conn->error;
        }
    }else{
        $message = "please fill out all feilds.";
    }
}


$sql = "SELECT * FROM emmy WHERE id=$userId";
$result = $conn->query($sql);
if ($result->num_rows === 0){
    die("Post not found.");
}
$post = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit post - Emisonics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Edit Blog Post</h1>
         <nav><ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="optional.php">Tools / Tutorials</a></li>

        </ul>
    </nav>
    </header>
    <main>
        <?php 
        if($message): ?>
        <p class="form-message"><?php  echo htmlspecialchars($message); ?></p>
            <?php endif; ?>
            <form METHOD="POST">
                <label >Title:</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>">
                <label>Content</label><br>
               <textarea name="content" rows="10" <?php echo htmlspecialchars($post['content']); ?>>
               </textarea>  <br><br>

               <button type="submit">Update Post</button>
    </main>
    <footer><p>&copy; <?php echo date("Y"); ?>Emisonics. All rights reserved</p></footer>
</body>
</html>















