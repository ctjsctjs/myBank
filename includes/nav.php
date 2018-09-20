<nav class="nav-bar white-nav">
    <div class="nav-bg"></div>
    <div class="nav-link-wrapper res-padding">
        <ul class="nav-left">
            <li><a class="logo-wrapper" href="home"><img class="logo" src="images/logo.svg"></a></li>
            <?php getNavMenu(); ?>
        </ul>
        <ul class="nav-right">
            <?php if (loggedIn()): ?>
            <li class="nav-link-stack nav-link">
                <div class="">
                    <span class="nav-welcome-label">Welcome,</span>
                    <span class="nav-welcome-name"><?php echo getSessionData('name')?></span>
                </div>
            </li>
            <li class="nav-link"><a href="<?php getProtectedPath('/logout.php')?>">Logout</a></li>
            <?php else: ?>
            <li class="nav-link"><a href="login">Login</a></li>
            <li class="nav-button"><a class="button" href="register">Get Started</a></li>
            <?php endif; ?> 
            <li class="nav-hamburg"><a href="#/"><i class="fas fa-bars"></i></a></li>     
        </ul>
    </div>
</nav>
<div id="nav-dummy" class="nav-dummy"></div>