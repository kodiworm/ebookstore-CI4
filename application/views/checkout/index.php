<?php $this->load->view('templates/header'); ?>
<br><br><br><br>

<div class="container mt-4 mb-4 p-4 bg-light">
    <h1><?= $title ?></h1>
    <hr>
    <?php 
    if ($this->session->flashdata('error_msg'))
    {
    ?>
        <div class="alert alert-danger" role="alert">
            <?php 
                echo $this->session->flashdata('error_msg');
            ?>
        </div>
    <?php
    }
    ?>
    <div class="row">
		
        <div class="col-md-5 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Cart</span>
                <span class="badge badge-secondary badge-pill"><?php echo $this->cart->total_items(); ?></span>
            </h4>
            <ul class="list-group mb-3">
                <?php if($this->cart->total_items() > 0)
                { 
                    foreach($cartItems as $item) { ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <?php $imageURL = !empty($item["image"])?base_url('assets/images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                                <img src="<?php echo $imageURL; ?>" width="75"/>
                                <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                <small class="text-muted"><?php echo 'KES '.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                            </div>
                            <span class="text-muted"><?php echo 'KES '.$item["subtotal"]; ?></span>
                        </li>
                <?php 
                    } 
                }else{ ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <p>No items in your cart...</p>
                        </li>
                <?php } ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (KES)</span>
                    <strong><?php echo 'KES '.$this->cart->total(); ?></strong>
                </li>
            </ul>
            <a href="<?php echo base_url('products'); ?>" class="btn btn-block btn-danger">Add Items</a>
        </div>
        <div class="col-md-7 order-md-1">
            <h4 class="mb-3">Contact Details</h4>
            <form method="post">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= !empty($custData['name'])?$custData['name']:''; ?>" placeholder="Enter name" required>
                    <?php //echo form_error('name','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= !empty($custData['email'])?$custData['email']:''; ?>" placeholder="Enter email" required>
                    <?php //echo form_error('email','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?= !empty($custData['phone'])?$custData['phone']:''; ?>" placeholder="Enter contact no" required>
                    <?php //echo form_error('phone','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="<?= !empty($custData['address'])?$custData['address']:''; ?>" placeholder="Enter address" required>
                    <?php //echo form_error('address','<p class="help-block error">','</p>'); ?>
                </div>
                <input class="btn btn-sell btn-lg btn-block" type="submit" name="placeOrder" value="Place Order">
            </form>
        </div>
    </div>
</div>



<?php $this->load->view('templates/footer'); ?>