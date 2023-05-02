<?php $this->load->view('admin/header'); ?>
     
<?php
    if (!$this->session->userdata('admin')){redirect();}
?>

<div class="containter-fluid mb-4 bg-light" style="max-height: 80vh; max-width: 1567px;">

    <div class="row bg-white">
        <div class="col-md-3">
            <?php $this->load->view('components/admin_sidebar'); ?>
        </div>

        <div class="col-md-9" style="max-height: 80vh; overflow: scroll;">
            <!-- TOP ROW -->
            <div class="row col-lg">
                <h1><?= $title ?></h1>
            </div>
            <hr>
            <div class="bg-light p-4">
                <!-- SUCCESS AND ERROR DISPLAY -->
                <?php 
                if ($this->session->flashdata('success'))
                {
                ?>
                    <div class="alert alert-warning" role="alert">
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
                <!-- SUCCESS AND ERROR DISPLAY -->

                <!-- Displayind data in table-->
                <table class="table table-bordered product-table">
                    <tr>
                        <th></th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Merchant</th>
                        <th>Price</th>
                    </tr>
                    <tbody>
                    <?php 
                        $count = 1;
                        foreach ($products as $prod)
                        {
                    ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td>
                                    <img src="<?= base_url('assets/images/').$prod['image'] ?>" height="90">
                                </td>
                                <td><?= $prod['name']; ?></td>
                                <td><?= $prod['description']; ?></td>
                                <td><?= $prod['product_signature']; ?></td>
                                <td><?= $prod['price']; ?></td>
                                <td style="width: 200px">
                                    <a href="<?= $prod['id']; ?>" class="btn btn-primary disable">
                                        Edit <i class="icon-edit"></i>
                                    </a>  
                                    <a href="<?= base_url('admin/delete_prod/'.$prod['id']); ?>" class="btn btn-danger disable">
                                        Delete <i class="icon-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>

            </div>

        </div>  
    </div>

</div>




<?php $this->load->view('templates/footer'); ?>