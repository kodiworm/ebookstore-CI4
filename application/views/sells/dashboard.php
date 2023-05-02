<?php $this->load->view('sells/header') ?>

<div class="container bg-light mt-4 mb-4 p-4">
<h1><?= $title ?></h1>
<hr>

<?php 
 if ($this->session->flashdata('success'))
 {
?>
    <div class="alert alert-success" role="alert">
        <?php 
            echo $this->session->flashdata('success');
        ?>
    </div>
<?php
 }
 ?>

 <form action="<?= base_url('sell/dashboard/addProduct') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="product_name">Product name</label>
        <input type="text" name="prod_name" placeholder="product name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="product_description">Product description</label>
        <input type="text" name="prod_description" placeholder="product description" class="form-control" required>
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

<?php $this->load->view('templates/footer');
