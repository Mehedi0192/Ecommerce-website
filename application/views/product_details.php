<section class="inr-banner">
    <div class="innr-slid">
        <img src="<?php echo base_url().'assets/site/'; ?>images/inn-bnr/wood-2.jpg">
    </div>
</section>
<section class="about-pages-area">
    <div class="container">
        <h3></h3>
        <div class="wrapper">
            <div class="main-container col1-layout" style="width: 100%;float: left;">
                <div class="main container_12">
                    <div class="breadcrumbs">
                        <h5>Home <i class="fa fa-chevron-right"></i></h5>
                        <h5>Products <i class="fa fa-chevron-right"></i></h5>
                        <h5><b>Cane Product</b></h5>
                    </div>
                    <div class="col-main grid_full">
                        <div class="product-view">
                            <div class="product-essential">
                                <input name="form_key" type="hidden" value="ICm9Kn4Vd65kGO9B" />
                                <div class="no-display">
                                    <input type="hidden" name="product" value="1" />
                                    <input type="hidden" name="related_product" id="related-products-field" value="" />
                                </div>
                                <div id="messages_product_view"></div>
                                <div class="product-img-box no-both-margin product-img-column grid_4 col-md-5 col-sm-5 col-xs-12">
                                    <div class="row">
                                        <div class="img-box">
                                            <div class="product-image product-image-zoom">
                                                <div class="product-image-gallery">
                                                    <img id="image-main" class="gallery-image visible" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" alt="Bodj Small Floppy Basket" title="Bodj Small Floppy Basket" />
                                                    <img id="image-0" class="gallery-image" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" data-zoom-image="images/product-detales/g-1.jpg"/>
                                                    <img id="image-1" class="gallery-image" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" data-zoom-image="images/product-detales/g-2.jpg"/>
                                                    <img id="image-2" class="gallery-image" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" data-zoom-image="images/product-detales/g-1.jpg"/>
                                                    <img id="image-3" class="gallery-image" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" data-zoom-image="images/product-detales/g-2.jpg"/>
                                                </div>
                                            </div>
                                            <div class="more-views">
                                                <!--<h2></h2>-->
                                                <ul id="more-images-slider" class="product-image-thumbs itemslider-thumbnails">
                                                    <li class="item">
                                                        <a class="thumb-link product-image" href="#" title="Bodj Small Floppy Basket" data-image-index="0">
                                                            <img class="image-ul" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" alt="" />
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a class="thumb-link product-image" href="#" title="2 Bodj Small Floppy Baskets and 1 large" data-image-index="1">
                                                            <img class="image-ul" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" alt="" />
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a class="thumb-link product-image" href="#" title="Bodj Small Floppy Basket hand weaving" data-image-index="2">
                                                            <img class="image-ul" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" alt="" />
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <a class="thumb-link product-image" href="#" title="Bodj Small Floppy Basket with Charnwood C-Four stove" data-image-index="3">
                                                            <img class="image-ul" src="<?php echo base_url().'assets/filemanager/products/'.$products->file_name; ?>" alt="" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-shop no-both-margin grid_7 col-md-7 col-sm-7 col-xs-12">
                                    <div class="row">
                                        <div class="product-name">
                                            <h1><?php echo $products->name;?></h1>
                                        </div>
                                        <div class="price-stock">
                                            <div class="price-box">
                                                <h4>BDT <?php echo $products->price;?></h4>
                                                <p class="#">Available: <span><?php echo $products->stock;?> item</span></p>
                                            </div>

            <form method="post" action="<?php echo base_url('add-to-cart')?>">
                <div class="add-to-cart">
            <label>Quantity :</label>
            <input type="number" name="qty" value="1"/>
            <input type="hidden" name="id" value="<?php echo $products->id?>">
            
            <button type="Submit" class="btn btn-fefault cart btn-success">
            <i class="fa fa-shopping-cart"></i>
            Add to cart
            </button>
        </div>
        </form>

                                            <div class="short-description">
                                                <p><?php echo $products->description;?></p>
                                                <div class="sku">
                                                    <h5>Product code : <?php echo $products->productcode;?></h5>
                                                </div>
                                            </div>
                                            <div class="social-link">
                                                <a class="tooltip_container" title="Pin on Pinterest" href="javascript:void((function()     {var%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());" target="_blank" style="padding-right: 0;">
                                                    <span class="fa fa-pinterest">&nbsp;</span>
                                                    <span class="tooltip">Pinterest</span>
                                                </a>
                                                <a class="tooltip_container" title="Twitter" href="<?php echo $contact->twitter; ?>" target="_blank">
                                                    <span class="fa fa-twitter">&nbsp;</span> <span class="tooltip">Twitter</span>
                                                </a>
                                                <a class="tooltip_container" title="Share on Facebook" href="<?php echo $contact->facebook; ?>" target="_blank">
                                                    <span class="fa fa-facebook">&nbsp;</span>
                                                    <span class="tooltip">Facebook</span>
                                                </a>
                                                <label>Share</label>
                                                <!--------MODAL-BUY------->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="proudct-tab-area">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="proudct-tab">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')">Product & Materials</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Specification</button>
                    </div>
                    <div id="London" class="tabcontent">
                        <h3>Project & Materials</h3>
                        <p><?php echo $products->productsmaterial;?></p>
                    </div>
                    <div id="Paris" class="tabcontent">
                        <h3><?php echo $products->specification;?></h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>