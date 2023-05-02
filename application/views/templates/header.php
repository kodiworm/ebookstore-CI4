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
            

            #form-search {
                border: 1px solid #cf1717;
                border-radius: 12px;
                background-color: #cf1717;
            }

            #form-search .btn{
                background-color: #cf1717;
                color: #fff;
                border-radius: 12px;
            }

            #form-search input {
                margin: 0 0 0 2px;
                border: none;
                border-radius: 6px;
            }

            .my-navbar {
                box-shadow: -8px -8px 20px red;
                position: fixed;
                top: 0%;
                left: 0%;
                z-index: 9999;
                background: #f1f1f1;

            }

            .btn-sell {
                color: #fff;
                background-color: #cf1717;
                
            }
            .btn-sell:hover {
                color: #fff;
                background-color: #cf1717be;
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
    <body id="body">

    <!-- Navbar -->
    <div class="col-lg my-navbar mb-3" id="header">
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand text-danger" href="<?= base_url(); ?>">
                    <img src="<?= base_url('assets/images/system/logo/mylogo-1.png') ?> " alt="" height="60px">
                </a>

                <div class="search" >
                    <form action="" class="form-inline">
                        <div class="form-group" id="form-search">
                            <input type="text" name="search" placeholder="What are you looking for..." style="width: 28em;" class="form-control">
                            <button class="btn" type="submit">
                                <i class="icon-search"></i>
                                Search
                            </button>
                        </div>
                    </form>
                </div>

                <div class="h-btns">
                    <a href="" data-toggle="modal" data-target="#custLoginModal" class="btn btn-sell">Login</a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav col-md-11" >
                        <li class="nav-item active">
                            <a class="nav-link text-danger" href="<?= base_url(); ?>"><i class="icon-home"></i>Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('products'); ?>">Text Books</a>
                        </li>
                        <li class="nav-item dropdown anchorlink" style="cursor: hand;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Categories 
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="width: 12em; padding: 1px 2px 10px 10px">
                                <li><a href="#">Pre-Primary</a></li>
                                <li><a href="#">Primary School</a></li>
                                <li><a href="#">Secondary School</a></li>
                                <li><a href="#">Upper Level Education</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('products'); ?>">Digital Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('products'); ?>">BookShops</a>
                        </li>
                    </ul>

                    <!-- Cart basket -->
                    <div class="cart-view col-md-3">
                        <a href="<?= base_url('product/cart') ?>" title="View Cart" style="text-decoration: none;">
                            <i class="icon-shopping-cart" style="font-size: 36px; padding: 4px; color: #cf1717;"></i>
                            <sup>
                                <span class="badge" style="font-size:small; padding: 6px; color: #fff; background-color: #cf1717; border-radius: 50%; vertical-align: top">
                                    <?php echo ($this->cart->total_items() > 0) ? $this->cart->total_items() : '0'; ?>
                                </span>
                            </sup>
                        </a>
                    </div>
                </div>

            </div>
            
        </nav>
    </div>
    <!-- NAVBAR -->

    <!-- Institution Login Modal -->
    <div class="modal fade" id="custLoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="<?= base_url('assets/images/system/logo/mylogo.png') ?> " alt="logo">
                    <h3>Institution Login</h3>
                </div>
                <form action="<?= base_url() ?>" method="post" class="container p-4">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" placeholder="example@email.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="**********" class="form-control">
                    </div>
                    <div class="row col-lg col-md-12">
                        <button type="submit" class="btn btn-sell col-lg-12">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a type="button" href="" data-toggle="modal" data-target="#custRegisterModal" class="btn btn-sell">Don't have an account yet?</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Institution Login Modal -->

    <!-- Institution Registeration Modal -->
    <div class="modal fade" id="custRegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="<?= base_url('assets/images/system/logo/mylogo.png') ?> " alt="logo">
                    <h3>Institution Registeration Form</h3>
                </div>
                <form action="<?= base_url() ?>" method="post" class="container p-4">
                    <div class="form-group">
                        <label for="username">School Name</label>
                        <input type="text" name="username" placeholder="Enter School Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Email Address</label>
                        <input type="text" name="username" placeholder="email@example.domain" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Contact Number</label>
                        <input type="text" name="username" placeholder="07** *** ***" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Location Address</label>
                        <input type="text" name="username" placeholder="Enter Location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="passwordConfirm" placeholder="Re-Type Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="row col-lg col-md-12">
                        <button type="submit" class="btn btn-sell col-lg-12">Register</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a type="button" href="" data-toggle="modal" data-target="#custLoginModal"  class="btn btn-sell btn-login">Already have an account yet?</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Institution Registration Modal -->

    <script>
        // $loginModal = document.getElementById('custLoginModal');
        // $regModal = document.getElementById('custRegisterModal');

        $(".btn-login").click(function(){
        	$('#custRegisterModal').modal('hide');
		});
        
    </script>

