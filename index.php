<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Cinemas</title>
</head>

<body>
    <div>
        <section>
            <header>
                <div class="navbar">
                    <div class="logo"><a href="#" class="navBtn logo">Movies4U</a></div>
                    <ul class="links">
                        <li><a href="#" class="navBtn">Home</a></li>
                        <li><a href="#" class="navBtn">Movies</a></li>
                        <li><a href="seats.html" class="navBtn">Booking</a></li>
                    </ul>
                    <?php if (isset($_SESSION['user_email'])) : ?>
                        <a href="logout.php" class="action_btn navBtn">Logout</a> <!-- Corrected class attribute -->
                    <?php else : ?>
                        <a href="login.php" class="action_btn navBtn">Log In</a> <!-- Corrected class attribute -->
                    <?php endif; ?>
                    <div class="toggle_btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>

                <div class="dropdown_menu">
                    <li><a href="#" class="navBtn">Home</a></li>
                    <li><a href="#" class="navBtn">Movies</a></li>
                    <li><a href="#" class="navBtn">Booking</a></li>
                    <li><a href="#" class="navBtn" class="action_btn">Log in</a></li>
                </div>
            </header>
        </section>
    </div>

    <div class="heading-container">
        <strong>Now Showing</strong>
    </div>

    <div class="caraousel-container">
        <div class="caraousel-container-sub">
            <a href="action.php">
                <div class="caraousel-container-cards">
                    <div class="image-class">
                        <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2023/03/IMG_1887-scaled.jpeg" alt="">
                    </div>

                    <div class="information">
                        <div class="title">
                            <strong>Avengers Infinity War</strong>
                        </div>

                        <div class="title">
                            <p>Sci-Fi / War</p>
                            <p>1hr 25 min</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="action.php">
                <div class="caraousel-container-cards">
                    <div class="image-class">
                        <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2023/03/IMG_1887-scaled.jpeg" alt="">
                    </div>
                    <div class="information">
                        <div class="title">
                            <strong>Avengers Infinity War</strong>
                        </div>
                        <div class="title">
                            <p>Sci-Fi / War</p>
                            <p>1hr 25 min</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="action.php">
                <div class="caraousel-container-cards">
                    <div class="image-class">
                        <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2023/03/IMG_1887-scaled.jpeg" alt="">
                    </div>
                    <div class="information">
                        <div class="title">
                            <strong>Avengers Infinity War</strong>
                        </div>
                        <div class="title">
                            <p>Sci-Fi / War</p>
                            <p>1hr 25 min</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div class="heading-container">
        <strong>Next Change</strong>
    </div>

    <div class="caraousel-container">
        <div class="caraousel-container-sub">
            <div class="caraousel-container-cards">
                <div class="image-class">
                    <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2023/03/IMG_1887-scaled.jpeg" alt="">
                </div>

                <div class="information">
                    <div class="title">
                        <strong>Avengers Infinity War</strong>
                    </div>

                    <div class="title">
                        <p>Sci-Fi / War</p>
                        <p>1hr 25 min</p>
                    </div>
                </div>
            </div>

            <div class="caraousel-container-cards">
                <div class="image-class">
                    <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2023/03/IMG_1887-scaled.jpeg" alt="">
                </div>

                <div class="information">
                    <div class="title">
                        <strong>Avengers Infinity War</strong>
                    </div>

                    <div class="title">
                        <p>Sci-Fi / War</p>
                        <p>1hr 25 min</p>
                    </div>
                </div>
            </div>

            <div class="caraousel-container-cards">
                <div class="image-class">
                    <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2023/03/IMG_1887-scaled.jpeg" alt="">
                </div>

                <div class="information">
                    <div class="title">
                        <strong>Avengers Infinity War</strong>
                    </div>

                    <div class="title">
                        <p>Sci-Fi / War</p>
                        <p>1hr 25 min</p>
                    </div>
                </div>
            </div>

            <div class="caraousel-container-cards">
                <div class="image-class">
                    <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2023/03/IMG_1887-scaled.jpeg" alt="">
                </div>

                <div class="information">
                    <div class="title">
                        <strong>Avengers Infinity War</strong>
                    </div>

                    <div class="title">
                        <p>Sci-Fi / War</p>
                        <p>1hr 25 min</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="navbar.js"></script>
</body>

</html>