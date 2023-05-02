<!doctype html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="<?= base_url('assets/images/logo/myfavicon.png') ?>" style="width: 48px; height: 48px" type="image/x-icon">
        <title><?= $meta_title ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Custom Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/styles/css/styles.css'?>" type="text/css">

        <!--Local Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css'?>" type="text/css">

        <!-- Local FontAwesome -->
        <link rel="stylesheet" href="<?= base_url('assets/styles/font-awesome/css/font-awesome.css') ?>" type="text/css" >

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
        <style>  
            body {
                background-color: #f1f1f1;
            }

            footer {
                background-blend-mode: overlay;
                background-image: url('<?= base_url('assets/images/bg-photo.png') ?>');
                background-color: rgba(0, 0, 0, 0.7);
            }
            
            .footer-info {
                padding-right: 8em;
            }
        </style>
    </head>
    <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand col-lg-5 text-danger" href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/images/system/logo/mylogo-1.png') ?> " alt="" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-right: 4em">
                    <li class="nav-item active">
                        <a class="nav-link text-danger" href="<?= base_url('sell/dashboard'); ?>">Add Products <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('sell/dashboard/myproduct'); ?>">My Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('sell/dashboard'); ?>">Categories</a>
                    </li>
                </ul>
				<a href="<?= base_url('sell/dashboard/logout') ?>" class="btn btn-danger ml-4" style="margin-left: 4em">
					<i class="icon-sign-out""></i> Logout
				</a>
            </div>

        </div>
        
    </nav>
