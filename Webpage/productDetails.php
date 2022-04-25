
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
                <img scr="images-coffeeShop/Logo.png" width="125px">
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
  
<!---- single product details-------->     
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images-coffeeShop/Arabica.JPG" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images-coffeeShop/ArabicaDrink1.JPG" width="100%" class="small-img">
		    </div>
		
                    <div class="small-img-col">
                        <img src="images-coffeeShop/ArabicaDrink2.JPG" width="100%" class="small-img">
		    </div>
		<div class="small-img-col">
                        <img src="images-coffeeShop/ArabicaDrink3.jpg" width="100%" class="small-img">
                    </div>
                   
                </div>
            </div>
            <div class="col-2">
                <p>Home / Arabica Coffee Beans</p>
                <h1> Arabica Coffee beans</h1>
                <h4>$19.99-$25.99</h4>
                <select>
                    <option>Select Size</option>
                    <option>16 oz</option>
                    <option>32 oz</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to cart</a>
                <h3>Product Details <i class="fa fa-ident"></i></h3>
                <br>
                <p>Add information about the coffee</p>
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
    <script>
        var productImg = document.getElementById("productImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function(){
            productImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            productImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            productImg.src = SmallImg[2].src;
        }
        </script>
    </body>
</html>
