<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me Website</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background-logo">
        <img src="images/logo.png" alt="Logo">
    </div>
    <div class="container">
        <header>
            <img src="images/logo.png" alt="Logo" class="logo">
        </header>
        <nav>
            <ul>
                <li><a href="#about">About Me</a></li>
                <li><a href="#contact">Contact Me</a></li>
                <li><a href="#more">More Info</a></li>
            </ul>
        </nav>

        <?php include('about_me.php'); ?>
        <?php include('contact_me.php'); ?>
        <?php include('more_info.php'); ?>

        <footer>
            <p>&copy; 2024 Gerbo Sison. All rights reserved.</p>
            <img src="images/logo2.png" alt="Logo" class="footer-logo">
        </footer>
    </div>
</body>
</html>
