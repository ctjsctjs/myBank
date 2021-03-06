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
                    <input placeholder="NRIC Number" name="nric" value="<?php echo getSessionData('register_nric_value') ?>"> 
                    <span class="form-error"><?php echo getSessionData('register_nric_error') ?></span>

                    <input placeholder="Name" name="name" value="<?php echo getSessionData('register_name_value') ?>"> 
                    <span class="form-error"><?php echo getSessionData('register_name_error') ?></span>
      
                    <input placeholder="Email" name="email" value="<?php echo getSessionData('register_email_value') ?>">
                    <span class="form-error"><?php echo getSessionData('register_email_error') ?></span>

                    <input placeholder="Mobile Number" name="mobileNo" type="number" value="<?php echo getSessionData('register_mobileNo_value') ?>">
                    <span class="form-error"><?php echo getSessionData('register_mobileNo_error') ?></span>

                    <input placeholder="Address" name="address" value="<?php echo getSessionData('register_address_value') ?>">
                    <span class="form-error"><?php echo getSessionData('register_address_error') ?></span>

                    <input placeholder="Annual income" name="income" type="number" value="<?php echo getSessionData('register_income_value') ?>">
                    <span class="form-error"><?php echo getSessionData('register_income_error') ?></span>

                    <button id="register-submit" class="button large-btn" href="register" type="submit" >Register</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once 'includes/introSection.php' ?>
