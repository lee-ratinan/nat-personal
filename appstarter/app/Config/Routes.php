<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('whatsapp', 'Home::whatsapp');
$routes->get('personal-life', 'Home::personal_life');
$routes->get('portfolio', 'Home::portfolio');
$routes->get('certifications', 'Home::certifications');
$routes->get('writing', 'Home::writing');
$routes->get('business-card', 'Home::business_card');
$routes->get('calendar', 'Home::calendar');
$routes->get('trip', 'Home::trip');
$routes->get('trip/(:any)', 'Home::trip_data/$1');
$routes->get('blog', 'Home::blog');
$routes->get('blog-post/(:num)/(:any)', 'Home::blog_post/$1/$2');
$routes->get('{locale}/personal-life', 'Home::personal_life');
$routes->get('{locale}/portfolio', 'Home::portfolio');
$routes->get('{locale}/certifications', 'Home::certifications');
$routes->get('{locale}/writing', 'Home::writing');
$routes->get('{locale}/calendar', 'Home::calendar');
$routes->get('{locale}/trip', 'Home::trip');
$routes->get('{locale}/trip/(:any)', 'Home::trip_data/$1');
$routes->get('{locale}/blog', 'Home::blog');
$routes->get('{locale}/blog-post/(:num)/(:any)', 'Home::blog_post/$1/$2');
$routes->get('{locale}/', 'Home::index');
$routes->get('/', 'Home::index');