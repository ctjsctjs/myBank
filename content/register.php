<section class="container-padding register-section">
    <div class="res-padding flex-cont">
        <div class="col-left">
            <div id="register-img">

            </div>
            <div id="register-banner">
                <p class="register-p">
                <?php getString("register", "desc"); ?>    
                </p>        
            </div>   
        </div>
        <div class="col-right">
            <div id="register-module">
                <span class="register-description">
                    Manage your money anytime, anywhere.
                </span>
                <form id="register-form" action="protected/registerLogic.php" method="POST">
                    <input class="form" placeholder="First Name" name="test">       
                    <input class="form" placeholder="Last Name">
                    <input class="form" placeholder="Email">
                    <input class="form" placeholder="Password">
                    <input class="form" placeholder="Confirm Password">
                    <button id="register-submit" class="button large-btn" href="register" type="submit" >Register</button>
                </form>
            </div>
        </div>
    </div>
</section>