<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? IncludeTemplateLangFile(__FILE__); ?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/reset.css", true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/layout.css", true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css", true); ?>

    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-1.5.2.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/cufon-yui.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/cufon-replace.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/Cabin_400.font.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/tabs.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.jqtransform.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.nivo.slider.pack.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/atooltip.jquery.js", true); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/script.js", true); ?>
</head>
<body id="page1">
<? $APPLICATION->ShowPanel(); ?>
<div class="main">
    <!--header -->
    <header>
        <div class="wrapper">
            <h1><a href="index.html" id="logo_<?= LANGUAGE_ID ?>">AirLines</a></h1>
            <nav id="top_nav">
                <ul>
                    <li><a href="index.html" class="nav1">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/home.php"
                                )
                            ); ?>
                        </a></li>
                    <li><a href="#" class="nav2">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/sitemap.php"
                                )
                            ); ?>
                        </a></li>
                    <li><a href="contacts.html" class="nav3"> <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/contacts.php"
                                )
                            ); ?></a></li>
                </ul>
            </nav>
        </div>
        <nav>
            <ul id="menu">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "ROOT_MENU_TYPE" => "main_".LANGUAGE_ID,    // Тип меню для первого уровня
                    "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                ),
                    false
                ); ?>
                <li class="end"></li>
            </ul>
        </nav>
    </header>
    <!-- / header -->
    <section id="content">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
