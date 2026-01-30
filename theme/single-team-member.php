<?php
/*
Template Name: Team Member Single
*/
get_header(); ?>

<div id="ry-pg-banner">
  <div class="col-xs-12 ry-bnr-wrp ry-el-bg" style="background-image: url('https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/ib.jpg');">
    <div class="col-xs-12">
      <img src="https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/ib.jpg" loading="lazy" alt="" class="img-responsive">
    </div>
    <div class="col-xs-12 ry-pg-title">
      <div class="col-xs-12 ry-container">
        <div>
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="ry-pg-content">
  <div id="ry-pg-body" class="col-xs-12 ry-section" data-interior-layout="Sidebar">
    <div class="col-xs-12 team-custom-v2">
      <div class="col-xs-12 ry-container">
        <div class="col-xs-12 ry-content">
          <div class="col-xs-12 col-md-12 col-lg-12 wrapper">
            <div class="col-xs-12 photo">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('team-member-large', array('class' => 'img-responsive')); ?>
              <?php else : ?>
                <img src="https://via.placeholder.com/600x600" alt="<?php the_title(); ?>" class="img-responsive">
              <?php endif; ?>
            </div>
            
            <div class="col-xs-12 details">
              <div class="title"><?php the_title(); ?></div>
              
              <?php if (get_field('position')) : ?>
                <div class="position"><?php the_field('position'); ?></div>
              <?php endif; ?>
              
              <?php if (get_field('credentials')) : ?>
                <div class="credentials"><?php the_field('credentials'); ?></div>
              <?php endif; ?>
              
              <?php if (get_field('education')) : ?>
                <div class="education">
                  <h4>Education</h4>
                  <?php the_field('education'); ?>
                </div>
              <?php endif; ?>
              
              <?php if (get_field('experience')) : ?>
                <div class="experience">
                  <h4>Experience</h4>
                  <?php the_field('experience'); ?>
                </div>
              <?php endif; ?>
              
              <?php if (get_field('specialties')) : ?>
                <div class="specialties">
                  <h4>Specialties</h4>
                  <?php the_field('specialties'); ?>
                </div>
              <?php endif; ?>
              
              <?php if (get_field('philosophy')) : ?>
                <div class="philosophy">
                  <h4>Treatment Philosophy</h4>
                  <?php the_field('philosophy'); ?>
                </div>
              <?php endif; ?>
              
              <div class="bio">
                <h4>Biography</h4>
                <?php the_content(); ?>
              </div>
              
              <?php if (get_field('certifications')) : ?>
                <div class="certifications">
                  <h4>Certifications & Training</h4>
                  <?php the_field('certifications'); ?>
                </div>
              <?php endif; ?>
              
              <?php if (get_field('languages')) : ?>
                <div class="languages">
                  <h4>Languages</h4>
                  <?php the_field('languages'); ?>
                </div>
              <?php endif; ?>
              
              <div class="contact-info">
                <h4>Contact Information</h4>
                <div class="contact-details">
                  <?php if (get_field('email')) : ?>
                    <div class="email">
                      <strong>Email:</strong> 
                      <a href="mailto:<?php echo antispambot(get_field('email')); ?>"><?php echo antispambot(get_field('email')); ?></a>
                    </div>
                  <?php endif; ?>
                  
                  <?php if (get_field('phone')) : ?>
                    <div class="phone">
                      <strong>Phone:</strong> 
                      <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_field('phone')); ?>"><?php the_field('phone'); ?></a>
                    </div>
                  <?php endif; ?>
                  
                  <?php if (get_field('locations')) : ?>
                    <div class="locations">
                      <strong>Locations:</strong> 
                      <?php the_field('locations'); ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              
              <div class="back-to-team">
                <a href="<?php echo home_url('/team/'); ?>" class="ry-btn ry-btn-secondary">
                  <i class="fa fa-arrow-left"></i> Back to Team
                </a>
                <a href="<?php echo home_url('/request-appointment/'); ?>" class="ry-btn ry-btn-primary">
                  <i class="fa fa-calendar"></i> Request Appointment
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.team-custom-v2 .wrapper {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.1);
  overflow: hidden;
  margin-bottom: 3rem;
}

.team-custom-v2 .photo {
  text-align: center;
  padding: 3rem 3rem 2rem;
  background: #f8f9fa;
}

.team-custom-v2 .photo img {
  max-width: 400px;
  height: auto;
  border-radius: 50%;
  border: 8px solid #fff;
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

.team-custom-v2 .details {
  padding: 3rem;
}

.team-custom-v2 .title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 0.5rem;
  text-align: center;
}

.team-custom-v2 .position {
  font-size: 1.3rem;
  color: #007bff;
  font-weight: 500;
  text-align: center;
  margin-bottom: 0.5rem;
}

.team-custom-v2 .credentials {
  font-size: 1.1rem;
  color: #666;
  font-style: italic;
  text-align: center;
  margin-bottom: 2rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid #eee;
}

.team-custom-v2 .details h4 {
  color: #333;
  font-size: 1.3rem;
  font-weight: 600;
  margin: 2rem 0 1rem 0;
  padding-bottom: 0.5rem;
  border-bottom: 2px solid #007bff;
}

.team-custom-v2 .details h4:first-of-type {
  margin-top: 0;
}

.team-custom-v2 .education,
.team-custom-v2 .experience,
.team-custom-v2 .specialties,
.team-custom-v2 .philosophy,
.team-custom-v2 .bio,
.team-custom-v2 .certifications,
.team-custom-v2 .languages {
  margin-bottom: 2rem;
  line-height: 1.6;
}

.team-custom-v2 .contact-info {
  background: #f8f9fa;
  padding: 2rem;
  border-radius: 8px;
  margin: 2rem 0;
}

.team-custom-v2 .contact-info h4 {
  margin-top: 0;
  border-bottom: none;
  text-align: center;
}

.team-custom-v2 .contact-details {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
  margin-top: 1rem;
}

.team-custom-v2 .contact-details > div {
  padding: 1rem;
  background: #fff;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.team-custom-v2 .contact-details strong {
  color: #333;
  display: block;
  margin-bottom: 0.5rem;
}

.team-custom-v2 .contact-details a {
  color: #007bff;
  text-decoration: none;
}

.team-custom-v2 .contact-details a:hover {
  text-decoration: underline;
}

.back-to-team {
  display: flex;
  gap: 1rem;
  justify-content: center;
  margin-top: 3rem;
  padding-top: 2rem;
  border-top: 1px solid #eee;
}

.ry-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 12px 24px;
  border-radius: 6px;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s ease;
  border: none;
  cursor: pointer;
}

.ry-btn-primary {
  background: #007bff;
  color: #fff;
}

.ry-btn-primary:hover {
  background: #0056b3;
  color: #fff;
  text-decoration: none;
}

.ry-btn-secondary {
  background: #6c757d;
  color: #fff;
}

.ry-btn-secondary:hover {
  background: #545b62;
  color: #fff;
  text-decoration: none;
}

@media (max-width: 768px) {
  .team-custom-v2 .photo {
    padding: 2rem 2rem 1rem;
  }
  
  .team-custom-v2 .photo img {
    max-width: 300px;
  }
  
  .team-custom-v2 .details {
    padding: 2rem 1.5rem;
  }
  
  .team-custom-v2 .title {
    font-size: 2rem;
  }
  
  .team-custom-v2 .position {
    font-size: 1.1rem;
  }
  
  .back-to-team {
    flex-direction: column;
    align-items: center;
  }
  
  .ry-btn {
    width: 100%;
    max-width: 300px;
    justify-content: center;
  }
}
</style>

<?php get_footer(); ?>
