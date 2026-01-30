<?php
/*
Template Name: About Us - Exact Original
*/
get_header(); ?>

<!-- Exact Original HTML Structure -->
<div id="ry-pg-banner">
  <div class="col-xs-12 ry-bnr-wrp ry-el-bg">
    <div class="col-xs-12">
      <img src="https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/ib.jpg" loading="lazy" alt class="img-responsive">
    </div>
  </div>
  <div class="col-xs-12 ry-pg-title">
    <div class="col-xs-12 ry-container">
      <div>
        <h1>About Us</h1>
      </div>
    </div>
  </div>
</div>

<div id="ry-pg-content">
  <div id="ry-pg-body" class="col-xs-12 ry-section" data-interior-layout="Sidebar">
    <div class="col-xs-12 ry-container">
      <div class="col-xs-12 ry-content ry-flex">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div>
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="about-content">
                  <?php the_content(); ?>
                </div>
              <?php endwhile; ?>
            <?php else : ?>
              <p>Too often, mental health care is reduced to rushed visits, checklist symptoms, and profit-driven decisions that leave patients feeling unheard and undertreated. At Zellig, we're changing that narrative. We believe that mental health care should be accessible, compassionate, and centered around your unique needs and goals.</p>
              
              <p>Our telehealth practice is built on the foundation of providing quality mental health services to individuals across Pennsylvania, Texas, and Virginia. We understand that seeking help for mental health concerns can be challenging, which is why we've created a warm, welcoming environment where you can feel comfortable discussing your concerns and working toward your wellness goals.</p>
              
              <p>Whether you're dealing with anxiety, depression, ADHD, bipolar disorder, or other mental health conditions, our experienced team of psychiatric nurse practitioners and licensed therapists is here to support you every step of the way. We combine evidence-based treatments with personalized care to help you achieve optimal mental health and well-being.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Original CSS and JavaScript -->
<style>
/* Original About Us Page Styles - Exact Match */
#ry-pg-banner {
  position: relative;
  overflow: hidden;
}

#ry-pg-banner .ry-bnr-wrp {
  position: relative;
  height: 300px;
}

#ry-pg-banner .ry-bnr-wrp img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

#ry-pg-banner .ry-pg-title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
  z-index: 2;
}

#ry-pg-banner .ry-pg-title h1 {
  color: #fff;
  font-size: 3rem;
  font-weight: 700;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
  margin: 0;
  padding: 1rem;
  background: rgba(0,0,0,0.3);
  border-radius: 8px;
  display: inline-block;
}

#ry-pg-content {
  padding: 3rem 0;
}

#ry-pg-body {
  background: #fff;
}

.about-content {
  line-height: 1.6;
  margin-bottom: 3rem;
  font-size: 1.1rem;
  color: #403f40;
}

.about-content p {
  margin-bottom: 1.5rem;
}

.about-content p:last-child {
  margin-bottom: 0;
}

/* Original Typography */
body {
  color: #403f40;
  overflow: auto !important;
  font-size: calc(14px + 2 * ((100vw - 320px) / 1280));
  font-family: 'Jost', sans-serif;
}

@media screen and (max-width: 320px) {
  body {
    font-size: 14px;
  }
}

@media screen and (min-width: 1600px) {
  body {
    font-size: 16px;
  }
}

/* Original Layout Classes */
.ry-flex {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.col-xs-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

@media (min-width: 768px) {
  .col-md-12 {
    width: 100%;
  }
}

@media (min-width: 992px) {
  .col-lg-12 {
    width: 100%;
  }
}

.ry-container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}

@media (min-width: 768px) {
  .ry-container {
    width: 750px;
  }
}

@media (min-width: 992px) {
  .ry-container {
    width: 970px;
  }
}

@media (min-width: 1200px) {
  .ry-container {
    width: 1170px;
  }
}

/* Original Section Styles */
.ry-section {
  position: relative;
  padding: 60px 0;
}

.ry-content {
  width: 100%;
}

/* Responsive Design */
@media (max-width: 768px) {
  #ry-pg-banner .ry-bnr-wrp {
    height: 250px;
  }
  
  #ry-pg-banner .ry-pg-title h1 {
    font-size: 2rem;
    padding: 0.75rem;
  }
  
  #ry-pg-content {
    padding: 2rem 0;
  }
  
  .about-content {
    font-size: 1rem;
  }
}

@media (max-width: 576px) {
  #ry-pg-banner .ry-bnr-wrp {
    height: 200px;
  }
  
  #ry-pg-banner .ry-pg-title h1 {
    font-size: 1.75rem;
  }
  
  .about-content {
    font-size: 0.95rem;
  }
}

/* Original Button Styles */
.ry-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 14px 28px;
  border-radius: 8px;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s ease;
  border: none;
  cursor: pointer;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-family: 'Jost', sans-serif;
}

.ry-btn-primary {
  background: #007bff;
  color: #fff;
  box-shadow: 0 4px 12px rgba(0,123,255,0.3);
}

.ry-btn-primary:hover {
  background: #0056b3;
  color: #fff;
  text-decoration: none;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0,123,255,0.4);
}

/* Animation and Transitions */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.about-content {
  animation: fadeInUp 0.6s ease-out;
}

/* Print Styles */
@media print {
  #ry-pg-banner {
    display: none;
  }
  
  .about-content {
    break-inside: avoid;
  }
}
</style>

<script>
// Original JavaScript functionality
jQuery(document).ready(function($) {
  // Sticky logo functionality (if needed)
  var $littleLogo = $("#litlleLogo");
  if ($littleLogo.length) {
    var scrollFunc = function () {
      var y = $(window).scrollTop();
      if (y >= 150) {
        $littleLogo.fadeIn(300);
      } else {
        $littleLogo.fadeOut(300);
      }
    };
    
    $(window).on("scroll", scrollFunc);
  }
  
  // Smooth scroll for any anchor links
  $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top - 100
      }, 800);
    }
  });
  
  // Add fade-in animation to content sections
  $('.about-content p').each(function(index) {
    $(this).css({
      'opacity': '0',
      'transform': 'translateY(20px)'
    });
    
    setTimeout(() => {
      $(this).animate({
        'opacity': '1',
        'transform': 'translateY(0)'
      }, 600);
    }, index * 200);
  });
});
</script>

<?php get_footer(); ?>
