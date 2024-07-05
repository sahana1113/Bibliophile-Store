<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>About Us</h3>
        <p> <a href="home.php">Home</a> / About </p>
    </div>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="about.jpg" alt="">
            </div>

            <div class="content">
                <h3>Why choose us?</h3>
                <p>Our bookstore offers a wide variety of books across all genres and interests. Whether you're looking
                    for the latest bestseller, a classic novel, or a specialized academic text, we have something for
                    everyone.</p>
                <p>We proudly support local authors and independent publishers. Discover unique and diverse voices that
                    you won't find in larger chain stores.</p>
                <a href="contact.php" class="btn">Contact us</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">Client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="Feedback/pic-2.png" alt="">
                <p>I absolutely love shopping here! The website is easy to navigate, and the selection is amazing. My
                    orders always arrive quickly, and the personalized recommendations have led me to some fantastic
                    reads.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Emily S</h3>
            </div>

            <div class="box">
                <img src="Feedback/pic-1.png" alt="">
                <p>The best online bookstore I've found. The recommendation service is fantastic—I’ve discovered so many
                    great books that I wouldn’t have picked up otherwise. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>James P</h3>
            </div>

            <div class="box">
                <img src="Feedback/pic-4.png" alt="">
                <p>I recently started shopping here and have been so impressed. The online shopping experience is
                    seamless, and my orders always arrive quickly.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Sophia L</h3>
            </div>

            <div class="box">
                <img src="Feedback/pic-3.png" alt="">
                <p>This is my go-to online bookstore. The website is user-friendly, and I can always find something new
                    and interesting.Highly recommend!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Michael K</h3>
            </div>

            <div class="box">
                <img src="Feedback/pic-6.png" alt="">
                <p>I can’t say enough good things about this online bookstore. The personalized recommendations are
                    always spot on, and the website is very easy to use.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Olivia G</h3>
            </div>

            <div class="box">
                <img src="Feedback/pic-5.png" alt="">
                <p>I love the convenience of shopping here. The website is easy to browse, and I always find something
                    new to read. The fast shipping and great customer service keep me coming back for more.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Liam S</h3>
            </div>

        </div>

    </section>

    <section class="authors">

        <h1 class="title">Great Authors</h1>

        <div class="box-container">

            <div class="box">
                <img src="auth/1.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>J.K. Rowling</h3>
            </div>

            <div class="box">
                <img src="auth/2.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Jenny Han</h3>
            </div>

            <div class="box">
                <img src="auth/3.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Jefferey Archer</h3>
            </div>

            <div class="box">
                <img src="auth/4.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Coleen Hoover</h3>
            </div>

            <div class="box">
                <img src="auth/5.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Ana Huang</h3>
            </div>

            <div class="box">
                <img src="auth/6.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Stephen King</h3>
            </div>

        </div>

    </section>

    <?php include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>