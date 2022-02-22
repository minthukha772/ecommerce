<?php

    include("functions/functions.php");
    include("includes/db.php");


?>
<!DOCTYPE html>
<html>


    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Shopping for Books</title>

        <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>"/>
        <script src="js/jquery-3.6.0.min.js"></script>
    </head>

    <body>
        <!--Main container starts here -->
        <div class="main_wrapper">

            <div class="header_wrapper">
            <div class="header_logo">
                <a href="index.php">
                    <img id="logo" style="width:100px; height:50px;" src="images/ecommerce1.jpg">
                </a>
            </div><!-- /. header logo-->

            <div id="form">
                <form method="get" action="results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="စာအုပ်ရှာရန်(အင်္ဂလိပ် မြန်မာဘာသာနဲ့ရှာနိုင်ပါသည်)" />
                    <input type="submit" name="search" value="ရှာဖွေမည်"/>
                </form>
            </div>

            <div class="cart">
                <ul>
                    <li class="dropdown_header_cart">
                        <div id="notification_total_cart" class="shopping-cart">
                            <img src="images/cart2.jpg" id="cart_image">
                            <div class="noti_cart_number">
                                <?php
                                   
                                    total_items($con);
                                ?>
                            </div><!--/noti_cart_number-->
                        </div>
                    </li>
                </ul>
            </div>

            <?php if(!isset($_SESSION['user_id'])){ ?>

            <div class="register_login">
                <div class="login"><a href="index.php?action=login">Sign in</a></div>
                <div class="register"><a href="register.php">Sign up</a></div>
            </div>

            <?php }else{ ?>

            <?php 
            
            $select_user = mysqli_query($con,"select * from users where id='$_SESSION[user_id] '");
            $data_user = mysqli_fetch_array($select_user);
                
            ?>

            <div id="profile">
                <ul>
                    <li class="dropdown_header">
                        <a>

                        <?php if($data_user['image'] !=''){ ?>
                            <span><img src="upload-files/<?php echo $data_user['image']; ?>"></span>
                        <?php }else{ ?>
                        <span><img src="images/profile-icon.png"></span>
                        <?php } ?>
                        </a>

                        <ul class="dropdown_menu_header">
                            <li><a href="my_account.php?action=edit_account">Account Setting</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

                    </li>
                </ul>
            </div>

            <?php } ?>    



            </div><!--/ header wrapper-->


            <div class="menubar">
                <ul id="menu">
                    <li><a href="index.php">မူရင်းpage</a></li>
                    <li><a href="all_products.php">စာအုပ်များကြည့်ရန်</a></li>
                    <li><a href="customer/my_account.php">အကောင့်</a></li>
                    <li><a href="cart.php">စျေး၀ယ်ခြင်းတောင်း</a></li>
                    <li><a href="contact.php">ဆက်သွယ်ရန်</a></li>
                    <li><a href="logout.php">အကောင့်မှထွက်ရန်</a></li>
                </ul>
            </div>


         <?php include('js/drop_down_menu.php'); ?>
