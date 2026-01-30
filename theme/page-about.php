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
              <p>Too often, mental health care is reduced to rushed visits, checklist symptoms, and profit-driven decisions. Many practices are run with little regard for patients or the clinicians providing care. Appointments are cut short, staff are treated as expendable, and the result is predictable: patients get less than they deserve.</p>
              
              <p dir="ltr"><br>​​​​​​​Zellig was created as a response. We bring together the best providers, give them the time and support they need, and create an environment where their work is respected. When clinicians are valued, patients feel the difference.</p>
              
              <p dir="ltr"><br>We also aim to offer the full spectrum of mental-health care—psychiatry, counseling, and beyond—delivered in a setting that looks at patients as whole people, not just medication lists or symptom checkboxes. Our integrative approach means we go further to understand each individual and craft treatment plans in true collaboration.</p>
              
              <p dir="ltr"><br>Zellig is built on the idea that when care is thoughtful, unrushed, and grounded in respect for both patients and clinicians, the results are better for everyone.</p>
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

/* About Sections */
.about-section {
  margin-bottom: 4rem;
  padding: 3rem 0;
  border-bottom: 1px solid #e9ecef;
}

.about-section:last-child {
  border-bottom: none;
  margin-bottom: 0;
}

.about-section h2 {
  color: #333;
  margin-bottom: 2rem;
  font-size: 2.2rem;
  font-weight: 600;
  font-family: 'Jost', sans-serif;
  position: relative;
  padding-bottom: 1rem;
}

.about-section h2:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60px;
  height: 3px;
  background: #007bff;
}

.about-section h4 {
  color: #007bff;
  margin-bottom: 1rem;
  font-size: 1.4rem;
  font-weight: 500;
  font-family: 'Jost', sans-serif;
}

/* Values Grid */
.values-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2.5rem;
  margin-top: 3rem;
}

.value-item {
  background: #fff;
  padding: 2.5rem;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  text-align: center;
  transition: all 0.3s ease;
  border: 1px solid #f8f9fa;
}

.value-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 32px rgba(0,0,0,0.15);
  border-color: #007bff;
}

.value-item h4 {
  color: #007bff;
  margin-bottom: 1rem;
  font-size: 1.3rem;
  font-weight: 600;
}

.value-item p {
  color: #666;
  line-height: 1.6;
  margin: 0;
}

/* Features Grid */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
  margin-top: 3rem;
}

.feature-item {
  background: #f8f9fa;
  padding: 2.5rem;
  border-radius: 12px;
  border-left: 4px solid #007bff;
  transition: all 0.3s ease;
}

.feature-item:hover {
  background: #e9ecef;
  transform: translateX(5px);
}

.feature-item h4 {
  color: #333;
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.feature-item p {
  color: #666;
  line-height: 1.6;
  margin: 0;
}

/* CTA Section */
.cta-section {
  background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
  color: #fff;
  text-align: center;
  border-radius: 16px;
  padding: 4rem !important;
  margin-top: 4rem;
  position: relative;
  overflow: hidden;
}

.cta-section:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="10" cy="50" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="90" cy="30" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
  opacity: 0.1;
}

.cta-section h2 {
  color: #fff !important;
  margin-bottom: 1.5rem;
  font-size: 2.5rem;
  font-weight: 700;
  position: relative;
  z-index: 1;
}

.cta-section .section-content p {
  color: #fff;
  font-size: 1.3rem;
  margin-bottom: 3rem;
  position: relative;
  z-index: 1;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.cta-buttons {
  display: flex;
  gap: 2rem;
  justify-content: center;
  flex-wrap: wrap;
  position: relative;
  z-index: 1;
}

.ry-btn-secondary {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
}

.ry-btn-secondary:hover {
  background: #fff;
  color: #007bff;
  text-decoration: none;
  transform: translateY(-3px);
  box-shadow: 0 12px 32px rgba(255,255,255,0.3);
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
