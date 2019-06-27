<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solid
 */

get_header();
?>


    <main>
        <article class="main-wrapper">
            <section class="services-wrapper">
                <div class="services-title">
                    <h2 class="title_h2">УСЛУГИ</h2>
                </div>
                <div class="services_sub-title">services</div>
                <div class="site-wrapper">
                    <div class="services-inner">
                        <div class="services-body">
                            <div class="services-content">
                                <div class="services-block block-first">
                                    <div class="services_block-inner">
                                        <figure class="services-image image-first">
                                            <img src="wp-content/uploads/2019/06/service1.png"
                                                 alt="service"/>
                                        </figure>
                                        <a href="#" class="services-next next-first active"></a>
                                    </div>
                                    <div class="services_block-title services_block-title-first">
                                        <h3 class="title_h3">ПАРИКМАХЕРСКИЕ УСЛУГИ</h3>
                                    </div>
                                </div>
                                <div class="services-block block-second">
                                    <div class="services_block-inner services_block-inner-row">
                                        <figure class="services-image image-second">
                                            <img src="wp-content/uploads/2019/06/service2.png"
                                                 alt="service"/>
                                        </figure>
                                        <a href="#" class="services-next next-second"></a>
                                    </div>
                                    <div class="services_block-title services_block-title-second">
                                        <h3 class="title_h3">УСУЛУГИ ДЛЯ РУК И НОГ</h3>
                                    </div>
                                </div>
                                <div class="services-block block-third">
                                    <div class="services_block-inner">
                                        <figure class="services-image image-third">
                                            <img src="wp-content/uploads/2019/06/service3.png"
                                                 alt="service"/>
                                        </figure>
                                        <a href="#" class="services-next next-third"></a>
                                    </div>
                                    <div class="services_block-title services_block-title-third">
                                        <h3 class="title_h3">ПРОЦЕДУРЫ ДЛЯ ТЕЛА</h3>
                                    </div>
                                </div>
                                <div class="services-block block-fourth">
                                    <div class="services_block-inner services_block-inner-row">
                                        <figure class="services-image image-fourth">
                                            <img src="wp-content/uploads/2019/06/service4.png"
                                                 alt="service"/>
                                        </figure>
                                        <a href="#" class="services-next next-fourth"></a>
                                    </div>
                                    <div class="services_block-title services_block-title-fourth">
                                        <h3 class="title_h3">ПРОЦЕДУРЫ ДЛЯ ЛИЦА</h3>
                                    </div>
                                </div>
                                <div class="services-block block-fifth">
                                    <div class="services_block-inner">
                                        <figure class="services-image image-fifth">
                                            <img src="wp-content/uploads/2019/06/service5.png"
                                                 alt="service"/>
                                        </figure>
                                        <a href="#" class="services-next next-fifth"></a>
                                    </div>
                                    <div class="services_block-title services_block-title-fifth">
                                        <h3 class="title_h3">ВАКСАЦИЯ</h3>
                                    </div>
                                </div>
                                <div class="services-block block-six">
                                    <div class="services_block-inner services_block-inner-row">
                                        <figure class="services-image image-six">
                                            <img src="wp-content/uploads/2019/06/service6.png"
                                                 alt="service"/>
                                        </figure>
                                        <a href="#" class="services-next next-six"></a>
                                    </div>
                                    <div class="services_block-title services_block-title-six">
                                        <h3 class="title_h3">БРОВИ И РЕСНИЦЫ</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hairdresser-wrapper">
                            <div class="hairdresser-body">
                                <figure class="hairdresser-image">
                                    <img class="leaf_green" src="wp-content/uploads/2019/06/leaf_green.png" alt="leaf"/>
                                    <img class="leaf_white" src="wp-content/uploads/2019/06/leaf_white.png" alt="leaf"/>
                                </figure>
                                <div class="hairdresser-content">
                                    <div class="hairdresser-inner">
                                        <div class="hairdresser-title">
                                            <h2 class="title_h2">ПАРИКМАХЕРСКИЕ УСЛУГИ</h2>
                                        </div>
                                        <nav class="hairdresser-nav">
                                            <ul class="hairdresser-list">
                                                <li class="hairdresser-item">СТРИЖКА ВОЛОС</li>
                                                <li class="hairdresser-item">ПОКРАСКА ВОЛОС</li>
                                                <li CLASS="hairdresser-item">ПОКРАСКА ПРЯДЕЙ ВОЛОС</li>
                                                <li CLASS="hairdresser-item">ХИМИЧЕСКАЯ ЗАВИВКА</li>
                                                <li CLASS="hairdresser-item">ВЕЧЕРНЯЯ И СВАДЕБНАЯ ПРИЧЕСКА</li>
                                                <li CLASS="hairdresser-item">ПЛЕТЕНИЕ ФРАНЦУЗСКИХ КОСИЧЕК</li>
                                                <li CLASS="hairdresser-item">ПРОЦЕДУРА BOUFFANT (УВЕЛИЧЕНИЕ ОБЪЕМА)</li>
                                                <li CLASS="hairdresser-item">ПРОЦЕДУРА BOTOX LIKE (УВЛАЖНЕНИЕ И
                                                    УКРЕПЛЕНИЕ)
                                                </li>
                                                <li CLASS="hairdresser-item">КЕРАТИНОВОЕ ВЫПРЯМЛЕНИЕ ВОЛОС COCOCHOCO
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="services_button-wrapper">
                                            <button class="price-button" type="button">УЗНАТЬ ЦЕНЫ</button>
                                            <button class="record-button services_record-button" type="button">
                                                ЗАПИСАТЬСЯ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gift_card-wrapper">
                            <div class="gift_card-body">
                                <div class="gift_card-title">
                                    <h2 class="title_h2">ПОДАРОЧНАЯ КАРТА</h2>
                                </div>
                                <div class="gift_card-inner">
                                    <div class="gift_card-sub-title">gift card</div>
                                    <div class="gift_card-content">
                                        <p class="gift_card-text">ВАМ БОЛЬШЕ НЕ НАДО ЛОМАТЬ ГОЛОВУ НАД ТЕМ, КАКОЙ
                                            ПОДАРОК
                                            ВЫБРАТЬ И К КАКОМУ ПРАЗДНИКУ, ВЕДЬ <span
                                                    class="gift_card-bold">ПОДАРОЧНУЮ КАРТУ</span> НАШЕГО САЛОНА КРАСОТЫ
                                            МОЖНО ПРИОБРЕСТИ К ЛЮБОМУ ПРАЗДНИЧНОМ СОБЫТИЮ. </p>
                                        <p class="gift_card-text">ВЫ <span
                                                    class="gift_card-bold">САМИ ВЫБИРАЕТЕ СУММУ</span>, НА КОТОРУЮ БУДЕТ
                                            ОФОРМЛЕНА КАРТА.</p>
                                    </div>
                                </div>
                                <figure class="gift_card-image">
                                    <!--                                <img src="wp-content/uploads/2019/06/card.png" alt="card"/>-->
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="school-wrapper">
                <div class="school-title">
                    <h2 class="title_h2">MAKE-UP ШКОЛА</h2>
                </div>
                <div class="site-wrapper">
                    <div class="school-body">
                        <div class="school_sub-title">make-up school</div>
                        <h4 class="title_h4">ОСВОЙТЕ ПРОФЕССИЮ ВИЗАЖИСТА С НУЛЯ!</h4>
                        <div class="school-text">УНИКАЛЬНО РАЗРАБОТАННЫЙ, ИНТЕРЕСНЫЙ И ОБНОВЛЕННЫЙ КУРС, С БОЛЬШИМ
                            КОЛИЧЕСТВОМ ПРАКТИКИ. ПОВЫШЕНИЕ КВАЛИФИКАЦИИ ИЛИ ПРОДОЛЖЕНИЕ БАЗОВОГО КУРСА.
                        </div>
                        <div class="school_work-wrapper">
                            <div class="school_work-block">
                                <figure class="school_work-image">
                                    <img src="wp-content/uploads/2019/06/work1_1-.png" alt="work"/>
                                </figure>
                                <div class="school_work-text">
                                    <h4 class="title_h4">КОММЕРЧЕСКИЙ МАКИЯЖ</h4>
                                </div>
                            </div>
                            <div class="school_work-block">
                                <figure class="school_work-image">
                                    <img src="wp-content/uploads/2019/06/work2.png" alt="work"/>
                                </figure>
                                <div class="school_work-text">
                                    <h4 class="title_h4">ГРИМ</h4>
                                </div>
                            </div>
                            <div class="school_work-block">
                                <figure class="school_work-image">
                                    <img src="wp-content/uploads/2019/06/work3.png" alt="work"/>
                                </figure>
                                <div class="school_work-text">
                                    <h4 class="title_h4">КАРАНДАШНАЯ ТЕХНИКА</h4>
                                </div>
                            </div>
                            <div class="school_work-block">
                                <figure class="school_work-image">
                                    <img src="wp-content/uploads/2019/06/work4.png" alt="work"/>
                                </figure>
                                <div class="school_work-text">
                                    <h4 class="title_h4">И МНОГОЕ ДРУГОЕ...</h4>
                                </div>
                            </div>
                        </div>
                        <button class="course_program-button" type="button">ПРОГРАММА КУРСА</button>
                        <div class="start-title">
                            <h2 class="title_h2">БЛИЖАЙШИЙ СТАРТ</h2>
                        </div>
                        <div class="data_title-wrapper">
                            <div class="data_title">13</div>
                            <span class="data_title-sub">АПРЕЛЯ</span>
                        </div>
                        <div class="schedule-title">
                            <h4 class="title_h4 schedule_title-inner">РАСПИСАНИЕ</h4>
                            <span class="schedule-time">ВТОРНИК - ЧЕТВЕРГ 19:00</span>
                        </div>
                        <div class="request-title">
                            <h4 class="title_h4">ОСТАВЬТЕ СВОЮ ЗАЯВКУ НА НАШЕМ САЙТЕ, МЫ С РАДОСТЬЮ С ВАМИ СВЯЖЕМСЯ И
                                ОТВЕТИМ НА ВСЕ ВАШИ ВОПРОСЫ
                            </h4>
                        </div>
                        <button class="request-button" type="button">ОСТАВИТЬ ЗАЯВКУ</button>
                    </div>
                </div>
                <figure class="shadow-image">
                    <img src="wp-content/uploads/2019/06/shadow.png" alt="shadow"/>
                </figure>
                <figure class="shadow_image-second">
                    <img src="wp-content/uploads/2019/06/shadow2.png" alt="shadow"/>
                </figure>
                <figure class="petal-image">
                    <img src="wp-content/uploads/2019/06/petal.png" alt="petal"/>
                </figure>
                <figure class="petal_image-second">
                    <img src="wp-content/uploads/2019/06/petal2.png" alt="petal"/>
                </figure>
            </section>
            <section class="about_us-wrapper">
                <div class="about_us-bg">
                    <div class="about_us-title">
                        <h2 class="title_h2">О НАС</h2>
                    </div>
                    <div class="site-wrapper">
                        <div class="about_us-body">
                            <div class="about_us_sub-title">about us</div>
                            <div class="about_us-content">
                                <div class="about_us-left-block">
                                    <figure class="about_us-logo">
                                        <img src="wp-content/uploads/2019/06/logo_about.png"
                                             alt="logo_about"/>
                                    </figure>
                                    <div class="description-info">
                                        <p class="description-text">*LEVANDE – В ПЕРЕВОДЕ СО ШВЕДСКОГО ЯЗЫКА ОЗНАЧАЕТ:
                                            ЖИВОЙ, ЖИВАЯ, ЖИВУ. КРОМЕ ТОГО,В ШВЕЦИИ В СОВРЕМЕННОЙ ТРАКТОВКЕ ЭТИМ СЛОВОМ
                                            ОБОЗНАЧАЮТ СТАТУС ONLINE.</p>

                                        <p class="description-text">ПОЭТОМУ ОСНОВНАЯ ЦЕЛЬ НАШЕГО САЛОНА — ПРЯМО СЕЙЧАС
                                            ДАРИТЬ ВАМ РЕАЛЬНУЮ ЖИЗНЬ, ЖИЗНЕННУЮ СИЛУ, КОТОРАЯ ПРИНЕСЕТ ВАМ РАДОСТЬ И
                                            УДОВОЛЬСТВИЕ.</p>

                                        <p class="description-text">У НАС СОЗДАНЫ ВСЕ УСЛОВИЯ, ЧТОБЫ ПРИШЕДШАЯ К НАМ
                                            ДЕВУШКА ИЛИ ЖЕНЩИНА НА СТРИЖКУ, МАССАЖ, МАНИКЮР ИЛИ НА КОСМЕТИЧЕСКИЕ
                                            ПРОЦЕДУРЫ ПОЛУЧИЛА ВСЕ, ЧТО ОНА ХОТЕЛА ПЛЮС ПРИПОДНЯТОЕ НАСТРОЕНИЕ И
                                            ПОВЕРИЛА В ТО, ЧТО ИМЕННО У НЕЕ ВСЕ БУДЕТ ОТЛИЧНО И ПРЯМО СЕЙЧАС</p>
                                    </div>
                                    <div class="quality-block">
                                        <div class="quality_top-info">
                                            <div class="quality_inner-top">
                                                <span class="quality-title">ЭЛЕГАНТНОСТЬ</span>
                                                <figure class="quality-image quality_mob-image">
                                                    <img src="wp-content/uploads/2019/06/leaf.png"
                                                         alt="leaf"/>
                                                </figure>
                                            </div>
                                            <div class="quality_inner-bottom">
                                                <figure class="quality-image">
                                                    <img src="wp-content/uploads/2019/06/hand.png"
                                                         alt="hand"/>
                                                </figure>
                                                <span class="quality-title">КАЧЕСТВО</span>
                                            </div>
                                        </div>
                                        <div class="quality_bottom-info">
                                            <div class="quality_inner-top">
                                                <span class="quality-title">ИСКРЕННОСТЬ</span>
                                                <figure class="quality-image">
                                                    <img src="wp-content/uploads/2019/06/flower.png"
                                                         alt="flower"/>
                                                </figure>
                                            </div>
                                            <div class="quality_inner-bottom">
                                                <figure class="quality-image">
                                                    <img src="wp-content/uploads/2019/06/heart.png"
                                                         alt="heart"/>
                                                </figure>
                                                <span class="quality-title">СПОКОЙСТВИЕ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about_us-right-block">
                                    <div class="regulations-title">
                                        <h4 class="title_h4">ПРИ ПЛАНИРОВАНИИ ПОСЕЩЕНИЯ САЛОНА LEVANDE, ПОЖАЛУЙСТА,
                                            СОБЛЮДАЙТЕ НЕКОТОРЫЕ НАШИ ПРАВИЛА</h4>
                                    </div>
                                    <div class="regulations-info">
                                        <p class="regulations-text">
                                            <span class="regulations-subtitle">ВРЕМЯ ПОСЕЩЕНИЯ.</span>
                                            Пожалуйста, приходите заблаговременно, за несколько минут, чтобы Вы могли
                                            отдохнуть немного от повседневных забот, настроиться на положительный лад и
                                            Вам не пришлось бы сокращать запланированное для посещения время. Это
                                            позволит мастеру с максимальной отдачей выполнить свою работу, а Вы получите
                                            максимальный эффект. Если у Вас возникнет незапланированная задержка,
                                            сообщите нам заблаговременно, позвонив администратору салона LEVANDE.</p>
                                        <p class="regulations-text">
                                            <span class="regulations-subtitle">Отмена приема.</span>
                                            Если Вы зарезервировали время, но не можете приехать, сообщите об этом не
                                            позднее, чем за 24 часа до назначенного времени Вашего приема администратору
                                            салона LEVANDE.</p>
                                        <p class="regulations-text">
                                            <span class="regulations-subtitle">ПОДГОТОВКА К ПРОЦЕДУРЕ.</span>
                                            При выполнении любой процедуры Вам не нужно заботится о том, что Ваши вещи
                                            испачкаются или испортятся, потому что мы предоставляем все необходимое
                                            (одноразовое нижнее белье, полотенца и т. д.) для чистоты и сохранности
                                            Вашей одежды. Вы можете прийти к нам на прием в вечернем платье, а затем
                                            отправиться на торжество или любое другое мероприятие. Единственное, что Вам
                                            понадобиться взять с собой – это позитивный настрой.</p>
                                        <p class="regulations-text">
                                            <span class="regulations-subtitle">ВРЕМЯ ПОСЕЩЕНИЯ.</span>
                                            Пожалуйста, приходите заблаговременно, за несколько минут, чтобы Вы могли
                                            отдохнуть немного от повседневных забот, настроиться на положительный лад и
                                            Вам не пришлось бы сокращать запланированное для посещения время. Это
                                            позволит мастеру с максимальной отдачей выполнить свою работу, а Вы получите
                                            максимальный эффект. Если у Вас возникнет незапланированная задержка,
                                            сообщите нам заблаговременно, позвонив администратору салона LEVANDE.</p>
                                        <p class="regulations-text">
                                            Если у Вас есть <span
                                                    class="regulations-subtitle">ПРОБЛЕМЫ СО ЗДОРОВЬЕМ</span>, аллергии,
                                            Вы беременны или проходите курс лечения, а также страдаете повышенным или
                                            пониженным артериальным давлением, страдаете болями в области сердца или
                                            имеются другие проблемы со здоровьем, пожалуйста, сообщите об этом
                                            специалисту, к которому Вы пришли на прием.</p>
                                        <p class="regulations-text">
                                            Если Вы носите <span class="regulations-subtitle">КОНТАКТНЫЕ ЛИНЗЫ</span> ,
                                            сообщите и об этом своему косметологу. Не стесняйтесь задавать вопросы и
                                            выражать свои пожелания. Специалист учтет это и внесет коррективы, чтобы
                                            время, потраченное Вами, было максимально эффективно использовано, а Вы
                                            получили удовольствие и не повредили своему здоровью.</p>
                                        <p class="regulations-text">
                                            <span class="regulations-subtitle">ПОДАРОЧНЫЕ КАРТЫ И ИХ ИСПОЛЬЗОВАНИЕ.</span>
                                            Подарочную карту нельзя использовать сразу же, приобретя её. Вы можете
                                            запланировать несколько процедур и использовать сумму, которую Вы оплатили,
                                            посетив нас несколько раз. Подарочные карты доступны на любую сумму, которую
                                            Вы можете себе позволить и на любые процедуры, которые мы предлагаем. Вы
                                            также можете приобрести подарочную карту на любое физическое лицо.
                                            Подарочную карту Вы можете использовать в течение 3 месяцев.</p>
                                    </div>
                                </div>
                                <div class="rules_button-wrapper">
                                    <button class="rules-button" type="button">НАШИ ПРАВИЛА</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-wrapper">
                <div class="contact-title">
                    <h2 class="title_h2">КОНТАКТЫ</h2>
                </div>
                <div class="contact-body">
                    <div class="contact_sub-title">contacts</div>
                    <div class="contact-content">
                        <div class="working_time-block">
                            <div class="contact_inner-title">РАБОЧЕЕ ВРЕМЯ</div>
                            <time class="contact_time">
                                <p class="contact_inner-time">РАБОЧИЕ ДНИ: 9:00 — 20:00</p>
                                <p class="contact_inner-time">СУББОТА: 10:00 — 16:00</p>
                            </time>
                        </div>
                        <div class="contact-block">
                            <div class="contact_inner-title">КОНТАКТЫ</div>
                            <address class="contact-address">
                                <p class="contact-street"> CITADELES IELA 1A, RĪGA (ВХОД С УЛИЦЫ MUITAS)</p>
                                <a class="contact-link" href="tel:+37167509172">+371 67509172</a>
                                <a class="contact-link" href="tel:+37127500410">+371 27500410</a>
                                <a class="contact-mail" href="mailto:info@levande.lv">INFO@LEVANDE.LV</a>
                            </address>
                        </div>
                    </div>
                    <div class="map-wrapper">
                        <div id="map"></div>
                    </div>
                </div>
            </section>
        </article>
    </main>

<?php
//get_sidebar();
get_footer();
