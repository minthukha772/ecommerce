<?php

session_start();

if(!isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
    echo "<script>window.open('login.php','_self')</script>";
}else{



?>





<?php include '../includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>web developer</title>

<link href="css/deskstop.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<script src="../js/jquery-3.6.0.min.js"></script>

</head>

<body>

    <div class="container">
        <div class="header">
            <div class="navbar-header">
                <h3><a class="admin_name">Admin Area - <?php echo $_SESSION['name']; ?> </a></h3>
            </div><!--/navbar header-->

            <div class="navbar-right-header">
                <ul class="dropdown-navbar-right">
                    <li>
                        <a><i class="fa fa-user"></i>&nbsp;<i class="fa fa-caret-down"></i></a>

                        <ul class="subnavbar-right">
                            <li><a>User Account</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

                    </li>
                </ul>


                <ul class="dropdown-navbar-right">
                    <li>
                        <a><i class="fa fa-bell"></i>&nbsp;<i class="fa fa-caret-down"></i></a>

                        <ul class="subnavbar-right">
                            <li><a>Notification</a></li>
                        </ul>

                    </li>
                </ul>



            </div><!--/navbar right header-->

        </div><!--/header-->


        <div class="body_container">
            <div class="left_sidebar">
                <div class="left_sidebar_box">
                    <ul class="left_sidebar_first_level">
                       
                        <li><a href="../index.php" target="_blank"><i class="fa fa-dashboard"></i>My Site</a></li>
                     
                    <li>
                        <a href="#"><i class="fa fa-th-large"></i>&nbsp;Books <i class="arrow fa fa-angle-left"></i></a>

                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=add_pro">Add Book</a></li>
                            <li><a href="index.php?action=view_pro">View Books</a></li>
                        </ul><!--/left_sidebar_second_level-->

                     </li>

                     <li>
                        <a href="#"><i class="fa fa-plus"></i>&nbsp; Categories <i class="arrow fa fa-angle-left"></i></a>

                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=add_cat">Add Category</a></li>
                            <li><a href="index.php?action=view_cat">View Categories</a></li>
                        </ul><!--/left_sidebar_second_level-->

                     </li>


                     <li>
                        <a href="#"><i class="fa fa-plus"></i>&nbsp; Authors <i class="arrow fa fa-angle-left"></i></a>

                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=add_brand">Add Author</a></li>
                            <li><a href="index.php?action=view_brands">View Authors</a></li>
                        </ul><!--/left_sidebar_second_level-->

                     </li>


                     <li>
                        <a href="#"><i class="fa fa-plus"></i>&nbsp; Admin <i class="arrow fa fa-angle-left"></i></a>

                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=add_user">Add User</a></li>
                            <li><a href="index.php?action=view_users">List User</a></li>
                        </ul><!--/left_sidebar_second_level-->

                     </li>



                     </ul><!--/leftsidebar first level-->
                </div><!--/left_sidebar_box-->

            </div><!--/left sidebar-->

            <div class="content">
                <div class="content_box">
                    <?php
                        if(isset($_GET['action'])){
                            $action = $_GET['action'];
                        }else{
                            $action = '';
                        }

                        switch($action){
                            case 'add_pro';
                            include 'includes/insert_product.php';
                            break;

                            case 'view_pro';
                            include 'includes/view_products.php';
                            break;

                            case 'edit_pro';
                            include'includes/edit_product.php';
                            break;

                            case 'add_cat';
                            include'includes/insert_category.php';
                            break;

                            case 'view_cat';
                            include'includes/view_categories.php';
                            break;

                            case 'edit_cat';
                            include'includes/edit_category.php';
                            break;

                            case 'add_brand';
                            include'includes/insert_brand.php';
                            break;

                            case 'view_brands';
                            include'includes/view_brands.php';
                            break;

                            case 'edit_brand';
                            include'includes/edit_brand.php';
                            break;

                            case 'view_users';
                            include'includes/view_users.php';
                            break;

                            
                        }

                    ?>
                </div><!--/content box-->
            </div><!--/content-->
        </div><!--/body container-->

    </div><!--/container-->

</body>
</html>



<script>
    
    //Drop Down menu right
    $(document).ready(function(){
        $(".dropdown-navbar-right").on('click',function(){
            $(this).find(".subnavbar-right").slideToggle('fast');
        });
    });

    // Collapse Left Sidebar
    $(".left_sidebar_first_level li").click(function(){
        $(".left_sidebar_second_level").slideToggle('fast');
    });

</script>

<?php } ?>