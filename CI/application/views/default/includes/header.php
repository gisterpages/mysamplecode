<header class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo">
                    <a class="navbar-brand" style="margin-bottom: 21px;" href="<?php echo base_url(); ?>">
                    <?php echo SITE_NAME ?> - Logo
                </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <?php if(!is_logged_in()):?>
            <div class="login-form">
                <nav class="navbar navbar-text pull-right">
                    
                    <div class="" style="margin-bottom: 10px;padding-left: 20px;">
                        <input type="checkbox" style="vertical-align: middle;">
                        <span style="padding: 5px;"> Remember</span> 
                        <a href='<?php echo base_url("user/forgot_password"); ?>' class="lnk-frgt-pass">Forgot Password ?</a>
                    </div>
                    <div>
                    <?php echo $this->session->flashdata('login_error_message');
                    $this->session->unset_userdata('login_error_message');
                    ?>
                    </div>
                    <form class="navbar-form navbar-left" role="search" action="<?php echo base_url('authlib/authenticate'); ?>" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="txt_email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="txt_pass" required="required">
                        </div>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                    <div class="pull-right" style="padding: 13px 0px 0px 0px;"><a href="<?php echo base_url("user/signup"); ?>">Signup</a></div>
                </nav>
            </div>
                <?php else: ?>
                <div style="padding: 10px; text-align: right;">
                    Welcome, 
                    <a href="<?php echo base_url('profile'); ?>"><?php echo $this->session->userdata('user_email');?></a>
                    <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</header>