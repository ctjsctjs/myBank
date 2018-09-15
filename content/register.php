<section class="container-padding register-section border">
    <div class="res-padding flex-cont">
        <div class="col-left">
            <div id="register-img">
            </div>
            <div id="register-banner">
                <p class="register-p"><?php echo REGISTER_EXTRACT ?></p> 
            </div>   
        </div>
        <div class="col-right">
            <div id="register-module">
                <span class="register-description"><?php echo REGISTER_TITLE ?></span>
                <span class="register-reminder">
                    <?php echo REGISTER_REMINDER ?>
                    <a href="login"><?php echo REGISTER_REMINDER_CTA ?></a>
                </span>   
                <form class="form" id="register-form" action="<?php getProtectedPath('/registerValidation.php')?>" method="POST">
                    <input placeholder="First Name">       
                    <input placeholder="Last Name">
                    <input placeholder="Email">
                    <input placeholder="Password" type="password">
                    <input placeholder="Confirm Password" type="password">
                    <button id="register-submit" class="button large-btn" href="register" type="submit" >Register</button>
                </form>
            </div>
        </div>
    </div>
</section>