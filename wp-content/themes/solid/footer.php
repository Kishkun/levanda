<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solid
 */

?>


	<footer>
        <section class="footer-wrapper">
            <div class="site-wrapper">
                <div class="footer-body">
                    <div class="footer-info">
                        <address class="footer-address">
                            CITADELES IELA 1A, RĪGA
                            (ВХОД С УЛИЦЫ MUITAS)
                        </address>
                        <div class="footer-number">
                            <a class="contact-link" href="tel:+37167509172">+371 67509172</a>
                            <a class="contact-link" href="tel:+37127500410">+371 27500410</a>
                        </div>
                        <div class="footer-mail">
                            <a class="contact-mail" href="mailto:info@levande.lv">INFO@LEVANDE.LV</a>
                        </div>
                    </div>
                    <div class="footer-social">
                        <a href="#" target="_blank" class="social-link" title="go to instagram">
                            <img src="wp-content/uploads/2019/06/instagram.png" alt="instagram"/>
                        </a>
                        <a href="#" target="_blank" class="social-link" title="go to facebook">
                            <img src="wp-content/uploads/2019/06/facebook-logo.png" alt="facebook"/>
                        </a>
                        <a href="#" target="_blank" class="social-link" title="go to vk">
                            <img src="wp-content/uploads/2019/06/vk.png" alt="vk"/>
                        </a>
                    </div>
                </div>

            </div>
        </section>
	</footer>

<?php wp_footer(); ?>

<script src="https://api-maps.yandex.ru/2.1/?apikey=<ваш API-ключ>&lang=ru_RU" type="text/javascript">
</script>

<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [56.953153, 24.101000],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 19
        });
        var myPlacemark = new ymaps.Placemark(
            [56.953153, 24.101000], {
                balloonContentHeader: 'LEVANDE BEAUTY'
            }, {
                preset: 'islands#redDotIcon'
            });
        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');
        myMap.controls.remove('trafficControl');
        myMap.controls.remove('typeSelector');
    }
</script>
</script>

</body>
</html>
