<!-- Подвал с полем ввода данных и ссылка на файл -->
<footer class="bg-dark section-layout">
    <div class="row">
        <div class="col-4 d-flex flex-column align-items-center">
            <h4 class="text-white">Скачать архив с кодом</h4>
            <a href="wp-content/uploads/2023/11/public.rar">Скачать</a>
        </div>
        <div class="col-8 d-flex flex-column align-items-center">
            <h3 class="text-white text-center mb-4">Форма для ввода артикуля</h3>
            <form id="myForm" class="d-flex flex-column align-items-center">
                <div class="mb-4 d-flex flex-column align-items-center">
                    <label for="article" class="visually-hidden">Password</label>
                    <input type="text" name="article" class="form-control" id="article" placeholder="Введите артикуль">
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary js-btn mb-3">Отправить</button>
                </div>
            </form>
            <div id="data"></div>
        </div>      
    </div>
    <div class="container container-map bg-light d-flex justify-content-center align-items-center">
  <div id="map" class="contacts__map" style="width: 800px; height: 800px">
  </div>
</footer>

<?php wp_footer();?>

</body>
</html>