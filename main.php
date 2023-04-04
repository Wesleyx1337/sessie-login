<?php
session_start();
if(isset($_SESSION['user'])) {
  echo "Je bent ingelogd " . $_SESSION['user'];
}

else header("sessie.php");
?>
<!DOCTYPE html>
<html lang="en">
    <title>Main page</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<style> 
    .homebutton { 
        position: absolute; 
        top: 0; 
        right: 0; 
    }

</style> 
<body>        
    <input type="button" value="uitloggen" class="homebutton" id="btnHome" 
    onClick="document.location.href='logout.php'" />
    
    <div class="main-block">
        <nav>
            <div class="logo">
                <h1>Wesley</h1>
            </div>
            <div class="nav-menu">
                <ul>
                    <li>Home</li>
                    <li>Contact</li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="left-side">
                <h1>Hello World</h1>
                <p>Home</p>
                <a href="#products">test <i class="fas fa-arrow-down"></i></a>
            </div>
        </div>
    </div>
    <section class="products">
        <div class="content-block">
            <h1>Github Profile</h1>
            <p>Here is my github Profile <br> You can find my link below</p>
            <a href="https://github.com/Wesleyx69">
                <div class="social-block">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="">
                </div>
            </a>
        </div>
    </section>
    <section class="leaks">
        <div class="container2">
            <h1>Header 2</h1>
            <p> test test test <br> hello hello hello</p>
        </div>
    </section>
    <section class="contact">
        <div class="container3">
            <h1>Contact me</h1>
            <div class="social-table">
                <a href="">
                    <div class="social-block">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="social-block">
                        <img src="https://cdn0.iconfinder.com/data/icons/apple-apps/100/Apple_Mail-512.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <footer>
        <p>Made with love by <a href="https://www.instagram.com/forcafx/">Wesley</a></p>
    </footer>
</body>
</html>
