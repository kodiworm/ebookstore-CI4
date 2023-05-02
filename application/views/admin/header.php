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

            nav {
                background-color: #f1f1f1;
            }

            .btn-sell {
                color: #fff;
                background-color: #cf1717;
                
            }
            .btn-sell:hover {
                color: #fff;
                background-color: #cf1717be;
            }

            .sidebar-menu {
                margin-top: 21px;
            }

            .sidebar-menu ul {
                list-style: none;
                display: inline-block;
            }

            .sidebar-menu-item {
                padding: 15px;
                margin-top: 2px;
                /* border: 1px solid #cf1717be; */
            }

            .sidebar-menu-item:hover {
                background-color: #cf1717;
            }
            
            .sidebar-menu-item a {
                /* border: 1px solid #cf1717be; */
                color: #fff;
                padding-top: 15px;
                padding-bottom: 15px;
                padding-right: 7em;
                font-size: 16px;
                font-weight: 500;
                text-decoration: none;
            }

            .sidebar-menu-item a i {
                font-size: 28px;
            }

            #card-icon i {
                font-size: 100px;
                color: #cf1717be;
            }
            #card-icon i:hover {
                color: #fff;
            }

            a.custom-card {
                border: 2px solid #cf1717be;
                border-left: 21px solid;
                border-radius: 12px;
                font-size: 21px;
                font-weight: bold;
                color: #cf1717be;
            }

            a.custom-card:hover {
                border: 1px solid #cf1717be;
                color: #fff;
                text-decoration: none;
                background-color: #cf1717be;
                transition: 0.6s ease;
            }

            /* .product-table {
                height: 80vh;
                overflow: scroll;
            } */

            footer {
                background-blend-mode: overlay;
                background-image: url('<?= base_url('assets/images/bg-photo.png') ?>');
                background-color: rgba(0, 0, 0, 0.7);
            }
            
            .footer-info {
                padding-right: 8em;
            }

            /*Scrollbar Styling*/
            body::-webkit-scrollbar {
                width: 12px;               /* width of the entire scrollbar */
            }

            body::-webkit-scrollbar-track {
                background: orange;        /* color of the tracking area */
            }

            body::-webkit-scrollbar-thumb {
                background-color: blue;    /* color of the scroll thumb */
                border-radius: 20px;       /* roundness of the scroll thumb */
                border: 3px solid orange;  /* creates padding around scroll thumb */
            }
        </style>
    </head>
    <body>

    <!-- Navbar -->
    <header>
        <?php $uri = $this->uri->segment(2); ?>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand col-lg-5" href="<?= base_url(); ?>">
                    <img src="<?= base_url('assets/images/system/logo/mylogo-1.png') ?> " alt="" height="50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-md-9" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php if($uri=='dashboard'){?>text-danger<?php }?>" href="<?= base_url('admin/dashboard'); ?>"><i class="icon-dashboard"></i> Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($uri=='add_product'){?>text-danger<?php }?>" href="<?= base_url('admin/add_product'); ?>"><i class="icon-adn"></i> Add Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($uri=='orders'){?>text-danger<?php }?>" href="<?= base_url('admin/orders'); ?>"><i class="icon-shopping-cart"></i> Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($uri=='books'){?>text-danger<?php }?>" href="<?= base_url('admin/books'); ?>"><i class="icon-book"></i> Books on Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($uri=='custs'){?>text-danger<?php }?>" href="<?= base_url('admin/active_cust'); ?>"><i class="icon-group"></i> Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($uri=='all_sellers'){?>text-danger<?php }?>" href="<?= base_url('admin/sellers'); ?>"><i class="icon-money"></i> Sellers</a>
                        </li>
                    </ul>

                    <a href="<?= base_url('admin/sign_out') ?>" class="btn btn-sell">
                        <i class="icon-signout""></i> Logout
                    </a>
                </div>

            </div>
            
        </nav>
    </header>