<?php $this->load->view('templates/header') ?>
<br><br><br><br>

<div class="container bg-light mt-4 mb-4 p-3"><br/>
    <h1><?= $title ?></h1>

    <div class="row mb-4">
        <div class="cart">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="10%"></th>
                                <th width="30%">Product</th>
                                <th width="15%">Price</th>
                                <th width="13%">Quantity</th>
                                <th width="20%" class="text-right">Subtotal</th>
                                <th width="12%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                            <tr>
                                <td>
                                    <?php $imageURL = !empty($item["image"])?base_url('assets/images/'.$item["image"]):'no image file'; ?>
                                    <?php 
                                        // if(!empty($item["image"])){
                                        //     if($item['signature'] == "ebookstore") {
                                        //         $imageURL = base_url('assets/images/'.$item["image"]);
                                        //     }
                                        //     else{
                                        //         $imageURL = base_url('uploads/images/'.$item["image"]);
                                        //     }
                                        // }
                                    ?>
                                    <img src="<?php echo $imageURL; ?>" width="50"/>
                                </td>
                                <td><?php echo $item["name"]; ?></td>
                                <td><?php echo '$'.$item["price"].' KES'; ?></td>
                                <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                                <td class="text-right"><?php echo '$'.$item["subtotal"].' KES'; ?></td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('product/cart/removeItem/'.$item["rowid"]); ?>':false;">
                                        <i class="icon-remove"></i>
                                    </button> 
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="6"><p>Your cart is empty.....</p></td>
                            <?php } ?>
                            <?php if($this->cart->total_items() > 0){ ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Cart Total</strong></td>
                                <td class="text-right"><strong><?php echo '$'.$this->cart->total().' KES'; ?></strong></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-mb-2 col-xs-12">
                <div class="row col-xs-12">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ml-3">
                        <a href="<?= base_url('products'); ?>" class="btn btn-block btn-sell">Continue Shopping</a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
                        <a href="<?= base_url('product/checkout'); ?>" class="btn btn-block btn-success">Checkout</a>
                    </div>
                </div>  
            </div>
        </div> 
    </div>

</div>


<?php $this->load->view('templates/footer'); ?>