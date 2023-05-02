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
                <!-- Delete completion Msg -->
                <?php 
                    if($this->session->flashdata('success')) 
                    {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php 
                    } 
                ?>
                <!-- Displayind data in table-->
                <table class="table table-bordered product-table">
                    <tr>
                        <th></th>
                        <th>Publisher Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <!-- <th>Date of Birth</th> -->
                        <th>Joined On</th>
                        <th></th>
                    </tr>
                    <tbody>
                    <?php 
                        $count = 1;
                        foreach ($sellers as $seller)
                        {
                    ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $seller->fullname; ?></td>
                                <td><?= $seller->email; ?></td>
                                <td><?= $seller->phone; ?></td>
                                <!-- <td><?php // $seller->dob; ?></td> -->
                                <td><?= $seller->created_at; ?></td>
                                <td style="width: 200px">
                                    <a href="<?= $seller->id; ?>" class="btn btn-primary">
                                        Edit <i class="icon-edit"></i>
                                    </a>  
                                    <a href="<?= base_url('admin/delete_sellers/', $seller->id); ?>" class="btn btn-danger ">
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