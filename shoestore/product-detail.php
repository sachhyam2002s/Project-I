<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:account.php');
    }
?>

<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<?php require_once 'inc/header.php';?>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="web.php"><img src="Logo/New_Look_logo.png" alt="" width="50px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="products.php">Product</a></li>
                    <li><a href="admin.php">Dashboard</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="Logo/cart.png" alt="img" width="30px" height="30px"></a>
            <img src="Logo/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
<!--single product details-->

<div class="container">
<section class="products">

<h1 class="heading">latest products</h1>

<div class="box-container">

   <?php
   
   $select_products = mysqli_query($conn, "SELECT * FROM `products`");
   if(mysqli_num_rows($select_products) > 0){
      while($fetch_product = mysqli_fetch_assoc($select_products)){
   ?>

   <form action="" method="post">
      <div class="box">
         <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
         <h3><?php echo $fetch_product['name']; ?></h3>
         <div class="price">Rs.<?php echo $fetch_product['price']; ?>/-</div>
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
         <input type="submit" class="btn" value="add to cart" name="add_to_cart">
      </div>
   </form>

   <?php
      };
   };
   ?>

</div>

</section>
</div>


    <div class="small-container single-product">

        <div class="row">
            <div class="col-2">
                <img src="Photo/cream converse.jpg" width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="Photo/cream converse.jpg" width="100%" class="SmallImg">
                    </div>
                    <div class="small-img-col">
                        <img src="Photo/converse grey.jpg" width="100%" class="SmallImg">
                    </div>
                    <div class="small-img-col">
                        <img src="Photo/converse red.jpg" width="100%" class="SmallImg">
                    </div>
                    <div class="small-img-col">
                        <img src="Photo/converse fire.webp" width="100%" class="SmallImg">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / Converse</p>
                <h1>Converse</h1>
                <h4>Rs. 4500</h4>
                <select>
                    <option>Select Size</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    <option>32</option>
                    <option>33</option>
                    <input type="number" value="1">
                    <a href="cart.php" class="btn">Add To Cart</a>
                    <h3>Product Details</h3>
                    <p>Unisex top low and high top shoe.<br>Get lifted in fashion platform Chucks. </p>
                </select>
            </div>
        </div>
    </div>
<!--title-->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>
<!--products-->
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="Photo/air jordan.jpg" alt="">
                <h4>Air Jordan</h4>
                <p>Rs. 10000</p>
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>
            <div class="col-4">
                <img src="Photo/orange nike.jpg" alt="">
                <h4>Brown Nike Sneaker</h4>
                <p>Rs. 4500</p>
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>
            <div class="col-4">
                <img src="Photo/black sport.jpg" alt="">
                <h4>Black Sport Shoe</h4>
                <p>Rs. 3000</p>
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>
            <div class="col-4">
                <img src="Photo/black leather boot.jpg" alt="">
                <h4>Black Leather Boot</h4>
                <p>Rs. 2500</p>
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>
        </div>
    </div>

<?php require_once 'inc/footer.php';?>

<!--js for toggle menu-->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
<!--js for product gallery-->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("SmallImg");
        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }
    </script>
    <script src="js/script.js"></script>
</body>
</html>