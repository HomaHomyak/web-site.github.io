<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<header>
        <div class="container">
            <div class="header-left">
                <a href="index.html">
                    <img src="image/png-transparent-russian-orthodox-church-eastern-orthodox-church-russian-orthodox-cross-christian-church-religion-christian-cross-christianity-text-symmetry-thumbnail.png" alt="Логотип">
                </a>
                <div class="header-text">
                    <h1>Александро-Невский Кафедральный Собор</h1>
                    <p>г. Курган</p>
                </div>
            </div>
            <div class="header-right">
                <nav>
                    <ul>
                        <li><a href="#">О соборе</a></li>
                        <li><a href="news.html">Новости</a></li>
                        <li><a href="#">Расписание служб</a></li>
                        <li><a href="contact">Контакты</a></li>
                        <li><a href="page2.html">Пожертвования</a></li>
                    </ul>
                </nav>
                <div class="user-actions">
                    <button id="profile-button"><a href="profile.php">Профиль</a></button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="profile">
            <div class="container">
                <h2>Профиль</h2>
                <div class="user-actions">
                    <?php
                        session_start();
                        if (isset($_SESSION['user'])) {
                            echo "<div class='logged-in'>";
                            echo "<p>Логин: " . $_SESSION['user']['login'] . "</p>";
                            echo "<p>Почта: " . $_SESSION['user']['email'] . "</p>"; 
                            echo "<img src='" . $_SESSION['user']['avatar'] . "' alt='Аватар' class='avatar'>";
                            echo "<button id='logout-button'><a href='logout.php'>Выход</a></button>";
                            echo "</div>";
                        } else {
                            echo "<div id='login-form'>";
                            echo "<button><a href='login.php'>Войти</a></button>";
                            echo "</div>";
                            echo "<div id='registration-form'>";
                            echo "<button><a href='register.php'>Зарегестрироваться</a></button>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <footer>
    <div class="container">
            <div class="contact-info" id="contact" style="display: block;text-align: left;">
                <p >Адрес: <a href="#">г. Курган, ул. Володарского, 42</a></p>
                <p >Телефон: <a href="tel:+7352460143">+7 (3524) 6-01-43</a></p>
                <p >Email: <a href="mailto:sobor@example.com">sobor@example.com</a></p>
            </div>
            <div class="social-media" style="display: block;text-align: right;">
                <a href="https://vk.com/eparhiyakurgan" target="_blank"><img style="width: 52px; height: 52px;" src="image/png-transparent-vk-chat-logo-social-social-media-social-media-logos-icon-thumbnail.png" alt="ВКонтакте"></a>
                <a href="https://www.youtube.com/c/kurganvera_tv/" target="_blank"><img style="width: 52px; height: 52px;" src="image/png-transparent-youtube-computer-icons-youtube-angle-rectangle-black-thumbnail.png" alt="YouTube"></a>
            </div>
            <p>&copy; 2024 Александро-Невский Кафедральный Собор</p>
        </div>
    </footer>
</body>
</html>