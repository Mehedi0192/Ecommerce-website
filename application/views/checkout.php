<section class="about-pages-area">  
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

    <h3>Check-Out</h3>
        <div class="check-body">
            <form action="<?php echo base_url('confirm-order')?>" method="post">
            <div class="own-form"> 
                <!--<div class="form-group by-now">
                    <label for="name" style="float: left;">Item Quantity:</label>
                </div>-->
                <div class="form-group">
                    <label for="name" style="float: left;">Your Name</label>
                    <input name="customer_name" type="text" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="name" style="float: left;">Your Email</label>
                    <input name="customer_email" type="email" class="form-control" id="name" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label for="name" style="float: left;">Your Contact Number</label>
                    <input name="customer_contact_no" type="text" class="form-control" id="name" placeholder="Contact No" required>

                </div>

                  <div class="form-group">
                    <label for="name" style="float: left;">Coments<s/label>
                    <textarea name="coments_box" rows="5" cols="60" placeholder="Write your comments" ></textarea>
                </div>
                <!--<div class="form-group">
                    <label for="name" style="float: left;">Your Address</label>
                    <input class="form-control" id="name" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="name" style="float: left;">Zip Code</label>
                    <input class="form-control" id="name" placeholder="Zip code">
                </div>
                <!--<div class="form-group">
                    <label for="name" style="float: left;">District</label>
                    <select style="width: 100%;">
                        <option>Dhaka</option>
                        <option>Panchogar</option>
                        <option>Noakhali</option>
                        <option>Barishal</option>
                        <option>Magura</option>
                        <option>Barguna</option>
                        <option>Nilphamari</option>
                        <option>Bogra</option>
                        <option>Patuakhali</option>
                        <option>Feni</option>
                    </select>
                </div>s
                <div class="form-group">
                    <label for="name" style="float: left;">Shipping Charge:</label>
                </div>
                <div class="form-group">
                    <label for="name" style="float: left;">Total Amount:</label>
                </div>-->
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" value="Confirm Order" onclick="myfunction()">
            <input type="reset" value="Clear" class="btn btn-warning">
        </div>
    </form>

    </div>
    <div class="col-md-3"></div>
</div>
</div>
</section>
<script>
    function myfunction()
    {
        alert('Your Order Completed Successfully');
    }
</script>
