<?php $this->load->view('sells/header') ?>

<div class="container bg-light mt-4 mb-4 p-4">
<h1><?= $title ?></h1>
<hr>

<!-- DISPLAY SUCCESS AND ERROR MESSAGES -->
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
 else if ($this->session->flashdata('warning'))
 {
 ?>
    <div class="alert alert-danger" role="alert">
        <?php 
            echo $this->session->flashdata('warning');
        ?>
    </div>
 <?php 
 }
 ?>
 <!-- DISPLAY SUCCESS AND ERROR MESSAGES -->


<!-- DISPLAY  SELLERS PRODUCT IN TABLE BELOW -->
<table class="table table-bordered">
    <tr>
        <th></th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    <?php 
        foreach ($products as $prod)
        {
    ?>
            <tr>
                <td></td>
                <td>
                    <img src="<?= base_url('assets/images/').$prod->image ?>" height="90">
                </td>
                <td><?= $prod->name; ?></td>
                <td><?= $prod->description; ?></td>
                <td><?= $prod->price; ?></td>
                <td>
                    <a href="<?= $prod->id; ?>" class="btn btn-primary">Edit</a>  
                    <a href="<?= base_url('sell/dashboard/delete_prod/'.$prod->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
    <?php
        }
    ?>

</table>

</div>



<?php $this->load->view('templates/footer') ?>