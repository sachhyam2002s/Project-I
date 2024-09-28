<?php require_once 'inc/header.php';?>

    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="web.php"><img src="Logo/New_Look_logo.png" alt="" width="50px"></a>
            </div>
        </div>
    </div>
    </div>
<!--account page-->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="Photo/store.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" action="login.php" method="POST">
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <button type="submit" class="btn" name="login">Login</button>
                            <a href="">Forgot Password</a>
                        </form>
                        <form id="RegForm" action="register.php" method="POST">
                            <input type="text" placeholder="Username" name="username">
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <button type="submit"  name="submit" class="btn">Register</button>
                        </form>
                    </div>
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

<!--js for toggle form-->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>
</body>
</html>