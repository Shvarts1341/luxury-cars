<?php
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];

    $conn = new mysqli("localhost", "shvartuo_grant", "Shvarts1517.", "shvartuo_grant");
    if($conn->connect_error){ 
        die("Ошибка: " . $conn->connect_error); 
    }

    $sql = "INSERT INTO reg (name, lastname, tel, email) VALUES ('$name', '$lastname','$tel','$email');";
     if($conn->query($sql)){ `
       <html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/luxury-cars/assets/styles/general.css">
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
    <section>
        <div class="container">
            <div class="personal">
                <h2>Личный кабинет</h2>
                <div class="line"></div>
                <form action="reg.php" method="post">
                    <label for="name">Имя</label>
                    <input id="name" type="text" name="name" placeholder=". $row[name]" readonly>

                    <label for="lastname">Фамилия</label>
                    <input id="lastname" type="text" name="lastname" placeholder=". $row[lastname]" readonly>

                    <label for="phone">Номер телефона</label>
                    <input id="phone" type="tel" name="tel" placeholder=". $row[tel]" readonly>

                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder=". $row[email]" readonly>

                    <button class="general_link">Сохранить</button>
                </form>
                <div class="line"></div>
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

</html>`;
   }
    else{
       echo "Ошибка: " . $conn->error;
   }

    $conn->close();
?>

