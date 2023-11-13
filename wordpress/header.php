<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tanos</title>

    <?php wp_head(); ?>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->

<!-- Шапка сайта (меню) -->
<header>
    <!-- Меню (для десктопа) -->
    <nav class="navbar navbar-expand-lg navbar-layout bg-color">
        <div class="container">
            <!-- Логотип -->
            <a class="navbar-brand d-block navbar-logo" href="#">
                <img src="<?php bloginfo('template_url');?>/assets/img/logo-title.png" alt="" width="151" height="41">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Меню (основное) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto navbar-drop">
                    <li class="nav-item nav-item-drop dropdown js-drop">
                        <a class="link-layout dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Меню</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item link-layout" href="#">Услуги</a></li>
                            <li><a class="dropdown-item link-layout" href="#">Статьи</a></li>
                            <li><a class="dropdown-item link-layout" href="#">Вакансии</a></li>
                            <li><a class="dropdown-item link-layout" href="#">Фрашиза</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="link-layout" href="#">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-layout" href="#">Цена</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-layout" href="#">Схема работы</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-layout" href="#">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-layout" href="#">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-layout" href="#">Гарнатия</a>
                    </li>
                </ul>
                <!-- Кнопка на обратный звонок -->
                  <div class="d-flex">
                    <button class="btn btn-primary btn-layout" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Обратный звонок
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Форма для связи</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <form id="send-form" class="mb-3">
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-2 col-form-label" for="email">E-mail:</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="email"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary send-js">Отправить</button>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
