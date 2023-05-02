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
                <!-- Displayind data in table-->
                <table class="table table-bordered product-table">
                    <tr>
                        <th></th>
                        <th>Customer Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                    <tbody>
                    <?php 
                        $count = 1;
                        foreach ($customers as $cust)
                        {
                    ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $cust->name; ?></td>
                                <td><?= $cust->email; ?></td>
                                <td><?= $cust->phone; ?></td>
                                <td><?= $cust->address; ?></td>
                                <td style="width: 200px">
                                    <a href="<?= $cust->id; ?>" class="btn btn-primary">
                                        Edit <i class="icon-edit"></i>
                                    </a>  
                                    <a href="<?= $cust->id; ?>" class="btn btn-danger ">
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