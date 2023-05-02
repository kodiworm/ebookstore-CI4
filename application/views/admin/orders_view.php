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
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Contacts</th>
                        <th>Order Date</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    <tbody>
                    <?php 
                        $count = 1;
                        foreach ($orders as $data)
                        {
                    ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $data['id']; ?></td>
                                <td><?= $data['name']; ?></td>
                                <td><?= $data['phone']." - ".$data['email']; ?></td>
                                <td><?= $data['created_at']; ?></td>
                                <td><?= $data['grand_total']; ?></td>
                                <td style="width: 200px">
                                    <a href="<?= base_url('admin/orders/items/'.$data['id']); ?>" class="btn btn-sell">
                                        View <i class="icon-eye-open"></i>
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