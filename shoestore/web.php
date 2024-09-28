<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:account.php');
    }
?>
<?php require_once 'inc/header.php';?>

    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="web.php"><img src="Logo/New_Look_logo.png" alt="" width="50px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="products.php">Products</a></li>
                    <li><a href="admin.php">Dashboard</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                    
                </ul>
            </nav>
            <a href="cart.php"><img src="Logo/cart.png" alt="img" width="30px" height="30px"></a>
            <img src="Logo/menu.png" class="menu-icon" onclick="menutoggle()">   
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give Your Look <br>A New Style.</h1>
                <p>Either walk like you're the king or walk like you don't care who the king is.</p>
                <a href="products.php" class="btn">Explore &#8594</a>
            </div>
            <div class="col-2">
                <img src="Photo/converse.png" alt="">
            </div>
        </div>
    </div>
    </div>
<!---- featured categories ---->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="Photo/black leather boot.jpg" alt="img">
                </div>
                <div class="col-3">
                    <img src="Photo/white addidas.jpg" alt="img">
                </div>
                <div class="col-3">
                    <img src="Photo/gray jordan.jpg" alt="img">
                </div>
            </div>
        </div>    
    </div>
<!---- featured products ---->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-detail.php"><img src="Photo/cream converse.jpg" alt=""></a>
                <a href="product-detail.php"><h4>Converse</h4></a>        
            </div>
            <div class="col-4">
                <img src="Photo/black nike.jpg" alt="">
                <h4>Nike Black Sneaker</h4>
            </div>
            <div class="col-4">
                <img src="Photo/stylish sport.jpg" alt="">
                <h4>Stylish Sport Shoe</h4>
            </div>
            <div class="col-4">
                <img src="Photo/orange nike.jpg" alt="">
                <h4>Brown Nike Sneaker</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="Photo/black leather boot.jpg" alt="">
                <h4>Black Leather Boot</h4>
            </div>
            <div class="col-4">
                <img src="Photo/gray jordan.jpg" alt="">
                <h4>Gray Jordan</h4>
            </div>
            <div class="col-4">
                <img src="Photo/white black.jpg" alt="">
                <h4>White sneaker</h4>
            </div>
            <div class="col-4">
                <img src="Photo/cream converse.jpg" alt="">
                <h4>Converse</h4>
            </div>
        </div>

        
    </div>
<!------- offer ------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="Photo/air jordan.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on New Look</p>
                    <h1>Air Jordan</h1>
                    <small>Air Jordan is a line of basketball shoes produced by Nike, Inc. Related apparel and accessories are marketed under Jordan Brand. The first Air Jordan shoe was produced for basketball player Michael Jordan during his time with the Chicago Bulls in late 1984 and released to the public on April 1, 1985.</small>
                    <br><a href="cart.php" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>
<!--brands-->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="Logo/adidas logo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="Logo/nike logo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="Logo/vans logo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="Logo/converse logo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="Logo/caliber logo.png" alt="">
                </div>
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
</body>
</html>