<section class="home-banner">
    <div class="banner-container res-padding">
        <div class="banner-img-wrapper">
            <img class="banner-image" id="particles" src="images/particles.svg">
            <img class="banner-image" id="coin"  src="images/coin.svg">
            <img class="banner-image" id="base"  src="images/base.svg">
        </div>
    </div>
    <div class="banner-bottom"></div>
</section>
<section class="home-section res-padding">
    <h1 class="banner-title"><?php getSettings("name"); ?></h1>
    <p class="intro-p"><?php getPageContent("bannerExtract"); ?></p>
    <a class="button large-btn home-cta " href="register"><?php getPageContent("cta"); ?></a>
</section>
<section class="container-padding intro-section">
    <div class="res-padding">
        <h1 class="intro-title"><?php getPageContent("introTitle"); ?></h1>
        <p class="intro-p"><?php getPageContent("introExtract"); ?></p>
    </div>
</section>
