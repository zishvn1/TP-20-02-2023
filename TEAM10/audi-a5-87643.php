
        <?php

        

    
           session_start();

           include('connect.php');


if (!isset($_SESSION[ 'id' ])) {
    header('Location:adminlogin.php');
}
if (!isset($_SESSION[ 'cart' ])) {
    $_SESSION[ 'cart' ] = array();
}
unset($_SESSION['qty_array']);

$cars_id = mysqli_insert_id($con);
$currentcar = '44';
$productsql = 'SELECT * FROM cars1 ';
$cars_product = $con->query($productsql);




?>
        

        <!DOCTYPE html>
<html>

<head>
    <title>Audi A5 - Car Details</title>
    <link href='/TEAM10/css/style.css' rel='stylesheet'>


</head>
<style>
    /*Product information CSS*/

    .right-column {
        width: 50%;
        margin-top: 60px;
    }

    .product-description {
        border-bottom: 1px solid white;
        margin-bottom: 20px;
    }

    .product-description span {
        font-size: 52px;
        color: #358ED7;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .product-description h1 {
        font-weight: 300;
        font-size: 52px;
        color: #43484D;
        letter-spacing: -2px;
    }

    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: #86939E;
        line-height: 24px;
    }

    /* Product Color */
    .product-color {
        margin-bottom: 30px;
    }


    /* Product Price */
    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: black;
        margin-right: 20px;
    }

    .cart-btn {
        display: inline-block;
        background-color: blue;
        border-radius: 6px;
        border: 2px black;
        font-size: 20px;
        color: black;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }

    .cart-btn:hover {
        background-color: red;
    }

    /*Slideshow CSS*/



    /* CSS needed to position the left and right arrows */
    .containerIndi {
        position: absolute;
        top: 100px;
        left: 100px;
        width: 55%;
    }

    .containerDetails {
        max-width: 700px;
        width: 100%;
        height: 700px;
        margin-left: 170px;
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        margin-top: -75px;

    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 45%;
        width: auto;
        padding: 20px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 30px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position of the next button to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* hover of next/previous buttons */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Thumbnail */
    .column {
        float: left;
        width: 16.66%;
    }

    .thumbnail {
        opacity: 0.6;
    }

    .active,
    .thumbnail:hover {
        opacity: 1;
    }

    img {
        width: 100%;
    }
</style>

<body>

    <?php
     echo include('/xampp/htdocs/TEAM10/navbar.php');?>
    <div class='right-column'>
        <div class='containerIndi'>
            <div class='productSlides'>
                <img src='/TEAM10/images/audi_a5_grey_1.jpg' style='width:100%'>
            </div>
            <div class='productSlides'>
                <img src='/TEAM10/images/audi_a5_grey_2.jpg' style='width:100%'>
            </div>
            <div class='productSlides'>
                <img src='/TEAM10/images/audi_a5_grey_3.jpg' style='width:100%'>
            </div>
            <div class='productSlides'>
                <img src='/TEAM10/images/audi_a5_grey_4.jpg' style='width:100%'>
            </div>
            <div class='productSlides'>
                <img src='/TEAM10/images/audi_a5_grey_5.jpg' style='width:100%'>
            </div>       
            <div class='productSlides'>
                <img src='/TEAM10/images/audi_a5_grey_6.jpg' style='width:100%'>
            </div> 
            <a class='prev' onclick='plusSlides(-1)'> ❮ </a>
            <a class='next' onclick='plusSlides(1)'> ❯ </a>
            <div class='caption-container'>
                <p id='caption'></p>
            </div>
            <div class='row'>
                <div class='column'>
                    <img class='thumbnail cursor' src='/TEAM10/images/audi_a5_grey_1.jpg' style='width:100%' onclick='currentSlide(1)'>
                </div>
                <div class='column'>
                    <img class='thumbnail cursor' src='/TEAM10/images/audi_a5_grey_2.jpg' style='width:100%' onclick='currentSlide(2)'>
                </div>
                <div class='column'>
                    <img class='thumbnail cursor' src='/TEAM10/images/audi_a5_grey_3.jpg' style='width:100%' onclick='currentSlide(3)'>
                </div>
                <div class='column'>
                    <img class='thumbnail cursor' src='/TEAM10/images/audi_a5_grey_4.jpg' style='width:100%' onclick='currentSlide(4)'>
                </div>
                <div class='column'>
                    <img class='thumbnail cursor' src='/TEAM10/images/audi_a5_grey_5.jpg' style='width:100%' onclick='currentSlide(5)'>
                </div>
                <div class='column'>
                    <img class='thumbnail cursor' src='/TEAM10/images/audi_a5_grey_6.jpg' style='width:100%' onclick='currentSlide(5)'>
                </div>
            </div>
        </div>
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName('productSlides');
                let dots = document.getElementsByClassName('thumbnail');
                let captionText = document.getElementById('caption');
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none';
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(' active', '');
                }
                slides[slideIndex - 1].style.display = 'block';
                dots[slideIndex - 1].className += ' active';
                captionText.innerHTML = dots[slideIndex - 1].alt;
            }
        </script>
    </div>
    </div>
    <!-- Product Description -->
    <div class='containerDetails'>
        <div class='product-description'>
            <span>Audi A5 </span>
            <p><strong>Year:</strong> 2019</p>

            <p><strong>Total Price:</strong> 34256</p>
            <p><strong>Year:</strong> 86514</p>
                <p><strong>Fuel Type:</strong> Petrol</p>
                <p><strong>Color:</strong> Grey</p>
                <p><strong>BHP:</strong> 143</p>
                <p><strong>Drive Type:</strong> Automatic</p>
                <p><strong>Quantity:</strong> 6</p>
                <p><strong>Mileage:</strong> 87643</p>

                <?php if ($row = mysqli_fetch_assoc( $cars_product)) { ?>
                    <div class='vidbox'>
                        <div class='card'>

    
    
                            <form method='post' action='AddToBasket.php?action=add&cars_id=<?php  echo 44;?> '> 
                                <input type=hidden name='hiddenProductMake' value='<?php echo 'Audi'; ?>'>
                                <input type=hidden name='hiddenProductModel' value='<?php echo 'A5'; ?>'>
                                <input type=hidden name='hiddenProductPrice' value='<?php echo 34256; ?>'>
                                <input type=submit class='submitButton' name='addToBasket' value='Add To Basket' />
                            </form>
                        </div>
                    </div>
                <?php
                }
                ?>
                
           

            
        </div>
    </div>
    <?php include('/xampp/htdocs/TEAM10/footer.php');?>

</body>


               
        