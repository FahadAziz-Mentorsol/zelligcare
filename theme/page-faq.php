<?php
/*
Template Name: Frequently Asked Questions
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
        <h1><?php the_title(); ?></h1>
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
                <div class="faq-content">
                  <?php the_content(); ?>
                </div>
                
                <div class="faq-section">
                  <h2>Frequently Asked Questions</h2>
                  
                  <div class="faq-items">
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>What services does Zellig offer?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>Zellig offers comprehensive mental health services including psychiatric evaluations, medication management, and therapy sessions. We specialize in treating anxiety, depression, ADHD, bipolar disorder, PTSD, and other mental health conditions through our secure telehealth platform.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>How does telehealth work?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>Telehealth allows you to connect with our mental health professionals from the comfort of your home using a secure video conferencing platform. You'll need a device with a camera and microphone, and a stable internet connection. We'll send you a secure link to join your appointment.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>What states do you serve?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>We currently provide telehealth services to patients in Pennsylvania, Texas, and Virginia. We're continuously working to expand our services to additional states.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>Do you accept insurance?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>Yes, we accept many major insurance plans. Please contact our office to verify your specific insurance coverage. We also offer self-pay options for those without insurance or with out-of-network benefits.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>How do I schedule an appointment?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>You can schedule an appointment by calling us at (215) 318-1821 or using our online appointment request form. We'll work with you to find a convenient time for your consultation.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>What should I expect during my first appointment?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>Your first appointment will typically involve a comprehensive evaluation where we discuss your medical history, current concerns, and treatment goals. This helps us develop a personalized treatment plan tailored to your specific needs.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>Is telehealth as effective as in-person therapy?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>Research has shown that telehealth can be as effective as in-person therapy for many mental health conditions. Our experienced providers use evidence-based approaches and ensure you receive the same quality care you would in an office setting.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>What if I need medication?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>Our psychiatric nurse practitioners can prescribe medications when appropriate. We'll discuss your treatment options during your evaluation and determine if medication is right for you as part of your comprehensive care plan.</p>
                      </div>
                    </div>
                    
                    <div class="faq-item">
                      <div class="faq-question">
                        <h3>How do I prepare for my telehealth appointment?</h3>
                      </div>
                      <div class="faq-answer">
                        <p>Find a quiet, private space with good lighting. Test your camera and microphone before the appointment. Have your insurance information ready and any relevant medical records or medications you're currently taking.</p>
                      </div>
                    </div>
                  </div>
                </div>
                
              <?php endwhile; ?>
            <?php else : ?>
              <p><?php _e('Sorry, no pages matched your criteria.', 'zelligcare'); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.faq-content {
  line-height: 1.6;
  margin-bottom: 3rem;
  font-size: 1.1rem;
  color: #403f40;
}

.faq-section {
  margin-bottom: 4rem;
}

.faq-section h2 {
  color: #333;
  margin-bottom: 2rem;
  font-size: 2.2rem;
  font-weight: 600;
  font-family: 'Jost', sans-serif;
  position: relative;
  padding-bottom: 1rem;
}

.faq-section h2:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60px;
  height: 3px;
  background: #007bff;
}

.faq-items {
  max-width: 800px;
  margin: 0 auto;
}

.faq-item {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  margin-bottom: 1.5rem;
  overflow: hidden;
  border: 1px solid #e9ecef;
  transition: all 0.3s ease;
}

.faq-item:hover {
  box-shadow: 0 8px 24px rgba(0,0,0,0.12);
  transform: translateY(-2px);
}

.faq-question {
  background: #f8f9fa;
  padding: 1.5rem;
  cursor: pointer;
  position: relative;
  transition: background 0.3s ease;
}

.faq-question:hover {
  background: #e9ecef;
}

.faq-question h3 {
  margin: 0;
  color: #333;
  font-size: 1.2rem;
  font-weight: 600;
  font-family: 'Jost', sans-serif;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.faq-question h3:before {
  content: 'Q';
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  background: #007bff;
  color: #fff;
  border-radius: 50%;
  font-size: 0.9rem;
  font-weight: 700;
  flex-shrink: 0;
}

.faq-answer {
  padding: 1.5rem;
  display: none;
  animation: slideDown 0.3s ease-out;
}

.faq-item.active .faq-answer {
  display: block;
}

.faq-item.active .faq-question {
  background: #007bff;
}

.faq-item.active .faq-question h3 {
  color: #fff;
}

.faq-answer p {
  margin: 0;
  line-height: 1.6;
  color: #555;
  font-size: 1rem;
}

@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (max-width: 768px) {
  .faq-section h2 {
    font-size: 1.8rem;
  }
  
  .faq-question {
    padding: 1.2rem;
  }
  
  .faq-question h3 {
    font-size: 1.1rem;
  }
  
  .faq-answer {
    padding: 1.2rem;
  }
}
</style>

<script>
jQuery(document).ready(function($) {
  $('.faq-question').on('click', function() {
    var $faqItem = $(this).closest('.faq-item');
    var $answer = $faqItem.find('.faq-answer');
    
    // Close other items
    $('.faq-item').not($faqItem).removeClass('active');
    $('.faq-item').not($faqItem).find('.faq-answer').slideUp(300);
    
    // Toggle current item
    $faqItem.toggleClass('active');
    $answer.slideToggle(300);
  });
});
</script>

<?php get_footer(); ?>
