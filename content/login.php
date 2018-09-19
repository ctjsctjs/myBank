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
                <span class="register-reminder">
                    <?php echo LOGIN_REMINDER ?>
                    <a href="register"><?php echo LOGIN_REMINDER_CTA ?></a>
                </span>   
                <form class="form" id="register-form" action="<?php getProtectedPath('/loginValidation.php')?>" method="POST">                 
                    <input placeholder="Email" name="email" value="<?php echo getSessionData('login_email_value') ?>">
                    <span class="form-error"><?php echo getSessionData('login_email_error') ?></span>
                    <input placeholder="Password" name="password" type="password">
                    <span class="form-error"><?php echo getSessionData('login_pw_error') ?></span>   
                    <button id="register-submit" class="button large-btn" href="register" type="submit" >Login</button>
                </form>
                <span class="login-forgetpw">
                    <a href="login"><?php echo LOGIN_FORGETPW_CTA.ICON_QUESTION ?></a>
                </span>   
            </div>
        </div>
    </div>
</section>
<?php include_once 'includes/introSection.php' ?>
