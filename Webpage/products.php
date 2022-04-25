<!DOCTYPE html>
<?php
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>All Products - Coffee Beanz | Ecommerce Website Design</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    </head>
    <body>

    

       
        <div class="container">
        <div class="navbar">
            <div class="logo">
                <img scr="images/Logo.jpg" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Account</a></li>
                </ul>
            </nav>
            <img scr="images-coffeeShop/cart.png" width="30px" height="30px">
            <img scr="images-coffeeShop/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        </div>
   

<div class="small-container">
<div class="row row-2">
    <h2>All Products<h2>
    <select>
        <option>Default Sorting</option>
        <option>Sort by price</option>
        
    </select>
</div>
    <div class="row">
        <div class="col-4">
            <img src="images-coffeeShop/Arabica.JPG">
            <a href="productDetails.php">Arabica Coffeee Beans</a>
            <p>$19.99-$25.99</p>
            
        
        </div>
        <div class="col-4">
            <img src="images-coffeeShop/Excelsa.JPG">
            <h4>Excelsa Coffee Beans</h4>
            <p>$17.99-$22.99</p>
            
        
        </div>
        <div class="col-4">
            <img src="images-coffeeShop/Liberica.JPG">
            <h4>Liberica Coffee Beans</h4>
            <p>$22.99-$28.99</p>
            
        
        </div>
        <div class="col-4">
            <img src="images-coffeeShop/Robusta.JPG">
            <h4>Robusta Coffee Beans</h4>
            <p>$24.99-$30.99</p>
            
        
        </div>
    </div>
    
    
</div>

    

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight = "0px"){
                MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
    </script>
    </body>
</html>

