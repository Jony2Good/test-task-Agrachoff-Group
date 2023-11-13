<?php
/*
 Template Name: home
 */
?>
<?php get_header();?>
<!-- Главный блок  -->
<main class="bg-color">
    <div class="container main d-flex flex-column align-items-center">
        <div class="row main__block">
            <!-- Блок с заголовком  -->
            <div class="col-7 main__block-left">
                <div class="main__block-left-title">
                    <h1 class="text-white">Ремонт под ключ от 2900 руб/м2.</h1>
                    <div class="main__block-left-descr">
                        <p class="js-gsap-text text-white">При заказе ремонта делаем <span
                                class="text-underline">дизайн-проект</span> в подарок</p>
                    </div>
                </div>
                <ul class="d-flex flex-wrap main__block-left-icons">
                    <li class="d-flex">
                        <img src="<?php bloginfo('template_url');?>/assets/img/main_icon_third.svg" alt="nice icon">
                        <div class="main__block-left-icons-descr">
                            <p class="text-white">Бесплатный выезд в день обращения</p>
                        </div>
                    </li>
                    <li class="d-flex ">
                        <img src="<?php bloginfo('template_url');?>/assets/img/main_icon_second.svg" alt="nice icon">
                        <div class="main__block-left-icons-descr">
                            <p class="text-white">Гарантия на работу до 5 лет</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <img src="<?php bloginfo('template_url');?>/assets/img/main_icon_first.svg" alt="nice icon">
                        <div class="main__block-left-icons-descr">
                            <p class="text-white">Жесткое соблюдение сроков</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Блок с формой  -->
            <div class="col-5 main__block-right bg-light">
                <h3>Рассчитайте стоимость ремонта</h3>
                <form class="main__block-right-form">
                    <output class="slider-text" id="output">68 m</output>
                    <div class="form-group slider">
                        <p class="form-title-slider">Площадь квартиры:</p>
                        <label for="form-range" class="fill" id="fill"></label>
                        <input type="range"
                               id="form-range"
                               class="js-slider range-slider"
                               name="form-range"
                               value="68"
                               min="0"
                               max="150"
                               oninput="slider()">
                    </div>
                    <!-- Блок с радио кнопками  -->
                    <div class="form-group form-group-radio-wrapper">
                        <div class="form-radio-title">Тип жилья:</div>
                        <div class="d-flex justify-content-between">
                            <div class="form-radio-group d-flex align-items-center">
                                <input type="radio" name="type" id="radio-first" value="Вторичное жилье">
                                <label for="radio-first"><span></span>Вторичное жилье</label>
                            </div>
                            <div class="form-radio-group d-flex align-items-center">
                                <input type="radio" name="type" id="radio-second" value="Новостройка">
                                <label for="radio-second"><span></span>Новостройка</label>
                            </div>
                            <div class="form-radio-group d-flex align-items-center">
                                <input type="radio" name="type" id="radio-third" value="Офис">
                                <label for="radio-third"><span></span>Офис</label>
                            </div>
                        </div>
                    </div>
                    <!-- Блок с радио кнопками выбора комнат -->
                    <div class="form-group form-group-rooms-wrapper">
                        <div class="form-radio-title">Кол-во комнат:</div>
                        <div class="d-flex justify-content-between">
                            <div class="form-radio-group d-flex align-items-center">
                                <input type="radio" name="count" id="room-one" value="1">
                                <label for="room-one"><span></span>1</label>
                            </div>
                            <div class="form-radio-group d-flex align-items-center">
                                <input type="radio" name="count" id="room-two" value="2">
                                <label for="room-two"><span></span>2</label>
                            </div>
                            <div class="form-radio-group d-flex align-items-center">
                                <input type="radio" name="count" id="room-three" value="3+">
                                <label for="room-three"><span></span>3+</label>
                            </div>
                            <div class="form-radio-group d-flex align-items-center">
                                <input type="radio" name="count" id="room-four" value="Студия">
                                <label for="room-four"><span></span>Студия</label>
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка отправить данные формы -->
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary btn-layout" type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Блок со скроллом -->
        <div class="main__block-scroll">
            <a href="#" class="scroll-block text-center">
                <div class="scroll-layout"><img src="<?php bloginfo('template_url');?>/assets/img/scroll.svg" alt="scroll"></div>
                <p class="link-layout">Scroll</p>
            </a>
        </div>
        <div class="bg-image"></div>
    </div>
</main>

<?php get_footer(); ?>

