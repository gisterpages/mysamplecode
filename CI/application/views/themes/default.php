<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

    <head>
        
        <title> <?php echo SITE_NAME; ?> </title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?php 
        if(!empty($meta)) {
            foreach($meta as $name=>$content){
                echo "\n";
                    ?>
                <meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" />
            <?php } echo "\n";
        }
        
        if(!empty($css)) {
        foreach($css as $file){
            echo "\n"; 
            ?>
                <link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" />
            <?php } echo "\n";
        }
        
        
        
        if(!empty($js)) {
            foreach($js as $file){
            echo "\n";
                ?>
                <script src="<?php echo $file; ?>"></script>
            <?php } echo "\n";
        }
        ?>
        
        
        
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/boot/css/bootstrap.min.css'; ?>"/>
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/js/lib/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'; ?>"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/style.css'; ?>"/>
        
        
        <script src="<?php echo base_url(). 'assets/js/lib/jquery-3.1.0.min.js'; ?>"></script>
        <script src="<?php echo base_url(). 'assets/js/lib/moment-with-locales.min.js'; ?>"></script>
        <script src="<?php echo base_url(). 'assets/boot/js/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo base_url(). 'assets/js/lib/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'; ?>"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <script src="<?php echo base_url(). 'assets/js/lib/alasql.min.js'; ?>"></script>
        <script src="<?php echo base_url(). 'assets/js/custom.js'; ?>"></script>
        
        
        
        
        <script>
            BASE_URL = 'http://user.jillebee.com';
            console.log(document.location.hostname);
            if(document.location.hostname === 'localhost' || document.location.hostname === '127.0.0.1'){
                BASE_URL = 'http://'+document.location.hostname+'/orion';
            }
        </script>
    </head>

    <body>
        
        <?php $this->load->view('default/includes/header'); ?>
        <?php $this->load->view('default/includes/nav'); ?>
        <div class="container">
        <?php echo $this->session->flashdata('message');
        $this->session->unset_userdata('message');
        ?>
        </div>
        <section class="main">
        <?php echo $output; ?>
        </section>
        
        <?php $this->load->view('default/includes/footer'); ?>

    </body>
</html>