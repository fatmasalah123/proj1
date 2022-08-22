<?php
include "registration.php";
$title = "Login|Register";
include "layout/header.php";
include "layout/nav.php";
include "layout/breadcrumb.php";


?>



<div class="login-register-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12 ml-auto mr-auto">
        <div class="login-register-wrapper">
          <div class="login-register-tab-list nav">
            <a class="active" data-toggle="tab" href="#lg1">
              <h4>login</h4>
            </a>
            <a data-toggle="tab" href="#lg2">
              <h4>register</h4>
            </a>
          </div>
          <div class="tab-content">
            <div id="lg1" class="tab-pane active">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="" method="post">


                    <input type="text" name="user-name" placeholder="Username" />
                    <input type="password" name="user-password" placeholder="Password" />
                    <div class="button-box">
                      <div class="login-toggle-btn">
                        <input type="checkbox" />
                        <label>Remember me</label>
                        <a href="#">Forgot Password?</a>
                      </div>
                      <button type="submit"><span>Login</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>



            <div id="lg2" class="tab-pane">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="" method="post">

                  

                    <input type="text" name="first_name" placeholder="first_name" />
                 
                    <input type="text" name="last_name" placeholder="last_name" />
                    <input type="password" name="user-password" placeholder="Password" />
                    <input type="password" name="confirm_user-password" placeholder="Confirm Password" />
                    <input name="user-email" placeholder="Email" type="email" />
                    <input name="user-phone" placeholder="phone" type="text" />
                    <div class="button-box">
                      <button type="submit" name="reg_user"><span>Register</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include "layout/footer.php";
include "layout/scripts.php";

?>