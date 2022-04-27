<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="shortcut icon" type="x-icon" href="images-coffeeShop/coffeebean.png">
        <meta charset="UTF-8">
        <title>Coffee Beanz</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    </head>
    <body>

        <div class="header">

       
        <div class="container">

        
        <div class="navbar">
            <div class="logo"></div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    
                    <li><a href="contact.php">Contact</a></li>
		    <li><a href="">Account</a></li>
		    <li><a href="cart.php">Cart</a></li>
                </ul>
		<div class="nav-cart"></div>
            <img scr="images-coffeeShop/menu.png" class="menu-icon" onclick="menutoggle()">
	    </nav>
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
