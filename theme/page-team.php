<?php
/*
Template Name: Meet Our Team
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
  <div class="col-xs-12 inner-team-page">
    <div class="col-xs-12 module-team custom">
      <div class="col-xs-12 ry-container">
        <div class="col-xs-12 ry-content">
          <div class="col-xs-12 content">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="team-intro">
                  <?php the_content(); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            
            <div class="col-xs-12 ry-flex">
              <?php
              $team_members = new WP_Query(array(
                'post_type' => 'team_member',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
              ));
              
              if ($team_members->have_posts()) : ?>
                <?php while ($team_members->have_posts()) : $team_members->the_post(); ?>
                  <div class="col-xs-12 col-lg-6 each" data-aos-duration="1500" data-aos="fade-right">
                    <div class="col-xs-12 wrapper">
                      <div class="col-xs-12 photo">
                        <?php if (has_post_thumbnail()) : ?>
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('team-member', array('class' => 'img-responsive')); ?>
                          </a>
                        <?php else : ?>
                          <a href="<?php the_permalink(); ?>">
                            <img src="https://via.placeholder.com/400x400" alt="<?php the_title(); ?>" class="img-responsive">
                          </a>
                        <?php endif; ?>
                      </div>
                      <div class="col-xs-12 details">
                        <div class="title">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <?php if (get_field('position')) : ?>
                          <div class="position"><?php the_field('position'); ?></div>
                        <?php endif; ?>
                        <?php if (get_field('credentials')) : ?>
                          <div class="credentials"><?php the_field('credentials'); ?></div>
                        <?php endif; ?>
                        <?php if (get_field('short_bio')) : ?>
                          <div class="short-bio"><?php the_field('short_bio'); ?></div>
                        <?php endif; ?>
                        <div class="col-xs-12 learn-more">
                          <a href="<?php the_permalink(); ?>" class="ry-btn ry-btn-primary">Learn More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <div class="no-team-members">
                  <p><?php _e('No team members found.', 'zelligcare'); ?></p>
                </div>
              <?php endif; ?>
            </div>
            
            <?php if (get_field('team_section_title', get_option('page_for_posts'))) : ?>
              <div class="team-section-title">
                <h2><?php the_field('team_section_title', get_option('page_for_posts')); ?></h2>
              </div>
            <?php endif; ?>
            
            <?php if (get_field('team_section_content', get_option('page_for_posts'))) : ?>
              <div class="team-section-content">
                <?php the_field('team_section_content', get_option('page_for_posts')); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.team-intro {
  text-align: center;
  margin-bottom: 3rem;
  font-size: 1.1rem;
  line-height: 1.6;
}

.inner-team-page .module-team .each {
  margin-bottom: 3rem;
}

.inner-team-page .module-team .wrapper {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.inner-team-page .module-team .wrapper:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

.inner-team-page .module-team .photo {
  position: relative;
  overflow: hidden;
}

.inner-team-page .module-team .photo img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

.inner-team-page .module-team .wrapper:hover .photo img {
  transform: scale(1.05);
}

.inner-team-page .module-team .details {
  padding: 2rem;
  text-align: center;
}

.inner-team-page .module-team .title {
  margin-bottom: 0.5rem;
}

.inner-team-page .module-team .title a {
  font-size: 1.5rem;
  font-weight: 600;
  color: #333;
  text-decoration: none;
  transition: color 0.3s ease;
}

.inner-team-page .module-team .title a:hover {
  color: #007bff;
}

.inner-team-page .module-team .position {
  color: #007bff;
  font-weight: 500;
  margin-bottom: 0.5rem;
  font-size: 1.1rem;
}

.inner-team-page .module-team .credentials {
  color: #666;
  font-style: italic;
  margin-bottom: 1rem;
}

.inner-team-page .module-team .short-bio {
  color: #555;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.inner-team-page .module-team .learn-more {
  text-align: center;
}

.ry-btn {
  display: inline-block;
  padding: 12px 24px;
  background: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  font-weight: 500;
  transition: background 0.3s ease;
  border: none;
  cursor: pointer;
}

.ry-btn:hover {
  background: #0056b3;
  color: #fff;
  text-decoration: none;
}

.no-team-members {
  text-align: center;
  padding: 3rem;
  color: #666;
}

.team-section-title {
  text-align: center;
  margin: 3rem 0 2rem 0;
}

.team-section-title h2 {
  color: #333;
  font-size: 2rem;
}

.team-section-content {
  max-width: 800px;
  margin: 0 auto 3rem;
  text-align: center;
  line-height: 1.6;
  font-size: 1.1rem;
}

@media (max-width: 768px) {
  .inner-team-page .module-team .details {
    padding: 1.5rem;
  }
  
  .inner-team-page .module-team .title a {
    font-size: 1.3rem;
  }
  
  .team-intro {
    margin-bottom: 2rem;
  }
}
</style>

<?php get_footer(); ?>
