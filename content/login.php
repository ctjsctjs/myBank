<section class="container-padding register-section">
    <div class="res-padding flex-cont">
        <div class="col-left">
            <div id="register-img">

            </div>
            <div id="register-banner">
                <p class="register-p">
                    <?php getPageContent("extract"); ?>    
                </p>        
            </div>   
        </div>
        <div class="col-right">
            <div id="register-module">
                <span class="register-description">
                    <?php getPageContent("tagline"); ?>    
                </span>
                <form id="register-form" action="protected/registerLogic.php" method="POST">
                    <input class="form" placeholder="Email">
                    <input class="form" placeholder="Password">
                    <button id="register-submit" class="button large-btn" href="register" type="submit" >Login</button>
                </form>
            </div>
        </div>
    </div>
</section>