<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "views/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>My Portofolio</title>
</head>
<body>
    <style>
        .facebook_icon:hover {
        filter:drop-shadow(10px 10px 4px #4444dd);
        }
    </style>
    <div class="menu">
<?php include 'views/php/layout/navbar.php';?>
</div>
    <!-- header -->
    <header id = "header" class = "vh-100 flex">
        <div class = "container">
            <div class = "header-content">
                <h1>I'm specialized in <br><span class = "typewrite" data-loop = "yes" data-speed = "100" data-delay = "2000" data-words = '["Developer", "Web developer", "OOP", "PHP"]'></span></h1>
                <h3>Alejandro Atacho</h3>

                <ul class = "social-links">
                    <li class="facebook_icon">
                        <a href = "#" class = "flex">
                            <i class = "fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "https://github.com/alejandroatacho" class = "flex">
                            <i class = "fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "#" class = "flex">
                            <i class = "fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "#" class = "flex">
                            <i class = "fab fa-pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- main content -->
    <main>
        <!-- about section -->
        <section id = "about" class = "about py-7">
            <div class = "container">
                <div class = "about-content grid">
                    <div class = "about-left">
                        <img class="about-picture" src= "images/girl-2696947.jpg" alt = "">
                    </div>
                    <div class = "about-right">
                        <div class = "title">
                            <h2>About Me</h2>
                        </div>
                        <p class = "lead">Hello, My name is Alejandro Atacho<br> An Object Oriented Programmeren & Web Developer focused on creating innovative digital solutions that leave a positive impact on our future.</p>

                        <p class = "lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, dignissimos eum asperiores recusandae possimus quia, quos labore voluptatibus sed saepe est, laboriosam ratione! Omnis quo dolore harum aspernatur, velit necessitatibus.</p>
                        <a href = "#work" class = "btn-down">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

    <!-- typewriting js -->
    <script src = "views/js/script.js"></script>
</body>
</html>