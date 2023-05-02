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
            
            .btn-sell {
                color: #fff;
                background-color: #cf1717;
                
            }
            .btn-sell:hover {
                color: #fff;
                background-color: #cf1717be;
            }

            .card {
                border-style: none;
                background-color: transparent;
            }

            #card-icon i {
                font-size: 64px;
                color: #fff;
            }
            
            .card-head {
                background-color: #cf1717;
                padding: 60px;
                border-radius: 50%;
            }

            footer {
                background-blend-mode: overlay;
                background-image: url('<?= base_url('assets/images/system/bg-photo.png') ?>');
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
            <a class="navbar-brand col-lg-3" href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/images/system/logo/mylogo-1.png') ?> " alt="" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-md-6" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-danger" href="<?= base_url(); ?>" style="font-size: 17px; font-weight: 540;">
                            <i class="icon-home"></i>Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="" data-toggle="modal" data-target="#adminLoginModal" style="font-size: 17px; font-weight: 540;">
                        <i class="icon-user-cog"></i>Admins
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="<?= base_url('products'); ?>" style="font-size: 17px; font-weight: 540;">Institutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="" data-toggle="modal" data-target="#sellerLoginModal" style="font-size: 17px; font-weight: 540;">Publishers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Admin Login Modal -->
<div class="modal fade" id="adminLoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <h3>Admin Login</h3>
        </div>
        <form action="<?= base_url('admin/verify_admin') ?>" method="post" class="container p-4">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="row col-lg col-md-12">
                <button type="submit" class="btn btn-sell col-lg-12">Login</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sell">Forgot Password?</button>
      </div>
    </div>
  </div>
</div>

<!-- Seller Login Modal -->
<div class="modal fade" id="sellerLoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <h3>Seller Login</h3>
        </div>
        <form action="<?= base_url('sells/verifyLogin') ?>" method="post" class="container p-4">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="row col-lg col-md-12">
                <button type="submit" class="btn btn-sell col-lg-12">Login</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" href="" data-toggle="modal" data-target="#sellerRegisterModal" class="btn btn-sell">Don't have an account yet?</a>
      </div>
    </div>
  </div>
</div>

<!-- Seller Register Modal -->
<div class="modal fade" id="sellerRegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <h3>Seller Login</h3>
        </div>
        <form action="<?= base_url('sells/dashboard/saveSeller') ?>" method="post">
                <div class="mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your fullname" required>
                </div>
                <div class="mb-3">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="eg@email.domain" required>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="07** *** ***" required>
                </div>
                <div class="form-group">
                    <label for="DOB">Date of Birth: </label>
                    <input type="date" id="DOB" name="dob" class="form-control" placeholder="dd/mm/yy">
                </div>
                <div class="form-group">
                    <label for="gender">Gender: </label>

                    <div class="radio">
                        <label for="male" class="radio-inline">
                            <input type="radio" name="genderRadio" value="male" required> 
                            Male <i class="icon-male"></i> 
                        </label>
                        <label for="female" class="radio-inline"> 
                            <input type="radio" name="genderRadio" value="female" required> 
                            Female <i class="icon-female"></i>
                        </label>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword" placeholder="Re-type Password" required>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12">
                        <input class="btn btn-sell btn-block" type="submit" name="register" value="Register">
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" href="" data-toggle="modal" data-target="#sellerLoginModal" class="btn btn-sell">Already have an account?</a>
      </div>
    </div>
  </div>
</div>

    <!-- OPENING SLIDESHOW -->
    <?php $this->load->view('components/carousel_view'); ?>

    <!-- E-Bookstore Opening Info -->
    <div class="container bg-light">
        <div class="col-lg mb-4 text-center">
            <h3 style="font-weight: 550;">E-Bookstore Kenya</h3>
            <p>
                E-bookstore is an e-commerce system that facilitates the online uploading of books by different publishers and ordering of books by different 
                institutions. 
                Publishers can create account whereby they will be able to upload books on which the primary and secondary institutions will be eligible to order 
                according to their requirements. You create and 
                manage your online bookshop the way you want. Register with us and be your own boss, enter the market and start selling.
            </p>
            <p>
                
            At E-Bookshop Kenya we believe that information and knowledge are fuel for the human spirit.
            We believe in a world where people always have access to the information they need, advancing their lives so they can advance the lives of others.
            </p>
        </div>

        <div class="row col-lg mb-4">
            <div class="card-deck">
                <div class="card">
                    <div class="card-head text-center" id="card-icon">
                        <i class="icon-dollar"></i>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title text-center">Pay on Delivery After Confirming the Product/Book(s)</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head text-center" id="card-icon">
                        <i class="icon-refresh"></i>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title text-center">Easy Return Quick Refund without Any Charges</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head text-center" id="card-icon">
                        <i class="icon-truck"></i>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title text-center">Delivery Services at Affordable rates Availabe</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head text-center" id="card-icon">
                        <i class="icon-phone"></i>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title text-center">Customer Care 24/7 Dedicated Support</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php $this->load->view('templates/footer'); ?>