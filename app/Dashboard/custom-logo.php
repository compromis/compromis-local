<?php add_action('login_head', function () { ?>
    <style type="text/css">
    h1 a { 
        background: url(<?php echo get_bloginfo("stylesheet_directory") . '/assets/images/admin-logo.svg'; ?>) no-repeat !important;
        width: 190px !important;
        height: 55px !important;
        background-size: 100% !important;
    }
    </style>
<?php }); ?>
