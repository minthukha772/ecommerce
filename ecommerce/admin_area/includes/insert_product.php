
    <div class="form_box">
        <form action="" method="post" enctype="multipart/form-data">
            <table align="center" width="100%">

                <tr>
                    <td colspan="7">
                    <h2>Add New Book</h2>
                    <div class="border_bottom"></div><!--/border bottom-->
                </td>
                </tr>

                <tr>
                    <td><b>Book's Name</b></td>
                    <td><input type="text" name="product_title" size="60" required/></td>
                </tr>

                <tr>
                    <td><b>Categories</b></td>
                    <td>
                        <select name="product_cat">
                            <option>Select category</option>
                            <?php
                            $get_cats = "select * from categories";

                            $run_cats = mysqli_query($con,$get_cats);

                            while($row_cats = mysqli_fetch_array($run_cats)){
                                $cat_id = $row_cats['cat_id'];
                                $cat_title = $row_cats['cat_title'];

                                echo "<option value='$cat_id'>$cat_title</option>";
                            }
                                ?>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td><b>Authors</b></td>
                    <td>
                        <select name="product_brand">
                            <option>Select Author's Name</option>
                            <?php
                         $get_brands = "select * from brands";

                         $run_brands = mysqli_query($con,$get_brands);
                 
                         while($row_brands = mysqli_fetch_array($run_brands)){
                             $brand_id = $row_brands['brand_id'];
                 
                             $brand_title = $row_brands['brand_title'];
                 
                             echo "<option value='$brand_id'>$brand_title</option>";
                         }
                
                            ?>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td><b>Book's Image</b></td>
                    <td><input type="file" name="product_image"/></td>
                </tr>

                <tr>
                    <td><b>Book's taste</b></td>
                    <td><input type="file" name="product_file"/></td>
                </tr>


              

                <tr>
                    <td><b>Price</b></td>
                    <td><input type="text" name="product_price" required/></td>
                </tr>

                
                <tr>
                    <td valign="top"><b>Description</b></td>
                    <td><textarea name="product_desc" rows="10"></textarea></td>
                </tr>


                <tr>
                    <td><b> Book Keywords </b></td>
                    <td><input type="text" name="product_keywords" required></td>
                </tr>
                

                <tr>
                    <td></td>
                    <td colspan="7"><input type="submit" name="insert_post" value="Add New Book"/></td>
                </tr>



            </table>
        </form>

        </div><!--form box-->    
   


<?php
    if(isset($_POST['insert_post'])){
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_desc = trim(mysqli_real_escape_string($con,$_POST['product_desc']));
        $product_keywords = $_POST['product_keywords'];
    

        //Getting image from  field
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];

        move_uploaded_file($product_image_tmp,"product_images/$product_image");


        //Getting file from field
        $product_file = $_FILES['product_file']['name'];
        $product_file_tmp = $_FILES['product_file']['tmp_name'];

        move_uploaded_file($product_file_tmp,"product_files/$product_file");



        $insert_product = "insert into products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords,product_file)
         values('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords','$product_file')";

         $insert_pro = mysqli_query($con,$insert_product);

         if($insert_pro){

            echo "<script>alert('Book Has been inserted successfully!')</script>";
            
            



         }


        
    }


?>