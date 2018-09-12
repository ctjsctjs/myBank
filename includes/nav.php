<?php if (pageTitle() == "home" || pageTitle() == ""):?>
    <nav class="nav-bar nav-home">
<?php else: ?>
    <nav class="nav-bar white-nav">
<?php endif; ?>
    <div class="nav-bg"></div>
    <div class="nav-link-wrapper res-padding">
        <ul class="nav-left">
            <li><a class="logo-wrapper nav-link" href="home"><img class="logo" src="images/logo.svg"></a></li>
            <li class="nav-link"><a href="">Banking</a></li>
            <li class="nav-link"><a href="">Products</a></li>
            <li class="nav-link"><a href="">Services</a></li>
            <li class="nav-link"><a href="">Help</a></li>
        </ul>
        <ul class="nav-right">
            <li class="nav-link"><a href="login">Login</a></li>
            <li class="nav-button"><a class="button" href="register">Get Started</a></li>
            <li class="nav-hamburg"><a href="#/"><i class="fas fa-bars"></i></a></li>      
        </ul>
    </div>
</nav>
<div id="nav-dummy" class="nav-dummy"></div>