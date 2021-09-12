<?php
   include("conn/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Watch Hunt |  Watches | E-commerce website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js">-->
<!--    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>

    <div class="header">
        
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" width="125px"></a>
                </div>
                <nav>
                    <div class="wrapper">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="women-products.php">WOMEN</a></li>
                            <li><a href="men-products.php">MEN</a></li>
                            <li><a href="AddProduct.php">AddProduct</a></li>
                            <li><a href="">SALE</a></li>
                            <li><a href="">ACCOUNT</a></li>
                            <li><a href="">SIGN UP</a></li>
                        </ul>

                        <ul class="search-icon">
                            <input id="keyword" type="search" placeholder="Search" name="keyword" value="">

                            <input type="submit" onclick="search()" value="search">
                        </ul>

                    </div>
                </nav>
                <a href =""><img src="images/cart1.png" width="50px" height="40px"> </a>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>FOR THOSE WHO</br>LOVE TO STAND</br>OUT</h1>
                    <a href="men-products.php" class="btn">DISCOVER NOW &#8594;</a>
                </div>
                <div class="col-2 img">
                    <img src="images/couple.jpg">
                </div>
            </div>
        </div>
        
    </div>
    
<!---------- featured categories-------->
     <div class="small-container">
        <h2 class="title">Featured Categories</h2>
        <div class="categories">
            <div class="row">
                <div class="col-3">
                    <img src="images/man.jpg">
                </div>
                <div class="col-3">
                    <img src="images/woman.jpg">
                </div>
                <div class="col-3">
                    <img src="images/sale.jpg">
                </div>
            </div>
        </div>
    </div>

<!---------- featured products-------->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row" id="list">
        </div>
    </div>
<!---------- Offer section-------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/FTW4019_6.jfif" class="offer">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Watch Hunt</p>
                    <h1>Zen Smart Watch</h1>
                    <small>The Zen Smart Watch features a 40% larger AMOLED color
                     full-touch display with adjustable brightness, so everything
                     is clear as can be.</small></br>
                     <a href="Pm1.html" class="btn">Buy Now &#8594;</a>
                </div>
            </div>

        </div>
    </div>
<!---------- Footer -------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for Android and iOS</p>
                    <div class="app-logo">
                    <!----------Insert image here----------->
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.png">
                    <p>Our purpose is to provide quality Wristwatch for those who like to stand out.</p>
                </div>
                <div class="footer-col-3">
                    <h3>USEFUL LINKS</h3>
                    <ul>
                        <li>COUPONS</li>
                        <li>CONTACT US</li>
                        <li>SHIPPMENT</li>
                        <li>FAQ</li>
                        <li>TERMS</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>SOCIAL MEDIA</h3>
                    <ul>
                        <li>Twitter</li>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">© COPYRIGHT WATCH HUNT 2021, All rights reserved.</p>
        </div>
    </div>

</body>

<script>
   getList();
   function getList() {
       $.ajax({
           type: "GET",
           url: "list.php",
           // data: '',
           success: function(data){
               const watches = $( "#list");
               console.log(data);
               var Productlist = JSON.parse(data);

               for(var i in Productlist){
                   console.log(Productlist[i].detail_url)
                   var interHtml = '<div class="col-4"> <a href = ' + Productlist[i].detail_url + '><img src= ' + Productlist[i].img_url + '></a>';
                   interHtml += '<h4>'+ Productlist[i].name+'</h4>';
                   interHtml += '<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>';
                   interHtml += '<p>' + Productlist[i].price + '</p></div>';
                   // div.id=Productlist[i].id;
                   // div.interHtml=interHtml;
                   watches.append(interHtml)
               }
           },
           error: function(request){
               console.log(request);

           },

       });
   }
</script>
</html>