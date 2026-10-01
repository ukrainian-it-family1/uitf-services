<?php

/*
|--------------------------------------------------------------------------
| Data changes that connect the new pages to the rest of the site
|--------------------------------------------------------------------------
| These values come from the backend (DB, Filament or config), not from Vue
| templates. Put them wherever the current values live.
*/

/*
| 1. `services` prop on Home (/) and /services: the three cards.
|    Only `link` changes. Today all three point to /services/product-development.
*/
$serviceCardLinks = [
    'Operations platforms' => '/services/operations-platforms', // uk: Операційні платформи
    'Regulated products'   => '/services/regulated-products',   // uk: Регульовані продукти
    'Rescue and restart'   => '/services/rescue-and-restart',   // uk: Аудит і перезапуск
];

/*
| 2. `navigation.footerLinks`: the "Services" column, in this order.
*/
$footerServices = [
    'en' => [
        'title' => 'Services',
        'list' => [
            ['text' => 'Operations platforms', 'link' => '/services/operations-platforms'],
            ['text' => 'Regulated products', 'link' => '/services/regulated-products'],
            ['text' => 'Rescue and restart', 'link' => '/services/rescue-and-restart'],
            ['text' => 'Product development', 'link' => '/services/product-development'],
        ],
    ],
    'uk' => [
        'title' => 'Послуги',
        'list' => [
            ['text' => 'Операційні платформи', 'link' => '/services/operations-platforms'],
            ['text' => 'Регульовані продукти', 'link' => '/services/regulated-products'],
            ['text' => 'Аудит і перезапуск', 'link' => '/services/rescue-and-restart'],
            ['text' => 'Розробка продукту', 'link' => '/services/product-development'],
        ],
    ],
];

/*
| 3. sitemap.xml: add these paths for both locales (/en/… and /uk/…),
|    with hreflang alternates like the existing service pages.
|    /services/get-estimate is a form page: include it or leave it out,
|    in the same way /contacts is handled today.
*/
$sitemapPaths = [
    '/services/operations-platforms',
    '/services/regulated-products',
    '/services/rescue-and-restart',
    '/services/get-estimate',
];
