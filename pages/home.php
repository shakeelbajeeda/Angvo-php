<?php
// $title = "My custom page title";
require_once('header.php');
require_once('../php-controllers/database.php');
$sql = "select * from products";
$cards = $result = $db->query($sql)->fetchAll();
// die($_SESSION['msg']);
// [
//     ['icon' => 'fa fa-map-marker', 'title' => 'UK Physical <br>Address'],
//     ['icon' => 'fa fa-plus', 'title' => 'UK LTD Formation'],
//     ['icon' => 'fa fa-plus', 'title' => 'US LLC <br>Formation'],
//     ['icon' => 'fa fa-amazon', 'title' => 'A to Z Amazon<br> Account'],
//     ['icon' => 'fa fa-server', 'title' => 'VPS<br><br>'],
//     ['icon' => 'fa fa-star', 'title' => 'WALMART Account<br>'],
//     ['icon' => 'fa fa-handshake-o', 'title' => '3 PL Services<br><br>'],
//     ['icon' => 'fa fa-university', 'title' => 'Accounting<br>Package<br>'],
//     ['icon' => 'fa fa-wrench', 'title' => 'Amazon <br> Tools<br>'],
//     ['icon' => 'fa fa-flash', 'title' => 'Reinstate Services<br>'],
//     ['icon' => 'fa fa-university', 'title' => 'UK VAT Registration<br>'],
//     ['icon' => 'fa fa-registered', 'title' => 'UK Trademark<br><br>'],
//     ['icon' => 'fa fa-university', 'title' => 'Virtual Bank<br> Accounts<br>'],
//     ['icon' => 'fa fa-address-card-o', 'title' => 'UK/US Physical<br><br>'],
//     ['icon' => 'fa fa-list', 'title' => 'Listing creation <br>and Optimization'],
//     ['icon' => 'fa fa-search', 'title' => 'Product Research<br><br>'],
// ];
$testimonials = [
    ['title' => 'Mehar Sahib', 'post' => '-SEO', 'description' => '  I can surely that their teachings got me out of many troubles. Sometimes I got really
    puzzled when I fell my account was not working in a proper way. Angvo sorted out my'],
    ['title' => 'Abdul Waheed', 'post' => 'Senior Web Developer', 'description' => ' I can surely that their teachings got me out of many troubles. Sometimes I got really
    puzzled when I fell my account was not working in a proper way. Angvo sorted out my'],
    ['title' => 'Akhlaq Ahmed', 'post' => 'Web Developer', 'description' => 'In difficult times, when you find someone who can get you out of the problem and shows you
    the clear path to explore then there you find the opportunity. I found the one'],
    ['title' => 'Shakeel Ahmad', 'post' => 'Web Developer', 'description' => 'Now I do not have to face that panic which I used to bear in the start of my business.
    Things are good now because of Angvo. Before contacting this company,'],

];

?>
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/img-1.jpg" alt="Los Angeles" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="images/img-2.jpg" alt="Chicago" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="images/img-3.jpg" alt="New York" class="d-block w-100">
        </div>
    </div>
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<div class="col-md-12 pb-5 text-center" style="background:#182c53;">
    <div class="container">
        <h1 class="text-white text-center pt-5">One-Stop-Shop Services</h1>
        <p class=" display-5 text-center text-white">For Amazon <span class="text-warning">Sellers</span></p>
        <p class="text-white text-center fs-3">Our Services</p>
        <a href="add_product.php" class="btn btn-primary hoverable">Add New Product</a>
        <div class="row">

            <?php
            foreach ($cards as $card) {
            ?>
                <div class="col-md-3">
                    <a href="" class="text-decoration-none  text-dark">
                        <div class="card  text-center hoverable my-3">
                            <div class="mt-5">
                                <i class="<?php echo $card['icon'] ?>  fs-1 card-icon  align-middle"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text user-select-none fs-3"><?= $card['title'] ?></p>

                                <p class="user-select-none">Buy Now</p>
                            </div>
                        </div>
                    </a>

                </div>

            <?php } ?>
        </div><br>
        <a href="angvo-services.html" class="btn btn-primary hoverable main-btn">View All Services <i class="fa fa-arrows-h"></i></a>
    </div>
</div><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="images/men-walk.jpg" width="100%" class="text-center">
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <p class="display-5 opacity-75">Perfect Solution Makes</p>
                <p class="display-4 "><strong>A Successful<span class="text-warning">History</span></strong> </p>
                <br>
                <p class="h4 opacity-75">Something knows About Our Company</p>
                <hr>
                <p class="opacity-75 ">We want our nation to become strong enough to compete in the arena of
                    International market. That can only happen when we will have the familiaity with the new trends
                    trade. We develop opportunities for people who have urge in them to excel in their lives. We
                    provide them a direction which leads them to success. Take a step forward and grab unlimited
                    opportunities.</p>
            </div>
        </div>
    </div>
</div><br><br>
<div class="container">
    <div class="row py-5">
        <div class="col-md-6">
            <img src="images/amazon-img.jpg" width="100%">
        </div>
        <div class="col-md-6">
            <div>
                <p class="display-5 opacity-50">Get A Quote</p>
                <p class="display-4"><strong>Free</strong> <span class="text-danger">Consultations</span></p>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label h4">Full Name Here</label>
                        <input type="text" class="form-control" id="name" placeholder="eg. Shakeel Ahmad">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label h4">Contact Number</label>
                        <input type="text" class="form-control" id="contact" placeholder="eg. 0301-4962381">
                    </div>
                    <div class="mb-3">
                        <label for="discussion" class="form-label h4">I Would Like To Discuss</label>
                        <input type="text" class="form-control" id="discussion" placeholder="I'm Talking About">
                    </div>
                    <div class="form-group">
                        <label for="comment" class="form-label h4">Leave A Message</label>
                        <textarea class="form-control" rows="5" cols="4" id="comment" placeholder="Write Message"></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary pull-right hoverable">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12" style="background: #eef3f9;">
    <div class="container">
        <div class="text-center py-5">
            <p class="display-4 opacity-75">How We Works</p>
            <p class="display-3"><strong>Customer</strong> <span class="text-warning">Reviews</span></p>
            <p class="h4 opacity-75">knows About Our Customer Say</p>
        </div>
        <div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <?php $testimonial;
                for ($i = 0; $i < count($testimonials); $i++) {
                    $testimonial = $testimonials[$i];
                ?>
                    <div class="testimonial">
                        <h3 class="title"><?php echo $testimonial['title'] ?>
                            <span class="post"><?= $testimonial['post'] ?></span>
                        </h3>
                        <p class="description">
                            <?php echo $testimonial['description'] ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#testimonial-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });
</script>
<script>
    $(document).addEventListener('DOMContentLoaded', () => {
        $('.alert').alert()
    })
</script>


<?php require_once('footer.php'); ?>