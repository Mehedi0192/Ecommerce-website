<section class="about-pages-area">  
    <div class="container">
    <h3>My Shopping Cart</h3>
        <div class="wrapper">
            <div class="main-container col1-layout" style="width: 100%;float: left;">
                <div class="main container_12">
                    <div class="breadcrumbs">
                        <h5>Home <i class="fa fa-chevron-right"></i></h5>
                        <h5><b>Add to Cart</b></h5>
                    </div>
                    <div class="success-inner">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-default">
                                <tr style="background:#e9e9e9;">
                                    <!--<th>Product Image</th>-->
                                    <th>Product ID</th>
                                    <th>Product Name </th>
                                    <th>Product Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            	<?php 
                            	//$contents=$this->cart->contents();
                            	//echo "<pre>";
                            	//print_r($contents);
                            	foreach($this->cart->contents() as $cart_info){
                            	?>
                                <tr>
                                    <<td><?php echo $cart_info['id']?></td>
                                    <td><?php echo $cart_info['name']?></td>
                                    <td><?php echo $cart_info['price']?></td>
                                    <td>
                                    
                                    <?php echo $cart_info['qty']?>
								
                                      </td>
                                      <td><?php echo $cart_info['subtotal']?></td>
                                      <td class="cart_delete"> <a class="cart_quantity_delete" href="<?php echo base_url();?>delete-to-cart/<?php echo $cart_info['rowid'] ?>"> <i class="fa fa-times"></i></a>
							</td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <h2 class="head-amount">Your Total Amount: <span>BDT <?php echo $this->cart->total();?></span></h2>
                        <a href="<?php echo base_url('checkout')?>" class="btn btn-add-to-cart"><i class="fa fa-cloud-upload" area-hidden="true"></i>Checkout</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>