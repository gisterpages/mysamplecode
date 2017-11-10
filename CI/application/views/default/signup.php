
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="login-form-block">
                <h2 class="text-center">Signup</h2>
                <hr style="border: 1px #cccccc solid"/>
                <?php
                echo $this->session->flashdata('message');
                $this->session->unset_userdata('message');
                ?>
                <form class="form-horizontal" method="post" actio="<?php echo base_url('user/register') ?>" name="signup_form" id="signup_form">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="email">Name </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="email">Email </label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="pwd">Password </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" id="pwd" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="conf_pwd">Confirm Password </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="conf_password" id="conf_pwd" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <!--                    <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-4">
                                                <div class="checkbox">
                                                    <label><input type="checkbox"> Remember me</label>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                            <input type="submit" class="btn btn-info" name="submit" value="Signup"/>
                            <a href="<?php echo base_url(); ?>" class="btn btn-default" name="cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>