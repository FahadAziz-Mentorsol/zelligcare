<?php
/*
Template Name: Practice With Purpose - Simple
*/
get_header(); ?>

<div id="ry-pg-banner">
  <div class="col-xs-12 ry-bnr-wrp ry-el-bg">
    <div class="col-xs-12">
      <img src="https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/ib.jpg" loading="lazy" alt class="img-responsive">
    </div>
  </div>
  <div class="col-xs-12 ry-pg-title">
    <div class="col-xs-12 ry-container">
      <div>
        <h1>Practice With Purpose</h1>
      </div>
    </div>
  </div>
</div>

<div id="ry-pg-content">
  <div id="ry-pg-body" class="col-xs-12 ry-section">
    <div class="col-xs-12 ry-container">
      <div class="col-xs-12 ry-content ry-flex">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div>
            <h2>Join Our Team</h2>
            <p>At Zellig, we believe in practicing with purpose. We are a team of dedicated mental health professionals committed to providing compassionate, evidence-based care to patients across Pennsylvania, Texas, and Virginia.</p>
            
            <h3>Why Work With Us?</h3>
            <ul>
              <li>Competitive compensation and benefits</li>
              <li>Flexible work arrangements</li>
              <li>Professional development opportunities</li>
              <li>Supportive team environment</li>
              <li>Work-life balance</li>
            </ul>
            
            <h3>Current Openings</h3>
            <p>We are always looking for talented mental health professionals to join our team. If you're passionate about making a difference in patients' lives, we'd love to hear from you.</p>
            
            <div style="margin-top: 2rem;">
              <a href="<?php echo home_url('/team/'); ?>" class="btn btn-primary">Meet Our Team</a>
              <a href="<?php echo home_url('/contact-us/'); ?>" class="btn btn-secondary">Contact Us</a>
            </div>
            
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="page-content">
                  <?php the_content(); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.btn {
  display: inline-block;
  padding: 12px 24px;
  margin: 0 10px;
  text-decoration: none;
  border-radius: 5px;
  font-weight: 600;
}

.btn-primary {
  background: #007bff;
  color: white;
}

.btn-secondary {
  background: #6c757d;
  color: white;
}

.btn:hover {
  opacity: 0.8;
}

h2, h3 {
  color: #333;
  margin: 2rem 0 1rem 0;
}

ul {
  margin: 1rem 0;
  padding-left: 2rem;
}

li {
  margin: 0.5rem 0;
}
</style>

<?php get_footer(); ?>
