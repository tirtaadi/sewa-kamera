<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>D'Cameras</title>
</head>
<body>

    <!-- ------- Navbar ------ -->
    
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- account -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/gambar1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>
                        <form id="RegForm">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="small-container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <P>Download App for Android and IOS Mobile Phone</P>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="">
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora modi optio obcaecati accusamus </P>
                </div>
                <div class="footer-col-3">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
                <p class="copyright">Copyright 2020 | Kelompok 14</p>
        </div>
    </div>
    
<!-- CSS -->
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .body{
        font-family: 'Poppins', sans-serif;
    }
    .navbar {
        display: flex;
        align-items: center;
        padding: 20px;
    }
    nav{
        flex: 1;
        text-align: right;
    }
    nav ul {
        display: inline-block;
        list-style-type: none;
    }
    nav ul li{
        display: inline-block;
        margin-right: 20px;
    }
    a{
        text-decoration: none;
        color: #555;
    }
    p{
        color: #555;
    }
    .container {
        max-width: 1300px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }
    .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .col-2 {
        flex-basis: 50%;
        min-width: 300px;
    }
    .col-2 img {
        max-width: 170%;
        padding: 50px 0 ;
    }
    .col-2 h1 {
        font-size: 50px;
        line-height: 60px;
        margin: 25px 0;
    }
    .btn {
        display: inline-block;
        background: #ff523b;
        color: #fff;
        padding: 8px 30px;
        margin: 30px 0;
        border-radius: 30px;
        transition: background 0.5s;
    }
    .btn:hover {
        background: #563434;
    }
    .header {
        background: radial-gradient(#fff,#ffd6d6);
    }
    /* .header .row{
        margin-top: 70px ;

    } */
    .categories{
        margin: 70px 0;
    }
    .col-3{
        flex-basis: 30%;
        min-width: 250px;
        margin-bottom: 30px;
    }
    .col-3 img{
        width: 100%;
    }
    .small-container{
        max-width: 1080px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }
    .title{
        text-align: center;
        margin: 0 auto 80px;
        position: relative;
        line-height: 60px;
        color: #555;
    }
    .title::after{
        content: '';
        background: #ff523b;
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    .rating .fa{
        color: #ff523b;
    }
    testimonial{
        padding-top: 100px;
        margin: 70px 0;
    }
    .testimonial .col-3{
        text-align: center;
        padding: 40px 20px;
        box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.5s;
    }
    .testimonial .col-3 img{
        width: 50px;
        margin-top: 20px;
        border-radius: 50%;
    }
    .testimonial .col-3:hover{
        transform: translateY(-10px);
    }
    .fa.fa-quote-left{
        font-size: 34px;
        color: #ff523b;
    }
    .col-3 p{
        font-size: 12px;
        margin: 12px 0;
        color: #777;
    }
    .testimonial .col-3 h3{
        font-weight: 600;
        color: #555;
        font-size: 16px;
    }
    .footer{
        background: #000;
        color: #8a8a8a;
        font-size: 14px;
        padding: 60px 0 20px;
    }
    .footer p{
        color: #8a8a8a;
    }
    .footer h3{
        color: #fff;
        margin-bottom: 20px;
    }
    .footer-col-1 .footer-col-2 .footer-col-3{
        min-width: 250px;
        margin-bottom: 20px;
    }
    .footer-col-1{
        flex-basis: 30%;
    }
    .footer-col-2{
        float: 1;
        text-align: center;
    }
    .footer-col-2 img{
        width: 180px;
        margin-bottom: 20px;
    }
    .footer-col-3{
        flex-basis: 12%;
        text-align: center;
    }
    ul{
        list-style-type: none;
    }
    .app-logo{
        margin-top: 20px;
    }
    .app-logo img{
        width: 140px;
    }
    .footer hr{
        border: none;
        background: #b5b5b5;
        height: 1px;
        margin: 20px;
    }
    .copyright{
        text-align: center;
    }
    .menu-icon{
        width: 28px;
        margin-left: 20px;
        display: none;
    }


    /* All Product */
    .row-2{
        justify-content: space-between;
        margin: 100px auto 50px;
    }
    select{
        border: 1px solid #ff523b;
        padding: 5px;
    }
    select:focus{
        outline: none;
    }
    h4{
        color: #000;
        font-weight: normal;
        font-size: 16px;
    }
    .col-4{
        flex-basis: 25%;
        padding: 10px;
        min-width: 250px;
        margin-bottom: 50px;
        transition: transform 0.5s;
    }
    .col-4 img{
        width: 100%;
    }
    .col-4 p{
        color: #ff523b;
        font-size: 14px ;
        font-weight: 600;
    }
    .col-4:hover{
        transform: translateY(-5px);
    }
    .page-btn{
        margin: 0 auto 80px;
    }
    .page-btn span{
        display: inline-block;
        border: 1px solid #ff523b;
        margin-left: 10px;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
    }
    .page-btn span:hover{
        background: #ff523b;
        color: #fff;
    }

    /* product detail */
    .single-product{
        margin-top: 80px;
    }
    .single-product col-2 img{
        padding: 0;
    }
    .single-product col-2{
        padding: 20px;
    }
    .single-product h4{
        margin: 20px 0;
        font-size: 22px;
        font-weight: bold;
        color: #555;
    }
    .single-product select{
        /* display: block; */
        padding: 10px;
        margin-top: 20px;
    }
    .single-product input{
        width: 50px;
        height: 40px;
        padding-left: 10px;
        font-size: 20px;
        margin-top: 20px;
        margin-right: 50px;
        border: 1px solid #ff523b;
    }
    input:focus{
        outline: none;
    }

    /* cart */
    .cart-page{
        margin: 80px auto;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    .cart-info{
        display: flex;
        flex-wrap: wrap;
    }
    th{
        text-align: left;
        padding : 5px;
        color: #fff;
        background: #ff523b;
        font-weight: normal;
    }
    td{
        padding: 10px  5px;
    }
    td input{
        width: 40px;
        height: 30px;
        padding: 5px;
    }
    td a{
        color: #ff523b;
        font-size: 12px;
    }
    td img{
        width: 80px;
        height: 80px;
        margin-right: 10px;
    }
    .total-price{
        display: flex;
        justify-content: flex-end;
    }
    .total-price table{
        border-top: 3px solid #ff523b;
        width: 100%;
        max-width: 480px;
    }
    td:last-child{
        text-align: right;
    }
    th:last-child{
        text-align: right;
    }
    /* account page */
    .account-page{
        padding: 50px 0;
        background: radial-gradient(#fff,#ffd6d6);
    }
    .form-container{
        background: #fff;
        width: 300px;
        height: 400px;
        position: relative;
        text-align: center;
        padding: 20px 0;
        margin: auto;
        box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .form-container span{
        font-weight: bold;
        padding: 0 10px;
        color: #555;
        cursor: pointer;
        width: 100px;
        display: inline-block;
    }
    .form-btn{
        display: inline-block;
    }
    .form-container form{
        max-width: 300px;
        padding: 0 20px;
        position: absolute;
        top: 130px;
        transition: transform 1s;
    }
    form input{
        width: 100%;
        height: 30px;
        margin: 10px 0;
        padding: 0 10px;
        border: 1px solid #ccc;
    }
    form .btn{
        width: 100%;
        border: none;
        cursor: pointer;
        margin: 10px 0;
    }
    form .btn:focus{
        outline: none;
    }
    #LoginForm{
        left: -300px;
    }
    #RegForm{
        left: 0;
    }
    form a{
        font-size: 12px;
    }
    #Indicator{
        width: 100px;
        border: none;
        background: #ff523b;
        height: 3px;
        margin-top: 8px;
        transform: translateX(100px);
        transition: transform 1s;
    }


    /* media query for menu */
    @media only screen and (max-width: 800px){
        nav ul{
            position: absolute;
            top: 70px;
            left: 0;
            background: #333;
            width: 100%;
            overflow: hidden;
            transition: max-height 0.5;
        }
        nav ul li{
            display: block;
            margin-right: 50px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        nav ul li a{
            color: #fff;
        }
        .menu-icon{
            display: block;
            cursor: pointer;
        }
    }
    </style>

    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- js for toogle form -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
            function register(){
                RegForm.style.transform="translateX(0px)";
                LoginForm.style.transform="translateX(0px)";
                Indicator.style.transform="translateX(100px)";

            }
            function login(){
                RegForm.style.transform="translateX(300px)";
                LoginForm.style.transform="translateX(300px)";
                Indicator.style.transform="translateX(0px)";
            }
    </script>
</body>
</html>