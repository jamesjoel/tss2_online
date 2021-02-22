<?php
include ("admin/db.php");
include("header.php");
$query = "SELECT * FROM product_tbl";
$result = mysqli_query($con, $query);

$query2= "SELECT * FROM sale_tbl";
$result2 = mysqli_query($con, $query2); 

$data2 = mysqli_fetch_assoc($result2);

// print_r($data2);

//2021-02-23

// 23 Feb 2021

$originalDate = $data2['date'];
$newDate = date("d-F-Y", strtotime($originalDate));

?>

<script type="text/javascript">
    var myTime = "<?php echo $newDate; ?>";
</script>
<link rel="stylesheet" type="text/css" href="css/timer.css">
    <!-- Features Section Begin -->
    <div class="jumbotron jumbotron-fluid bg-danger">
        <div class="container">
            <h2 class="text-light">Upcoming Sale</h2>
            <h1 class="text-light"><?php echo $data2['sale_name']; ?></h1>
            <h4 class="text-light">Sale Start in</h4>

            
            <div id="timer">
              <div id="days"></div>
              <div id="hours"></div>
              <div id="minutes"></div>
              <div id="seconds"></div>
            </div>




        </div>
    </div>


    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="img/icons/f-delivery.png" alt="">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/icons/coin.png" alt="">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".dresses">Dresses</li>
                            <li data-filter=".bags">Bags</li>
                            <li data-filter=".shoes">Shoes</li>
                            <li data-filter=".accesories">Accesories</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                
                <?php while($data=mysqli_fetch_assoc($result)){
                    $p = $data['product_price'];
                    $d = $data['discount'];

                    $new_price = $p * $d / 100;

                    $new_price = $p - $new_price;

                    /*
                            $p = 100;
                            $d = 15;

                            $p = 85;

                    */

                 ?>
                <div class="col-lg-3 col-sm-6 mix all dresses bags">
                    <div class="zoom-left">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img class="img_01" data-zoom-image="admin/product_images/<?php echo $data['product_img'] ?>" src="admin/product_images/<?php echo $data['product_img'] ?>" style="height: 280px !important;"></a>
                            <div class="p-status sale">
                                <b class="sale"><?php echo $data['discount']; ?>% off</b>
                            </div>
                        </figure>
                        <div class="product-text">
                            <h6><?php echo $data['product_name']; ?></h6>
                            <p><del>$<?php echo $data['product_price']; ?></del></p>
                            <p>$<?php echo $new_price; ?>.00</p>

                        </div>
                    </div>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2019 <br />#lookbook</h2>
                        </div>
                        <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                            aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                            lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                            viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                            Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                            sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                            metus nec scelerisque. s</p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="img/lookbok.jpg" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

<?php
include("footer.php");
?>
<script type="text/javascript" src="js/jquery.ez-plus.js"></script>
<script type="text/javascript" src="js/web.js?m=20100203"></script>
<script type="text/javascript" src="js/timer.js"></script>