<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/css/normalize.css">
    <link rel="stylesheet" href="style/css/style.min.css">
    <link rel="stylesheet" href="style/css/media.min.css"> -->
    <title>Ремонт квартир</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <ul class="text_shadow" id="navList">
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#company">Преймущества</a></li>
                    <li><a href="#price">Наши услуги</a></li>
                    <li><a href="#galery">Галерея</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                </ul>
                <div class="btn_burger_wrapper" id="clickBurger">
                    <div class="btn_burger_wrapper_content">
                        
                    </div>
                </div>
            </div>
        </nav>
        <div class="info_header">
            <div class="info_header_name">
                <div class="logo flex_center">
                    <img src="<?php echo B_IMG_DIR; ?>/logo.png" alt="">
                </div>
                <div class="info_header_name_more">
                    <h2>Медвежье Обновление</h2>
                    <p class="text_shadow" id="pContent">Сила и Надежность в Вашем Ремонте. Уют Гарантирован!</p>
                </div>
            </div>
            <div class="info_header_contact flex_center">
                <a href="#footer" class="text_shadow button_a button_hover">Заказать звонок</a>
            </div>
        </div>
    </header>
