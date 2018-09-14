<section class="container-padding register-section">
    <div class="res-padding flex-cont">
        <div class="col-left">
            <div id="register-img">
            </div>
            <div id="register-banner">
                <p class="register-p">
                    <?php echo LOGIN_EXTRACT ?>    
                </p>        
            </div>   
        </div>
        <div class="col-right">
            <div id="register-module">
                <span class="register-description">
                    <?php echo LOGIN_TITLE ?>    
                </span>
                <form id="register-form" action="protected/loginLogic.php" method="POST">
                    <input class="form" placeholder="Email" name="email">
                    <input class="form" placeholder="Password" name="password">
                    <button id="register-submit" class="button large-btn" href="register" type="submit" >Login</button>
                </form>
            </div>
        </div>
    </div>
</section>