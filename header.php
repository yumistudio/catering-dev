<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<?php

wp_head();

$subtitle = get_field('page_subtitle');
?>

</head>

<body <?php body_class(); ?>>
    <div id="ajax-loader">
        <svg width="40px"  height="40px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="3" stroke="#ffe2a6" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(155 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1.2s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
    </div>
    <div id="outer-wrap">
        
            <!-- Header main -->
            <?php 
                if (is_front_page() == TRUE) {
            ?>
        
        <header class="header-main">
            <?php 
                get_template_part('template-parts/navigation/navigation', 'main');
            ?>        
            <div class="header-main__logo text-center">
                <img id="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-white.svg" alt="Catering Logo"/>
            </div>  
            <div class="header-main__welcome text-center">
                <h1>
                    <span class="claim">Sztuka gotowania i wiedza o zarządzaniu</span>
                    Catering na każdą okazję
                </h1>
                <a href="#" class="btn btn-primary">Sprawdź ofertę</a>
            </div>

            <div class="header-main__plate">
                <div class="container parallax-img-container">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/plate.png" class="parallax-move"/>
                </div>
            </div>
            <div class="header-main__scroll">
                <i class="icon icon-navigate-down"></i>
            </div>
            <!-- Header subpage -->
            <?php
                } else {
                    get_template_part('template-parts/navigation/navigation', 'secondary');
                }
            ?>
        </header>            
    <div id="inner-wrap">
        