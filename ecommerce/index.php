
<?php include("includes/header.php"); ?>

          

            <div class="content_wrapper">
                <?php if(!isset($_GET['action'])){ ?>
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
                    <?php
                        cart($con);

                    ?>
                    <div id="products_box">
                        
                    
                        <?php getPro($con);?>

                        <?php get_pro_by_cat_id($con);?>


                        <?php get_pro_by_brand_id($con);?>

                       
                    </div><!-- / #products box-->
                </div>

                <?php }else{ ?>
                <?php 
                    include('login.php'); 
                    } 
                ?>
            </div><!--/ content wrapper -->

        <?php  include('includes/footer.php'); ?>