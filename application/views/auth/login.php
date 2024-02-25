       <nav>
            <a><img src="<?php echo base_url('assets/'); ?>assets/Logo Healthy Dishes.png"></a>
        </nav>
        <?php echo $this->session->flashdata('message'); ?>

        <div class="container">
            <img src="<?php echo base_url('assets/'); ?>assets/Login.png">
            <form method="post" action="<?= base_url('auth'); ?>" >
                <label for="email" id="email-text">Email</label><br>
                <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                <br>
                
                <label for="password" id="password-text">Password</label><br>
                <input type="password" id="password" name="password">
                <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?><br>

                <button id="btn-login">Login</button><br>

                <a id="forgot-password">Forgot Password ?</a><br>

                <button id="btn-register">
                    <a  href="<?php echo base_url('auth/registration') ?>">Register</a>
                </button>
            </form>
        </div>

       