<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '                        <div class="footer-left">
                            <span class="logo">
                                <a href="index.php" title="Porto eCommerce Template">
                                    <img class="img-responsive" src="image/catalog/porto/logo_footer.png" alt="Porto eCommerce">
                                </a>
                            </span>
                        </div><!-- End .footer-left -->

                        <div class="footer-center">
                            <img src="image/catalog/porto/payments.png" class="img-responsive" alt="Payments">
                        </div><!-- End .footer-center -->

                        <div class="footer-right">
                        © Copyright 2016. All Rights Reserved.
                        </div><!-- End .footer-right -->',
      1 => '                        <div class="footer-left">
                            <span class="logo">
                                <a href="index.php" title="Porto eCommerce Template">
                                    <img class="img-responsive" src="image/catalog/porto/logo_footer.png" alt="Porto eCommerce">
                                </a>
                            </span>
                        </div><!-- End .footer-left -->

                        <div class="footer-center">
                            <img src="image/catalog/porto/payments.png" class="img-responsive" alt="Payments">
                        </div><!-- End .footer-center -->

                        <div class="footer-right">
                        © Copyright 2016. All Rights Reserved.
                        </div><!-- End .footer-right -->',
    ),
    'layout_id' => '99999',
    'position' => 'bottom',
    'status' => '1',
    'sort_order' => '',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '                            <div class="header-minicart">
                                <div class="header-contact hidden-xs">
                                    <i class="fa fa-phone"></i> +(404) 158 14 25 78
                                    <span class="separator">|</span>
                                    <a href="index.php?route=information/contact">CONTACT US</a>
                                </div><!-- End .header-contact -->
                            </div><!-- End .header-mini-cart -->',
      1 => '                            <div class="header-minicart">
                                <div class="header-contact hidden-xs">
                                    <i class="fa fa-phone"></i> +(404) 158 14 25 78
                                    <span class="separator">|</span>
                                    <a href="index.php?route=information/contact">CONTACT US</a>
                                </div><!-- End .header-contact -->
                            </div><!-- End .header-mini-cart -->',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="hidden-xs hidden-sm" style="height: 10px"></div>',
      1 => '<div class="hidden-xs hidden-sm" style="height: 10px"></div>',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '9',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '                            <div class="widget widget-block2" style="margin-top: 10px">

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                        <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                    </div>
                                </div>

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                        <div class="info-box-desc">100% money back guarantee.</div>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                        <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="owl-carousel widget-banner-slider">
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index13/ad1.jpg" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index13/ad2.jpg" alt="banner">
                                        </a>
                                    </div>
                                </div><!-- End .widget-banner-slider -->

                                <hr>
                            </div><!-- End .widget -->',
      1 => '                            <div class="widget widget-block2" style="margin-top: 10px">

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                        <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                    </div>
                                </div>

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                        <div class="info-box-desc">100% money back guarantee.</div>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                        <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="owl-carousel widget-banner-slider">
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index13/ad1.jpg" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index13/ad2.jpg" alt="banner">
                                        </a>
                                    </div>
                                </div><!-- End .widget-banner-slider -->

                                <hr>
                            </div><!-- End .widget -->',
    ),
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '0',
  ),
  5 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="row clean-row info-boxes-container info-boxes-sm">
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">FREE SHIPPING &amp; RETURN</h3>
                                    <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                    <div class="info-box-desc">100% money back guarantee.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="fa fa-life-buoy"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                    <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                </div>
                            </div>
                        </div>
                    </div>',
      1 => '<div class="row clean-row info-boxes-container info-boxes-sm">
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">FREE SHIPPING &amp; RETURN</h3>
                                    <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                    <div class="info-box-desc">100% money back guarantee.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="fa fa-life-buoy"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                    <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                </div>
                            </div>
                        </div>
                    </div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
  ),
  6 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="sidebar" style="padding-bottom: 10px">
                            <div class="widget widget-shop2">
                                <h3 class="widget-title"><i class="fa fa-reorder"></i>  Shop CATEGORIES
                                </h3><!-- End .widget-title -->
                                <div class="category-shop-widget">
                                    <ul class="product-categories">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Home &amp; Garden</a></li>
                                        <li><a href="#">Motors</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">buy Porto!</a></li>
                                    </ul>
                                </div>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title"><i class="fa fa-star"></i> DEDICATED SERVICE</h3>

                                <div class="feature-box-widget">
                                    <p>Consult our specialists for help with an order, customization, or design advice.</p>
                                    <a href="">Get in Touch &gt;</a>
                                </div><!-- End feature-box-widget -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title"><i class="fa fa-reply"></i> Free Returns</h3>
                                <div class="feature-box-widget">
                                    <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                                    <a href="">Returns Policy &gt;</a>
                                </div><!-- End feature-box-widget -->
                            </div><!-- End .widget -->

                        </div>',
      1 => '<div class="sidebar" style="padding-bottom: 10px">
                            <div class="widget widget-shop2">
                                <h3 class="widget-title"><i class="fa fa-reorder"></i>  Shop CATEGORIES
                                </h3><!-- End .widget-title -->
                                <div class="category-shop-widget">
                                    <ul class="product-categories">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Home &amp; Garden</a></li>
                                        <li><a href="#">Motors</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">buy Porto!</a></li>
                                    </ul>
                                </div>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title"><i class="fa fa-star"></i> DEDICATED SERVICE</h3>

                                <div class="feature-box-widget">
                                    <p>Consult our specialists for help with an order, customization, or design advice.</p>
                                    <a href="">Get in Touch &gt;</a>
                                </div><!-- End feature-box-widget -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title"><i class="fa fa-reply"></i> Free Returns</h3>
                                <div class="feature-box-widget">
                                    <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                                    <a href="">Returns Policy &gt;</a>
                                </div><!-- End feature-box-widget -->
                            </div><!-- End .widget -->

                        </div>',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '0',
  ),
  7 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '                    <h3 class="slider-title">
                        <span class="inline-title">Featured BRANDS</span>
                        <span class="line"></span>
                    </h3>
                    <div class="owl-carousel brands-carousel2 nav-ralign">
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                    </div><!-- End brands-carousel -->
<div class="lg-margin"></div>',
      1 => '                    <h3 class="slider-title">
                        <span class="inline-title">Featured BRANDS</span>
                        <span class="line"></span>
                    </h3>
                    <div class="owl-carousel brands-carousel2 nav-ralign">
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                        <div class="brand">
                            <a href="#"><img src="image/catalog/porto/index13/brand7.jpg" alt="Brand name"></a>
                        </div><!-- End .brand -->
                    </div><!-- End brands-carousel -->
<div class="lg-margin"></div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '5',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>