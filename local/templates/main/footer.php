<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


</section>
<!--content end-->
<!--footer -->
<footer>
    <div class="wrapper">
        <ul id="icons">
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "social_network", Array(
                "COMPONENT_TEMPLATE" => ".default",
                "IBLOCK_TYPE" => "news",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "31",    // Код информационного блока
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "FILTER_NAME" => "",    // Фильтр
                "FIELD_CODE" => array(    // Поля
                    0 => "ID",
                    1 => "NAME",
                    2 => "SORT",
                    3 => "PREVIEW_PICTURE",
                    4 => "",
                ),
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "URL",
                    1 => "",
                ),
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404, если не найдены элемент или раздел
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                "PAGER_TITLE" => "Социальные сети",    // Название категорий
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            ),
                false
            ); ?>
            <!-- <li><a href="#" class="normaltip"><img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon1.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon4.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon5.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?= SITE_TEMPLATE_PATH; ?>/images/vk_logo.png" alt=""></a></li> -->
        </ul>
        <div class="links">Copyright &copy; <? echo date("Y") ?> <a href="#">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/company_name.php"
                    )
                ); ?>
            </a>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/rights_reserved.php"
                )
            ); ?>
            <br>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/design.php"
                )
            ); ?> <a target="_blank" href="#">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/creator.php"
                    )
                ); ?></a></div>
    </div>
</footer>
<!--footer end-->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
    $(document).ready(function () {
        tabs.init();
    });
    jQuery(document).ready(function ($) {
        $('#form_1, #form_2, #form_3').jqTransform({
            imgPath: 'jqtransformplugin/img/'
        });
    });
    $(window).load(function () {
        $('#slider').nivoSlider({
            effect: 'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
            slices: 15,
            animSpeed: 500,
            pauseTime: 6000,
            startSlide: 0, //Set starting Slide (0 index)
            directionNav: false, //Next & Prev
            directionNavHide: false, //Only show on hover
            controlNav: false, //1,2,3...
            controlNavThumbs: false, //Use thumbnails for Control Nav
            controlNavThumbsFromRel: false, //Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', //Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
            keyboardNav: true, //Use left & right arrows
            pauseOnHover: true, //Stop animation while hovering
            manualAdvance: false, //Force manual transitions
            captionOpacity: 1, //Universal caption opacity
            beforeChange: function () {
            },
            afterChange: function () {
            },
            slideshowEnd: function () {
            } //Triggers after all slides have been shown
        });
    });
</script>
</body>
</html>