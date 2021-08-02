<div class="container">      
        <div class="card card-container">
        <h2 style="text-align:center">AMINISTRATOR CRUD</h2>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url(); ?>ext/img/images.jpg" width="600" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="<?php echo base_url('C_login/proseslogin'); ?>" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="username" name="username" required autofocus oninvalid="this.setCustomValidity('Username Gak Boleh Kosong ..!!')" oninput="setCustomValidity('')">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('Password Gak Boleh Kosong ...!!!')" oninput="setCustomValidity('')">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
            </form><!-- /form -->
        <?php
        echo show_err_msg($this->session->flashdata('error_msg'))."</div>";
        ?>
</div><!-- /card-container -->