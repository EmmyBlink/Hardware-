<?php
$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');

    $message_body = trim($_POST['message'] ?? '');
    if($name && $email && $subject && $message_body && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $message = "Thank you, $name! Your message has been recieved.";
    }else{
        $message = "Please fill all fields correctly";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Emisonics</title>
     <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
    <h1>Contact Emisonics</h1>
     <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
          
            <li><a href="optional.php">Tools / Tutorials</a></li>

        </ul>
    </nav>
    </header>
    <main>
        <h2>Contact Us</h2>
        <?php if($message): ?>
            <p class="form-message"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>
            <form METHOD="POST" class="contact-form">
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name"><br><br>
                <label for="email">email:</label><br>
                <input type="email" name="email" id="email"><br><br>
                <label for="subject">subject:</label><br>
                <input type="subject" name="subject" id="subject"><br><br>
                <label for="message">Message:</label><br>
                <textarea name="message" id="message" rows="6"></textarea><br><br>

                <button type="submit">Send Message</button>
            </form>
    </main>
    <footer><p>&copy; <?php echo date("Y"); ?>Emisonics. All rights reserved</p></footer>
    
</body>
</html>