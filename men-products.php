<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Men's Watches | Watch Hunt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>

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
<!--                            <input id="searchBar" type="search" placeholder="Search" onkeyup="searchFunction()">-->
<!--                            <i class="fa fa-search" aria-hidden="true"></i>-->
                            <input id="keyword" type="search" placeholder="Search" name="keyword" value="">
                            <input type="submit" onclick="search()" value="search">
                        </ul>
                    </div>
                    
                </nav>
                <a href =""><img src="images/cart1.png" width="50px" height="40px"> </a>
            </div> 
        </div>

<!---------- featured products-------->
    <div class="small-container">
        
        <div class="row row-2">
            <h2>Men's Watches</h2>
            <select id="fid" onchange="filterQuery();">
                <option >Filter</option>
                <option value="1">Filter by price(Under $50)</option>
                <option value="2">Filter by price($50-$150)</option>
                <option value="3">Filter by price(More than $150)</option>
                <option value="4">Filter by Rating(4+)</option>
                <option value="5">Filter by Rating(3+)</option>
            </select>
            <select id="oid" onchange="sortQuery();">
                <option>Default</option>
                <option value="1">Sort by price(Low to High)</option>
                <option value="2">Sort by price(High to Low)</option>
                <option value="3">Sort by rating</option>
                <option value="4">Sort by discount</option>
            </select>
        </div>

        <div class="row" id="list">

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
            url: "men-list.php",
            // data: '',
            success: function(data){
                const watches = $( "#list");
                //console.log(data);
                var Productlist = JSON.parse(data);

                for(var i in Productlist){

                    var interHtml = '<div class="col-4"> <a href = ' + Productlist[i].detail_url + '><img src= ' + Productlist[i].img_url + '></a>';
                    interHtml += '<h4>'+ Productlist[i].name+'</h4>';
                    interHtml += '<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>';
                    interHtml += '<p>$' + Productlist[i].price + '</p></div>';
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