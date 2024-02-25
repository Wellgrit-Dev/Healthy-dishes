
        <nav>
            <a><img src="<?php echo base_url('assets/'); ?>assets/Logo Healthy Dishes.png"></a>
        </nav>

        <div class="container">
            <h2>Register</h2>
            <img src="<?php echo base_url('assets/'); ?>assets/Login.png">
            <form method="post" action="<?php echo base_url('auth/registration');?>" >

                <label for="name" id="email-text">Fullname</label><br>
                <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" >
                <?php echo form_error('name','<small class="text-danger pl-3">','</small>'); ?>

                <br>

                <label for="email" id="email-text">Email</label><br>
                <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>

                <br>
                
                <label for="password" id="password-text">Password</label><br>
                <input type="password" id="password" name="password1">
                <?php echo form_error('password1','<small class="text-danger pl-3">','</small>'); ?>

                <br>

                <label for="password" id="password-text">Repeat Password</label><br>
                <input type="password" id="password" name="password2">

                <br>

                <button id="btn-login">Submit</button><br>
                    <a id="have-account" href="<?php echo base_url('auth') ?>">Already Have Account?</a><br>
            </form>
        </div>

        