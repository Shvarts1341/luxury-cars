<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/luxury-cars/assets/styles/general.css">
    <link rel="stylesheet" href="/luxury-cars/assets/styles/reviews.css">
    <link rel="stylesheet" href="/luxury-cars/assets/styles/personal_account.css">
    <title>Luxury&Cars</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="header__wrapper">
                <a class="logo" href="../index.html"><img src="/luxury-cars/assets/images/logo.png" alt="logo"></a>
                <nav>
                    <ul>
                        <li><a href="/luxury-cars/documents/cars.html">Автомобили</a></li>
                        <li><a href="/luxury-cars/documents/reviews.php">Отзывы</a></li>
                        <li><a href="/luxury-cars/documents/partners.html">Партнёры</a></li>
                        <li><a href="/luxury-cars/documents/about_the_company.html">О компании</a></li>
                    </ul>
                </nav>
                <div class="personal_account">
                    <a href="/luxury-cars/documents/personal_account.html"><img src="/luxury-cars/assets/images/account.png" alt="account"></a>
                    <a href="/luxury-cars/documents/personal_account.html">Личный<br>кабинет</a>
                </div>
            </div>
        </div>
    </header>

    <section class="reviews">
        <div class="container">
            <div class="reviews__wrapper">
                <h2>Отзывы покупателей</h2>
                <div class="buyer_cards">
                    <div class="line"></div>
                    <?php
                    $mysqli = new mysqli('localhost', 'shvartuo_grant', 'Shvarts1517.', 'shvartuo_grant');
                    if ($mysqli->connect_errno) {
                        echo "Ошибка";
                        echo "Причина:";
                        echo "Номер ошибки: " . $mysqli->connect_errno . " ";
                        echo "Ошибка: " . $mysqli->connect_error . " ";
                        exit;
                    }

                    $query = "SELECT * FROM guest WHERE 1";
                    $result = $mysqli->query($query);
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="buyer_card">
                        <div class="user__account">
                            <img src="/assets/images/account.png" alt="buyer">
                            <span>' . $row["name"] . '</span>
                        </div>
                        <p>' . $row["text"] . '</p>
                        </div>';
                    }

                    if (isset($_POST['formSubmit'])) {
                        $nameform = $_POST['name'];
                        $commentform = $_POST['comment'];
                        $name = '"' . $mysqli->real_escape_string($nameform) . '"';
                        $comment = '"' . $mysqli->real_escape_string($commentform) . '"';
                        $query = "INSERT INTO guest(name,text) VALUES ($name,$comment)";
                        $result = $mysqli->query($query);
                        if (!$result) {
                            die('Error: (' . $mysqli->errno . ')' . $mysqli->error);
                        }
                        $mysqli->close();
                        echo ("<meta http-equiv='refresh' content='1'>");
                    }
                    ?>

                    <div class="line"></div>
                </div>
                <h2>Оставьте свой отзыв</h2>
                <form method="post" class="reviews-form">
                    <label for="name">Имя</label>
                    <input type="text" name="name" autocomplete="off">
                    <label for="comment">Отзыв</label>
                    <textarea name="comment" id="preferences" cols="30" rows="10" autocomplete="off"></textarea>
                    <input type="submit" name="formSubmit" value="Отправить" class="general_link">
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer__wrapper">
                <div class="copyright">
                    <span>Оставляя свои личные данные, вы принимаете Пользовательское соглашение</span><br>
                    <span>Все права защищены © LUXURY&CARS.RU 2023 г.</span><br>
                    <span>Техническая поддержка</span>
                </div>
                <div class="phone_numbers">
                    <span>Телефоны для связи с салоном</span><br>
                    <span>г. Москва +7 (999)-111-22 33</span><br>
                    <span>г. Санкт-Петербург +7 (999)-222-33 44</span><br>
                    <span>г. Сочи +7 (999)-333-44 55</span>
                </div>
                <div class="social_media">
                    <a href="#"><img src="/luxury-cars/assets/images/instagram.png" alt=""></a>
                    <a href="#"><img src="/luxury-cars/assets/images/twitter.png" alt=""></a>
                    <a href="#"><img src="/luxury-cars/assets/images/vk.png" alt=""></a>
                    <a href="#"><img src="/luxury-cars/assets/images/telegram.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>