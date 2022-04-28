<?php
$social_icons = [
    ['class' => 'm-1 fa fa-instagram footer-icon', 'href' => 'https://www.instagram.com/_shakeelmehar/'],
    ['class' => 'm-1 fa fa-twitter footer-icon', 'href' => 'https://twitter.com/ShakeelAhmad38'],
    ['class' => 'm-1 facebook fa fa-facebook footer-icon', 'href' => 'https://www.instagram.com/_shakeelmehar/'],
];
$navbars = [
    ['title' => 'Services', 'href' => 'services.php'],
    ['title' => 'About US', 'href' => 'about.php'],
    ['title' => 'Contact US', 'href' => 'https://wa.me/+923019115376?text=I want to contact with you through angvo.', 'target' => '_blank'],
    ['title' => 'General Complaints', 'href' => 'login.php'],
];
$footer_icons = [
    ['icon_class' => 'fa fa-map-marker footer-info', 'title' => 'Address', 'text_class' => 'text-decoration-none text-white footer-hover center f-s', 'caption' => '5th Floor Al Hafeez Heights Gulberg III,
    Lahore'],
    ['icon_class' => 'fa fa-envelope footer-info', 'title' => 'Email Us', 'text_class' => 'text-decoration-none text-white center f-s font-size-13    ', 'caption' => 'meharshakeel9114@gmail.com', 'href' => 'mailto:meharshakeel9114@gmail.com'],
    ['icon_class' => 'fa fa-phone footer-info', 'title' => 'Contact Us', 'text_class' => 'text-decoration-none text-white center f-s    ', 'caption' => '+92301-9115376', 'href' => 'tel:+92301-9115376'],
    ['icon_class' => 'fa fa-clock footer-info', 'title' => 'Opening Hour', 'text_class' => 'text-decoration-none text-white center f-s    ', 'caption' => 'Mon-Friday, 9AM-5PM',],


]
?>
<footer style="background: #182c53;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/logo-footer.png" class="p-5">
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <p class="text-white text-justify" style="padding-top: 40px;">We are here to start your business
                        on Amazon and make your efforts as profitable as possible. We do this by providing great
                        Services at an affordable price and backed up by the best customer service and support
                        available.</p>
                    <div>
                        <?php for ($i = 0; $i < count($social_icons); $i++) {
                            $social_icon = $social_icons[$i];
                        ?>
                            <a target="_blank" href="<?php echo $social_icon['href'] ?>"><i class=" <?php echo $social_icon['class'] ?>"></i></a>
                        <?php } ?>
                    </div>
                </div><br>
                <div class="col-md-4">
                    <div class="text-center">
                        <h3 class="text-white mt-4">Quick Links</h3>
                        <ul class="list-unstyled">
                            <?php foreach ($navbars as $nav) {  ?>
                                <li>
                                    <a target="<?php echo $nav['target'] ?>" href="<?php echo $nav['href'] ?>" class="text-color text-decoration-none line-height text-hover"><?php echo $nav['title'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-white mt-4">Subscribe Now</h3>
                    <p class="text-white">Please subscribe now for special<br> notifications and offers</p>
                    <form class="d-flex">
                        <input type="emial" name="email" placeholder="Enter Email Address" class="p-3" style="width:80%;">
                        <button type="submit" class="form-button" style="width:20%;"><i class="far fa-paper-plane fs-5 "></i></button>
                    </form>
                </div>
            </div>
        </div><br><br>
        <div class="col-12">
            <div class="row">
                <?php foreach ($footer_icons as $footer_icon) { ?>
                    <div class="col-md-6 col-sm-6 col-lg-3 col-xs-6">
                        <div class="row">
                            <div class="col-md-4 text-center pad-top">
                                <i class="<?php echo $footer_icon['icon_class'] ?>">
                                </i>
                            </div><br><br>
                            <div class="col-md-8 footer-hover pad-top">
                                <h4 class="title text-white footer-hover center"><?php echo $footer_icon['title'] ?></h4>
                                <p><a href="<?php echo $footer_icon['href'] ?>" class="<?php echo $footer_icon['text_class'] ?>"><?php echo $footer_icon['caption'] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <hr class="text-white">
        <div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:Design By <p class="text-warning">Shakeel Ahmad</p>
        </div>
    </div>
</footer>
<a href="https://wa.me/+923019115376?text=I want to contact with you through angvo." target="_blank"><i class="fa fa-whatsapp whatsapp text-white"></i></a>
</body>

</html>