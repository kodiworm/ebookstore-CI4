<?php $this->load->view('templates/header'); ?>

<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-3 pb-3 bg-light from-wrapper">
        <div class="text-center">
            <img src="<?= base_url('assets/images/system/logo/mylogo.png') ?> " alt="">
            <h3><?= $title ?></h3>
        </div>
        <div class="container">
            <hr>
            <form action="<?= base_url('sells/verifyLogin') ?>" method="post" class="container p-4">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Enter username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="col-12 col-sm-8 text-right">
                        <a href="<?= base_url('sells/register') ?>">Don't have an account yet?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php //$this->load->view('templates/footer'); ?>