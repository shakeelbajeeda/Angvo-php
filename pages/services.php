<?php require_once('header.php') ?>
<?php
$cards = [
    ['title' => 'Website Hosting', 'description' => 'Website Hosting For 1 Year '],
    ['title' => 'UK Physical Address', 'description' => 'Establish your company with a premium registered office address in London and instantly add credibility and prestige to your brand. Build your business in the heart of London while maintaining your anonymity and privacy. '],
    ['title' => 'UK LTD Formation', 'description' => 'The name of your company with which you want to take a start, you can have an instant check for its availability. You will have it in easy and affordable prices, we offer you safe and secure payment methods. And, not more than 3 hours it takes to get your important message in your inbox.
    You’ll get a ‘certificate of incorporation’. This confirms the company legally exists and shows the company number and date of formation.'],
    ['title' => 'US LLC Formation', 'description' => '*LLC *Unique Address Guaranteed *Mail Forwarding *Quick EIN (Express 7 Business Days) *Sales Tax Permit (Without $500 bond) *US Phone Number *Bank Account *Service Charges'],
    ['title' => 'A to Z Amazon Account', 'description' => 'We are experts in resolving problems which a newbie face for having an Amazon account. Just you have to create a business plan and stick to that rest of the complexities regarding complexities of technology. We are there to resolve it for you. We will help you to have an Amazon account. It absolutely your choice that whether you want to become an individual seller or professional seller on the world’s largest online market we will help you to show your potential'],
    ['title' => 'VPS', 'description' => 'ou will have the instant access Remote Desktop Protocol with full SSD and Intel performance VPS. Other than this, our services allow you to have full root admin access.'],
    ['title' => 'Product Photography', 'description' => 'Appearance of your product matters the most for attracting customers. And in the online businesses when you have portrayed your product in the finest form then your customers give a click to your product for buying. We exhibit your product in the most fantastic way that not any visitor ignore your product. We offer product photography services to make your product different from others in the market.'],
    ['title' => 'WALMART Account', 'description' => 'WALMART Account'],
    ['title' => 'US LLC Formation', 'description' => '*LLC *Unique Address Guaranteed *Mail Forwarding *Quick EIN (Express 7 Business Days) *Sales Tax Permit (Without $500 bond) *US Phone Number *Bank Account *Service Charges'],
]
?>
<style>
    .bg-img {
        background: url('../images/bg-banner.jpg');
        height: 330px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 0.7;
    }

    .card-style {
        height: 480px;
    }

    .card-heading {
        min-height: 103px;
        max-height: 103px;
        overflow: hidden;
    }

    .description {
        height: 259px;
        overflow: hidden;
    }
</style>
<div class="col-12">
    <div class="bg-img"></div>
</div>
<div class="container-fluid" style="background:#0e2b5c!important;padding-top:90px;padding-bottom: 100px;">
    <p class="text-white display-4 text-center pb-5">View All Services</p>
    <div class="container">
        <div class="row">
            <?php foreach ($cards as $card) { ?>
                <div class="col-lg-3 pt-4">
                    <div class="card  text-center card-style">
                        <h2 class="card-title pt-4 card-heading pb-0 mb-0"><a href="#" class="text-decoration-none text-black"><?php echo $card['title'] ?></a></h2>
                        <div class="card-body">
                            <p class="card-text text-justify opacity-75 description"><?php echo $card['description'] ?></p>
                            <button class="btn btn-primary py-3 px-4 card-btn">Buy Now</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require_once('footer.php') ?>