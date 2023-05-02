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
                <!-- Displayind data in table-->
                <table class="table table-bordered product-table">
                    <tr>
                        <th></th>
                        <th>Image</th>
                        <th>Book</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <tbody>
                    <?php 
                        $count = 1;
                        foreach ($items as $data)
                        {
                    ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td>
                                    <img src="<?= base_url('assets/images/'.$data['image']) ?>" alt="" height="90">
                                </td>
                                <td><?= $data['name']; ?></td>
                                <td><?= $data['quantity']; ?></td>
                                <td><?= $data['sub_total']; ?></td>
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