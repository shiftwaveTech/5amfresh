<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />

        {_meta}
		<!-- page title specific to the page -->
        <title>{title}</title>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/owlcarousel/owl.carousel.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/aos/aos.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link href="https://db.onlinewebfonts.com/c/aac83409a00d15262fa63f40ee233ba1?family=Costa+Ptf+Demi" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

<!-- Scripts -->
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<!-- <script src="<?= base_url('assets/aos/aos.js') ?>"></script> -->
<script src="<?= base_url('assets/js/popper.js') ?>"></script>
<!-- <script src="<?= base_url('assets/js/script.js') ?>"></script> -->
<script src="<?= base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        {_styles}
        
    </head>
     <body data-topbar="light" data-layout="horizontal">    
       <!-- end header-wrapper -->     
	   <!-- <div id="layout-wrapper"> -->
	      {header}
        {menu}
          <div class="main-content">
	      {content}
	   </div>
       {footer}
	   </div>        
    </body>
</html>

<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script src="<?= base_url('assets/owlcarousel/owl.carousel.min.js') ?>"></script>    {_scripts}
   