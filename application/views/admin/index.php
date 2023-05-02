<?php $this->load->view('admin/header'); ?>
     
<?php
    if (!$this->session->userdata('admin')){redirect();}
?>

<div class="containter-fluid mb-4 bg-light" style="height: 80vh; max-width: 1567px;">

    <div class="row bg-white">
        <div class="col-md-3">
            <?php $this->load->view('components/admin_sidebar'); ?>
        </div>

        <div class="col-md-9">
            <!-- TOP ROW -->
            <div class="row col-lg">
                <h1><?= $title ?></h1>
            </div>
            <hr>

            <!-- FIRST ROW -->
            <div class="row p-4">
                <a href="" class="custom-card mr-3" style="width: 22rem; height: 15rem; display: inline-block">
                    <div class="my-card center">
                        <div class="card-head mt-4 text-center" id="card-icon">
                            <i class="icon-dashboard"></i>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Dashboard</h6>
                        </div>
                    </div>
                </a>
                <a href="<?= base_url('admin/add_product') ?>" class="custom-card mr-3" style="width: 22rem; height: 15rem; display: inline-block">
                    <div class="my-card center">
                        <div class="card-head mt-4 text-center" id="card-icon">
                            <i class="icon-adn"></i>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Add New Products</h6>
                        </div>
                    </div>
                </a>
                <a href="<?= base_url('admin/orders'); ?>" class="custom-card mr-3" style="width: 22rem; height: 15rem; display: inline-block">
                    <div class="my-card center">
                        <div class="card-head mt-4 text-center" id="card-icon">
                            <i class="icon-shopping-cart"></i>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Check Orders</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- SECOND ROW -->
            <div class="row p-4">
                <a href="<?= base_url('admin/active_cust') ?>" class="custom-card mr-3" style="width: 22rem; height: 15rem; display: inline-block">
                    <div class="my-card center">
                        <div class="card-head mt-4 text-center" id="card-icon">
                            <i class="icon-group"></i>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">View Institutions</h6>
                        </div>
                    </div>
                </a>
                <a href="<?= base_url('admin/sellers') ?>" class="custom-card mr-3" style="width: 22rem; height: 15rem; display: inline-block">
                    <div class="my-card center">
                        <div class="card-head mt-4 text-center" id="card-icon">
                            <i class="icon-money"></i>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">View Publishers</h6>
                        </div>
                    </div>
                </a>
                <a href="" class="custom-card mr-3" style="width: 22rem; height: 15rem; display: inline-block">
                    <div class="my-card center">
                        <div class="card-head mt-4 text-center" id="card-icon">
                            <i class="icon-truck"></i>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title">Check Order Deliveries</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>  
    </div>

</div>



<br>
<?php $this->load->view('templates/footer'); ?>