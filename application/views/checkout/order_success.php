<?php $this->load->view('templates/header') ?>
<br><br><br><br><br><br>

<div class="container mt-4">
    <div class="row">
        <h1><?= $title ?></h1>
        <hr>

        <?php if(!empty($cust)){ ?>
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">Your order has been placed successfully.</div>
            </div>
            
            <!-- Order status & shipping info -->
            <ul class="col-md-12 jumbotron p-4" style="list-style: none; font-size: 20px;">
                <h3 class=" text-center">Order Info</h3>
                <div class="order-list-info">
                    <li><b>Reference ID:</b> #<?php echo $cust['id']; ?></li>
                    <li><b>Total:</b> <?php echo 'KES '.$cust['grand_total']; ?></li>
                    <li><b>Placed On:</b> <?php echo $cust['created_at']; ?></li>
                    <li><b>Buyer Name:</b> <?php echo $cust['name']; ?></li>
                    <li><b>Email:</b> <?php echo $cust['email']; ?></li>
                    <li><b>Phone:</b> <?php echo $cust['phone']; ?></li>
                </div>
            </ul>

            <?php //echo print_r($order); die(); ?>
            
            <!-- Order items -->
            <div class="row col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(!empty($order['items'])){  
                            foreach($order['items'] as $item){ 
                        ?>
                        <tr>
                            <td>
                                <?php $imageURL = !empty($item["image"])?base_url('assets/images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                                <img src="<?php echo $imageURL; ?>" width="75"/>
                            </td>
                            <td><?php echo $item["name"]; ?></td>
                            <td><?php echo 'KES '.$item["price"]; ?></td>
                            <td><?php echo $item["quantity"]; ?></td>
                            <td><?php echo 'KES '.$item["sub_total"].' KES'; ?></td>
                        </tr>
                        <?php } 
                        } ?>
                    </tbody>
                </table>
            </div>
        <?php }
            else{ 
        ?>
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">Your order submission failed.</div>
        </div>
        <?php } ?>

    </div>
    
</div> 

<?php $this->load->view('templates/footer') ?>