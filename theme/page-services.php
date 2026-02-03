<?php
/**
 * Template Name: Services
 *
 * Custom page template for the Services page
 */

get_header(); ?>

<div id="ry-pg-banner">
    <div class="col-xs-12 ry-bnr-wrp ry-el-bg" style="background-image: url('<?php
        // Check if ACF is available, otherwise use featured image or default
        if (function_exists('get_field')) {
            $banner_image = get_field('banner_image');
        }
        if (empty($banner_image)) {
            $banner_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        }
        if (empty($banner_image)) {
            $banner_image = 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/ib.jpg';
        }
        echo esc_url($banner_image);
    ?>');">
        <div class="col-xs-12 ">
            <img src="<?php echo esc_url($banner_image); ?>" loading="lazy" alt="<?php the_title_attribute(); ?>" class="img-responsive">
        </div>
    </div>
    <div class="col-xs-12 ry-pg-title">
        <div class="col-xs-12 ry-container">
            <div>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<div id="ry-pg-content">
    <div id="ry-pg-body" class="col-xs-12 ry-section services-grid">
        <div class="col-xs-12 ry-container">
            <div class="col-xs-12 ry-content ry-flex">
                <div class="col-xs-12 col-md-12 col-lg-12 ">
                    <div class="col-xs-12 ">
                        <div class="ry-text">
                            <h3 style="text-align: center;">Specialties In , </h3>
                            <p style="text-align: center;">We offer a wide variety of specialties services to the community. Contact us with any questions about our services.</p>
                        </div>
                        <div class="col-xs-12 module-services style1">
                            <?php
                            // Define specialties with their details
                            $specialties = array(
                                array(
                                    'title' => 'Anxiety',
                                    'slug' => 'anxiety',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Services_Assets/Anxiety.jpg',
                                ),
                                array(
                                    'title' => 'ADHD',
                                    'slug' => 'adhd',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Services_Assets/ADHD_.jpg',
                                ),
                                array(
                                    'title' => 'Bipolar',
                                    'slug' => 'bipolar',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Services_Assets/Bipolar_Depression.jpg',
                                ),
                                array(
                                    'title' => 'Insomnia',
                                    'slug' => 'insomnia',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Services_Assets/Insomnia.jpg',
                                ),
                                array(
                                    'title' => 'Life Transitions',
                                    'slug' => 'life-transitions',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Services_Assets/Life_Transitions.jpg',
                                ),
                                array(
                                    'title' => 'OCD',
                                    'slug' => 'ocd',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Services_Assets/OCD.jpg',
                                ),
                                array(
                                    'title' => 'Autism & Neurodivergence',
                                    'slug' => 'autism-neurodivergence',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Services_Assets/Autism_Neurodivergence.jpg',
                                ),
                                array(
                                    'title' => 'Depression',
                                    'slug' => 'depression',
                                    'image' => 'https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Condition_Template/Depression_001.png',
                                ),
                            );

                            foreach ($specialties as $specialty) {
                                // Get the page URL
                                $page = get_page_by_path($specialty['slug']);
                                $page_url = $page ? get_permalink($page->ID) : home_url('/' . $specialty['slug'] . '/');
                                ?>
                                <div class="col-xs-12 col-lg-4 ry-each">
                                    <div class="col-xs-12 photo">
                                        <div class="col-xs-12 " style="z-index:9999;"></div>
                                        <img src="<?php echo esc_url($specialty['image']); ?>" loading="lazy" alt="<?php echo esc_attr($specialty['title']); ?>" class="img-responsive" style="margin-bottom:10px;width:210px;height:140px;object-fit: cover;margin: 0 auto;">
                                    </div>
                                    <div class="col-xs-12 block-container">
                                        <div class="col-xs-12 ry-icon-contain">
                                            <div class="ry-headline"><?php echo esc_html($specialty['title']); ?></div>
                                        </div>
                                        <div class="col-xs-12 ry-icon-block">
                                            <div>
                                                <h4><?php echo esc_html($specialty['title']); ?></h4>
                                                <p style="text-align: justify;"></p>
                                            </div>
                                            <div class="col-xs-12 ">
                                                <div>
                                                    <a href="<?php echo esc_url($page_url); ?>" class="ry-btn ry-btn-primary">Learn More <span class="arrow-right-custom"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
