<div class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="<?php echo (isset($nav_home)) ? 'active-nav':''?>"><a href="<?php echo base_url(); ?>">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (is_logged_in()): ?>
                <li class="<?php echo (isset($nav_profile)) ? 'active-nav':''?>"><a href="<?php echo base_url("profile"); ?>">Profile</a></li>
                <li class="<?php echo (isset($nav_myproducts)) ? 'active-nav':''?>"><a href="<?php echo base_url("myproducts"); ?>">My Products</a></li>
                
                    <li><a href="<?php echo base_url("user/logout"); ?>">Logout</a></li>
                    
                    
                <?php else: ?>
                    
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>