
<!DOCTYPE html>
<?php
?>
<html lang="en">
    <head>
	<link rel="shortcut icon" type="x-icon" href="images-coffeeShop/coffeebean.png">
        <meta charset="UTF-8">
        <title>All Products - Coffee Beanz | Ecommerce Website Design</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

    

        <div class="header">
        <div class="container">
        <div class="navbar">
            <div class="logo"></div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
		    <li><a href="">Account</a></li>
		    <li><a href="cart.php">Cart</a></li>
                </ul>
                <div class="nav-cart">
            </nav>
            
           <center><img scr="images-coffeeShop/menu.png" class="menu-icon" onclick="menutoggle()"></center>
        </div>
        </div>
</div>
<div class="row">
            
            <div class="col-5">
                

	    </div>

          <div class="content">
                <h1 style="text-align:center;">Contact Us</h2>

            </div>
            <div class="container-3">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>1045 Mitchell Road,<br>Chicago,IL,<br>60127</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>133-685-1900</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>CoffeeBeanz@outlook.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
			    <input type="text" name="" required="required">
		
			    <span>Full Name</span>
				<br>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type your message...</span>
                        </div>
                        <div class="inputBox">
                        <input type="submit" name="" value="send">

                        </div>
                    </form>

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>

