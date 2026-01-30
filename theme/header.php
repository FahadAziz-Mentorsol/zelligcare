<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/zellig_favicon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta
      name="google-site-verification"
      content="fXeT9Xu4nPukAk04FkQg_8FTVN8XUjZVNJGmV8mSchw"
    />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="<?php wp_title(); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="site-content">
      <div id="ry-header">
        <div class="col-xs-12">
          <div
            id="ry-section-header"
            class="col-xs-12 hidden-xs hidden-sm module-43 ry-section"
          >
            <div class="col-xs-12"></div>
            <div class="col-xs-12 ry-container">
              <div class="col-xs-12 ry-content ry-flex">
                <div class="col-xs-12 col-md-2 col-lg-2 ry-left ry-logo">
                  <img
                    src="https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/zellig_new_logo.png"
                    loading="lazy"
                    alt="<?php bloginfo('name'); ?>"
                    class="img-responsive"
                    data-url="<?php echo home_url(); ?>"
                  />
                </div>
                <div class="col-xs-12 col-md-10 col-lg-10 ry-right ry-flex">
                  <div class="ry-menu">
                    <ul class="nav-menu ry-nav">
                      <li class="dropdown" role="presentation">
                        <a
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          href="<?php echo home_url('/about/'); ?>"
                          role="button"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          About<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class=" ">
                            <a href="<?php echo home_url('/about/'); ?>">Our Practice</a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo home_url('/careers/'); ?>">Careers</a>
                          </li>
                        </ul>
                      </li>
                      <li class=" " data-active>
                        <a href="<?php echo home_url('/team/'); ?>">Our Team</a>
                      </li>
                      <li class="dropdown" role="presentation">
                        <a
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          href="#"
                          role="button"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Specialties<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class=" "><a href="<?php echo home_url('/specialties/anxiety/'); ?>">Anxiety</a></li>
                          <li class=" "><a href="<?php echo home_url('/specialties/adhd/'); ?>">ADHD</a></li>
                          <li class=" "><a href="<?php echo home_url('/specialties/bipolar/'); ?>">Bipolar</a></li>
                          <li class=" ">
                            <a href="<?php echo home_url('/specialties/depression/'); ?>">Depression</a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo home_url('/specialties/insomnia/'); ?>">Insomnia</a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo home_url('/specialties/life-transitions/'); ?>">Life Transitions</a>
                          </li>
                          <li class=" "><a href="<?php echo home_url('/specialties/ocd/'); ?>">OCD</a></li>
                          <li class=" ">
                            <a href="<?php echo home_url('/specialties/trauma-ptsd/'); ?>">Trauma & PTSD</a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo home_url('/specialties/autism-neurodivergence/'); ?>"
                              >Autism & Neurodivergence</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown" role="presentation">
                        <a
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          href="#"
                          role="button"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Patient Center<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class=" ">
                            <a href="<?php echo home_url('/patient/payment-options/'); ?>">Payment Options</a>
                          </li>
                          <li class=" "><a href="<?php echo home_url('/patient/reviews/'); ?>">Reviews</a></li>
                          <li class=" ">
                            <a href="<?php echo home_url('/patient/library/'); ?>">Zellig Library</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown" role="presentation">
                        <a
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          href="#"
                          role="button"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Contact Us<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class=" ">
                            <a href="<?php echo home_url('/contact/'); ?>">Contact Us</a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo home_url('/refer-patient/'); ?>">Refer a Patient</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-button">
                        <a
                          href="tel:012.345.6789"
                          data-toggle-value
                          data-toggle-default-visible="false"
                          data-toggle-show-animation
                          data-toggle-hide-animation
                          data-toggle-show-animation-options="{}"
                          data-toggle-hide-animation-options="{}"
                          id
                          class="ry-btn ry-btn-primary"
                          target="_self"
                          ><i class="fa fa-phone" aria-hidden="true"></i>
                          <span>(012) 345-6789</span></a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div id="theme2-smHeader" class="col-xs-12 hidden-md hidden-lg">
            <div class="mobile-container">
              <div class="menu-wrap">
                <div class="flex-wrap">
                  <div class="flex-item left-nav">
                    <div class="mobile-nav">
                      <button
                        class="hamburger hamburger--collapse menu-toggle"
                        type="button"
                      >
                        <div class="flex-btn">
                          <span class="hamburger-box"
                            ><span class="hamburger-inner"></span
                          ></span>
                        </div>
                      </button>
                    </div>
                    <div class="mobile_logo">
                      <a style="display: block" href="<?php echo home_url(); ?>">
                        <img
                          src="https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/zellig_new_logo.png"
                          class="img-responsive"
                      /></a>
                    </div>
                  </div>
                  <div class="flex-item right-nav">
                    <div class="mobile-button">
                      <a href="tel:0123456789"
                        ><i class="fa fa-phone" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                  <div class="flex-item mobile_menu">
                    <nav id="mobile_menu">
                      <ul id="menu_container">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'mobile-nav-menu',
                            'container' => false,
                            'fallback_cb' => 'zelligcare_fallback_menu'
                        ));
                        ?>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="ry-main">
        <div class="col-xs-12">
          <div class="col-xs-12 sections ry-section-hero">
