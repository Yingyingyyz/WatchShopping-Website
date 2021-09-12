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
    <style>
     .smart-green {
            margin-left: auto;
            margin-right: auto;
            max-width: 500px;
            background: #F8F8F8;
            padding: 30px 30px 20px 30px;
            font: 12px Arial, Helvetica, sans-serif;
            color: #666;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        .smart-green h1 {
            font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
            padding: 20px 0px 20px 40px;
            display: block;
            margin: -30px -30px 10px -30px;
            color: #FFF;
            background: #9DC45F;
            text-shadow: 1px 1px 1px #949494;
            border-radius: 5px 5px 0px 0px;
            -webkit-border-radius: 5px 5px 0px 0px;
            -moz-border-radius: 5px 5px 0px 0px;
            border-bottom: 1px solid #89AF4C;
        }

        .smart-green h1 > span {
            display: block;
            font-size: 11px;
            color: #FFF;
        }

        .smart-green label {
            display: block;
            margin: 0px 0px 5px;
        }

        .smart-green label > span {
            float: left;
            margin-top: 10px;
            color: #5E5E5E;
        }

        .smart-green input[type="text"], .smart-green input[type="email"], .smart-green textarea, .smart-green select {
            color: #555;
            height: 30px;
            line-height: 15px;
            width: 100%;
            padding: 0px 0px 0px 10px;
            margin-top: 2px;
            border: 1px solid #E5E5E5;
            background: #FBFBFB;
            outline: 0;
            -webkit-box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
            box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
            font: normal 14px/14px Arial, Helvetica, sans-serif;
        }

        .smart-green textarea {
            height: 100px;
            padding-top: 10px;
        }


        .smart-green .button {
            background-color: #9DC45F;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-border-radius: 5px;
            border: none;
            padding: 10px 25px 10px 25px;
            color: #FFF;
            text-shadow: 1px 1px 1px #949494;
        }

        .smart-green .button:hover {
            background-color: #80A24A;
        }

        .error-msg{
            color: red;
            margin-top: 10px;
        }
        .success-msg{
            color: #80A24A;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
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
                
        </div>
        
    </div>
     <form action="doAddPorduct.php" method="post" enctype="multipart/form-data" class="smart-green">
    <h1>Add Product
        <span></span>
    </h1>
    <label>
        <span>name:</span>
        <input id="pro_name" type="text" name="pro_name" class="error" placeholder="name"/>
        <div class="error-msg"></div>
    </label>

    <label>
        <span>price :</span>
        <input id="pro_price" type="text" value="" name="pro_price" placeholder="price"/>
        <div class="error-msg"></div>
    </label>

    <label>
        <span>detail_url :</span>
        <input id="pro_detail_url" type="text" value="" name="pro_detail_url" placeholder="detail_url"/>
        <div class="error-msg"></div>
    </label>

    <label>
        <span>img_url :</span>
        <input type="file" name="img" value="file">
        <div class="error-msg"></div>
    </label>
    
    <label>
        <span>rating :</span>
        <input id="pro_rating" type="text" value="" name="pro_rating" placeholder="pro_rating"/>
        <div class="error-msg"></div>
    </label>
    <label>
        <span>type :</span>
        <select name="pro_type">
        	<option value="1">Men</option>
        	<option value="2">Women</option>
        </select>
        <div class="error-msg"></div>
    </label>
    <label>
        <span>discount :</span>
        <input id="pro_discount" type="text" value="" name="pro_discount" placeholder="discount"/>
        <div class="error-msg"></div>
    </label>
    <div class="success-msg"></div>
    <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="submit"/>
    </label>
    <input type='hidden' name='csrfmiddlewaretoken' value='SfHkbL4feo1G00sJQtbO7TtLN4c2BUwa' />
</form>
<!---------- featured categories-------->
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
