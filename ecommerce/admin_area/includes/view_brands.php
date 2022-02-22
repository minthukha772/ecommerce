
<div class="view_product_box">

<h2>View Authors</h2>
<div class="border_bottom"></div>

<form action="" method="post" enctype="multipart/form-data"/>

<div class="search_bar">
    <input type="text" id="search" placeholder="Type to search..."/>
</div>

<table width="100%">
    <thead>
        <tr>
            <th><input type="checkbox" id="checkAll"/>Check</th>
            <th>ID</th>
            <th>Author's Name</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>

        </tr>
    </thead>

    <?php
        $all_brands = mysqli_query($con,"select * from brands order by brand_id DESC");

        $i = 1;

        while($row = mysqli_fetch_array($all_brands)){

        
    ?>

    <tbody>
        <tr>
            <td><input type="checkbox" name="deleteAll[]" value="<?php echo $row['brand_id']; ?>"/></td>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['brand_title']; ?></td>
            <td>
                <?php
                    if($row['visible'] == 1){
                        echo "Approved";
                    }else{
                        echo "Pending";
                    }
                ?>
            </td>
            <td><a href="index.php?action=view_brands&delete_brand=<?php echo $row['brand_id']; ?>">Delete</a></td>
            <td><a href="index.php?action=edit_brand&brand_id=<?php echo $row['brand_id']; ?>">Edit</a></td>
        </tr>
    </tbody>
    <?php $i++;}//End while loop ?>

    <tr>
    <td><input type="submit" name="delete_all" value="Remove"/></td>
    </tr>

</table>


</form>

</div><!--/view product box-->


<?php

    //Delete Product

    if(isset($_GET['delete_brand'])){
        $delete_brand = mysqli_query($con,"delete from brands where brand_id ='$_GET[delete_brand]'");

        if($delete_brand){
            echo "<script>alert('Author name has been deleted')</script>";

            echo "<script>window.open('index.php?action=view_brands','_self')</script>";
        }
    }

    //Remove items selected using foreach loop
    if(isset($_POST['deleteAll'])){
        $remove = $_POST['deleteAll'];

        foreach($remove as $key){
            $run_remove = mysqli_query($con,"delete from brands where brand_id='$key'");

            echo "<script>alert('Item selected has been deleted')</script>";

            echo "<script>window.open('index.php?action=view_brands','_self')</script>";
        }
    }


?>