<!-- NAVIGATION -->
<div class="navigation">
    <!-- LEFT MAIN MENU -->
    <div class="navigation_leftMainMenu">
        <a href="/public/index.php"><?php echo $json_data['home'] ?></a>
        <a href="/public/pages/talent_page/talent_page.php"><?php echo $json_data['talent'] ?></a>
    </div>

    <!-- LOGO -->
    <div class="navigation_logo">
        <h1><?php echo $json_data['logo'] ?></h1>
    </div>

    <!-- RIGHT MAIN MENU -->
    <div class="navigation_rightMainMenu">
        <a href="#"><?php echo $json_data['about'] ?></a>
        <a href="#"><?php echo $json_data['contact'] ?></a>
    </div>

    <!-- HAMBURGER MENU BUTTON -->
    <div class="navigation_hamburger_menuButton">
        <a href="javascript:void(0);" onclick="triggerHamburgerMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <!-- MOBILE MAIN MENU POPUP -->
    <div id="navigation_mainMenu" class="navigation_mainMenu">
        <a href="javascript:void(0);" onclick="triggerHamburgerMenu()">
            <i class="fa fa-close navigation_mainMenu_closeIcon"></i>
        </a>
        <a href="/public/index.php"><?php echo $json_data['home'] ?></a>
        <a href="/public/pages/talent_page/talent_page.php"><?php echo $json_data['talent'] ?></a>
        <a href="#"><?php echo $json_data['about'] ?></a>
        <a href="#"><?php echo $json_data['contact'] ?></a>
    </div>
</div>