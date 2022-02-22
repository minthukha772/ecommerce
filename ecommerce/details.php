
<?php include("includes/header.php"); ?>

<div class="menubar">
    <ul id="menu">
        <li><a href="index.php">မူရင်းpage</a></li>
        <li><a href="all_products.php">စာအုပ်များကြည့်ရန်</a></li>
        <li><a href="customer/my_account.php">အကောင့်</a></li>
        <li><a href="cart.php">စျေး၀ယ်ခြင်းတောင်း</a></li>
        <li><a href="contact.php">ဆက်သွယ်ရန်</a></li>
    </ul>
</div>

<div class="content_wrapper">
    <div id="sidebar">
        <div id="sidebar_title">စာအုပ်အမျိုးအစားများ</div>
        <ul id="cats">
           
        <?php
            getCats($con); 

        ?>
         </ul>

        <div id="sidebar_title">စာရေးဆရာများ</div>
        <ul id="cats">
            <?php

                getBrands($con);
            ?>
        </ul>

    </div><!-- / sidebar-->

    <div id="content_area">
        <div id="products_box">

        <?php
            if(isset($_GET['pro_id'])){
                $product_id = $_GET['pro_id'];
                
                $run_query_by_pro_id = mysqli_query($con,"select * from products where product_id ='$product_id'");

                while($row_pro = mysqli_fetch_array($run_query_by_pro_id)){

                    
                        $pro_id = $row_pro['product_id'];
                        $pro_cat = $row_pro['product_cat'];
                        $pro_brand = $row_pro['product_brand'];
                        $pro_title = $row_pro['product_title'];
                        $pro_price = $row_pro['product_price'];
                        $pro_image = $row_pro['product_image'];
                        $pro_file  = $row_pro['product_file'];
            
                        echo "
                            <div id='single_product'>
                            <h3>$pro_title</h3>
                            <img src='admin_area/product_images/$pro_image' width='180' height='180'/>
            
                            <p><b> Price: $pro_price </b></p>
                            <a href='details.php?pro_id=$pro_id'>Details</a>
            
                            <a href='index.php?add_cart=$pro_id'>
                                <button style='float:right'>Add to Cart</button>
                            </a>
            
                            </div>
                        
                        ";

                }
            }
        ?>


        </div><!-- / #products box-->
    </div>

</div><!--/ content wrapper -->

<?php  include('includes/footer.php'); ?>