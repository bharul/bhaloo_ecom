<?php 
// include "./admin_functions.php";
$conn = database_object();

?>
<div class="addproducts">
        <h3><i> Add Products </i></h3>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_title">Product Title:</label>
                <input type="text" name="product_title" id="product_title" required>
            </div>

            <div class="form-group">
                <label for="product_description">Product Description:</label>
                <textarea name="product_description" id="product_description" required></textarea>
            </div>

            
            <div class="form-group">
                <label for="product_price">Product Price:</label>
                <input type="text" name="product_price" id="product_price" required>
            </div>
            
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="category" required>
                    <option value="grocery">Grocery</option>
                    <option value="mobiles">Mobiles</option>
                    <option value="fashion">Fashion</option>
                    <option value="electronics">Electronics</option>
                    <option value="home & furniture">Home & Furniture</option>
                    <option value="appliances">Appliances</option>
                    <option value="sports">Sports</option>
                </select>
            </div>

            <div class="form-group">
                <label for="product_image">Product Image:</label>
                <input type="file" name="product_image" id="product_image" accept="image/*" required>
            </div>

            <div class="form-group">
                <input type="submit" name="add_product" value="Add Product">
            </div>
        </form>
      </div>

<?php

if(isset($_POST['add_product'])){
    print_r($_POST);
}