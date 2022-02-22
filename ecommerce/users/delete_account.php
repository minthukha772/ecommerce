
<style>
    .delete_account_container{
        padding: 10px;
    }
    .delete_account_box{
        width: 50%;
    }
    .delete_account_box input[type=submit]{
        padding: 7px 15px;
        margin: 20px;
        float: right;
        border: none;
    }
    .yes_btn{
        background: rgba(3, 169, 252, 0.9);
        color: white;
    }
</style>



<div class="delete_account_container">

<h1 style="text-align:left">Confirm Box</h1>
<hr />

<div class="delete_account_box">
<h4>Are you sure want to delete your account?</h4>

<form action="" method="post">
    <input type="submit" class="yes_btn" name="yes" value="Yes"/>
    <input type="submit" class="cancel" value="Cancel" />
</form>

</div><!--/delete account box-->

</div><!--/delete account container-->


<?php

    if(isset($_POST['yes'])){

        $delete_account = mysqli_query($con,"delete from users where id='$_SESSION[user_id]'");

        echo "<script>alert('Your account has been deleted!')</script>";

        echo "<script>window.open('index.php','_self')</script>";
    }

    if(isset($_POST['cancel'])){
        echo "<script>window.open(window.location.href,'_self')</script>";
    }


?>