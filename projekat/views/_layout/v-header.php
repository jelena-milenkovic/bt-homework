<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <title>Shop</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
                <img src="./public/theme/img/logo.jpg" width=100 height=100>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="
                                nav-link
                                <?php if($page == 'index') {
                                echo htmlspecialchars('active');
                                } ?>
                                " href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="
                                nav-link
                                <?php if($page == 'all-products-page') {
                                echo htmlspecialchars('active');
                                } ?>
                                " 
                                href="./all-products-page.php"
                                >
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="
                                nav-link
                                <?php if($page == 'about-us-page') {
                                echo htmlspecialchars('active');
                                } ?>
                                " 
                                href="./about-us-page.php"
                                >
                                About us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./login-page.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./register-page.php"> /   Register</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    <a class="nav-link position-relative" href="./shopping-cart-page.php">
                        Shopping Cart
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php 
                            if(!empty($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo 0;
                            }
                            ?>
                        </span>
                    </a>
                </div>
            </div>
        </nav>
    </header>