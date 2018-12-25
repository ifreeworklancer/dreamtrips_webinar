<?php include(__DIR__ . '/src/views/header.php'); ?>

<main>
    <?php
    $sections = [
        'intro',
        'stages',
        'modals',
    ];

    foreach ($sections as $section) {
        require __DIR__ . '/src/views/' . $section . '.php';
    }
    ?>


</main>

<footer id="app-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-lg-3">
                <a href="#" class="logo">
                    <div class="logo__img" style="background-image: url('images/icon/logo/logo.png');"></div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mx-auto mx-lg-0">
                <div class="contacts-item">
                    <h2 class="section-title section-title--secondary section-title--footer">
                        Наши контакты
                    </h2>
                    <ul class="contacts-list list-unstyled">
                        <li class="contacts-list-item contacts-list-item--phone">
                            <a href="tel:+972535230643">
                                +972 53-523-0643
                            </a>
                        </li>
                        <li class="contacts-list-item contacts-list-item--place">
                            Израиль. Тель-Авив, Игаль Алон 123/6
                        </li>
                        <li class="contacts-list-item contacts-list-item--email">
                            <a href="mailto:info@dreamtripsukraine.com">info@dreamtripsukraine.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyr">
            <div class="row">
                <div class="col-12 d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <ul class="social-list list-unstyled d-flex">
                        <li class="social-list-item social-list-item--facebook mr-2 mr-sm-3">
                            <a href="https://www.facebook.com/dreamtripsua/" target="_blank">
                                <svg width="15" height="15">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--instagram mr-2 mr-sm-3">
                            <a href="https://www.instagram.com/dreamtrips_ukraine_official/" target="_blank">
                                <svg width="15" height="15">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--youtube">
                            <a href="https://www.youtube.com/channel/UC0tgV8JCzYNxGnjT67KPFEQ?view_as=subscriber"
                               target="_blank">
                                <svg width="15" height="15">
                                    <use xlink:href="#youtube-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyr__item">
                        &copy;<?= date('Y') ?> Все права защищены
                    </div>
                    <div class="footer-copyr__item">
                        Дизайн и разрботка
                        <a href="https://impressionbureau.pro"
                           target="_blank">Impression.Bureau</a><sup>2018</sup>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="dist/app.js"></script>

</body>

</html>