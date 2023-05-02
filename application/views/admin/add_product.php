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
            <div class="row">
                <h1><?= $title ?></h1>
            </div>

            <form action="<?= base_url('admins/dashboard/addProduct') ?>" method="post" class="col-md-8 p-4 bg-light" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="product_name">Product name</label>
                    <input type="text" name="prod_name" placeholder="product name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="product_description">Product description</label>
                    <textarea name="prod_description" class="form-control" cols="30" rows="5" required>Write product description here...</textarea>
                </div>
                <div class="form-group">
                    <label for="product_price">Product price</label>
                    <input type="text" name="prod_price" placeholder="product price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="product_name">Product Image</label>
                    <input type="file" name="prod_image" class="form-control" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit" name="submit"> Submit</button>
                </div>
            </form>

        </div>  
    </div>

</div>




<?php $this->load->view('templates/footer'); ?>