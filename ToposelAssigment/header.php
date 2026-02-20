<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php wp_head(); ?>  
</head>

<body <?php body_class(); ?>>

<!-- Announcement Bar -->
<div class="announcement-bar">
    Sign up and get 20% off to your first order.
</div>
<div class="header-inner">

    <!-- Left Side (Menu + Logo) -->
    <div class="header-left">
        <div class="menu-icon">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="logo">
            <a href="<?php echo home_url(); ?>">SHOP.CO</a>
        </div>
    </div>

    <!-- Right Icons -->
    <div class="header-icons">
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="fa-regular fa-user"></i>
        <i class="fa-solid fa-cart-shopping"></i>
    </div>

</div>