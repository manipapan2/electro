<!DOCTYPE html>
<?php
    $cookie_name = "test";
    $cookie_value = "electro";
    if (!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="mobile-nav-container" id="mobileNavContainer">
        <div class="close-mobile-nav" id="closeMobileNav"></div>
        <div class="mobile-nav" id="mobileNav">
            <a href="#">صفحه اصلی</a>
            <a href="#">حمایت مالی</a>
            <a href="#">وضعیت</a>
        </div>
    </div>


    <div class="progressOfScroll" id="progressOfScroll">
        <div class="mainProgress" id="mainProgress"></div>
    </div>

    <div class="upButton" id="upButton">&#11165;</div>

    <div class="introduction-container" id="introductionContainer">
        <nav>
            <div class="logo"></div>
            <div class="theme" id="themeButton">Theme</div>
            <div class="desktop-nav">
                <a href="#">وضعیت</a>
                <a href="#">حمایت مالی</a>
                <a href="#">صفحه اصلی</a>
            </div>
            <div class="menu-opener" id="menuOpener">☰</div>

        </nav>

        <div class="introduction-content-container">
            <div class="blockchain-logo"></div>
            <div class="introduction-description">
                <h1>با <span class="blue-span">«الکترو»</span> آزاد باش!</h1>
                <p>الکترو با هدف کمک به جامعه آنلاین ایران ایجاد شد تا با تحریم های ظالمانه شرکت های خارجی مقابله کند...</p>
                <div class="buttons-container">
                    <button>دی ان اس</button>
                    <button>دانلود الکترو</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card-container">
        <div class="card card1">
            <div class="card-icon">😃</div>
            <div class="card-title">اندروید</div>
            <div class="card-description">این نسخه مخصوص گوشی های اندروید می باشد که فقط دارای متد دی ان اس می باشد</div>
            <div class="card-options">
                <div>پرسرعت <span class="color-green">&#10003;</span></div>
                <div>طراحی زیبا <span class="color-green">&#10003;</span></div>
                <div>تحریم شکن <span class="color-green">&#10003;</span></div>
            </div>
            <button class="card-button card-button1">دانلود برای اندروید</button>
        </div>

        <div class="card card2">
            <div class="card-icon">😍</div>
            <div class="card-title">ویندوز</div>
            <div class="card-description">این نسخه مخصوص گوشی های اندروید می باشد که فقط دارای متد دی ان اس می باشد</div>
            <div class="card-options">
                <div>پرسرعت <span class="color-green">&#10003;</span></div>
                <div>طراحی زیبا <span class="color-green">&#10003;</span></div>
                <div>تحریم شکن <span class="color-green">&#10003;</span></div>
            </div>
            <button class="card-button card-button2">دانلود برای ویندوز</button>
        </div>
    </div>

    <div class="extra-container">
        <div class="extra">
            <div class="extra-icon">&#9728;</div>
            <div class="extra-title">رابط کاربری ساده</div>
            <div class="extra-description">رابط کاربری ساده ولی در عین حال کاربردی که براحتی می توانید از برنامه استفاده نمایید</div>
        </div>
        <div class="extra">
            <div class="extra-icon">&#9728;</div>
            <div class="extra-title">رابط کاربری ساده</div>
            <div class="extra-description">رابط کاربری ساده ولی در عین حال کاربردی که براحتی می توانید از برنامه استفاده نمایید</div>
        </div>
        <div class="extra">
            <div class="extra-icon">&#9728;</div>
            <div class="extra-title">رابط کاربری ساده</div>
            <div class="extra-description">رابط کاربری ساده ولی در عین حال کاربردی که براحتی می توانید از برنامه استفاده نمایید</div>
        </div>
    </div>

    <Footer>© Copyright 2021 Electro Team - All Rights Reserved</Footer>




    <script src="./script.js"></script>
</body>
</html>