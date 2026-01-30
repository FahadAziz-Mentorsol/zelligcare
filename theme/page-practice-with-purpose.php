<?php
/*
Template Name: Practice With Purpose (Careers)
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
        <h1>Practice With Purpose</h1>
      </div>
    </div>
  </div>
</div>

<div id="ry-pg-content">
  <div id="ry-pg-body" class="col-xs-12 inner-careers">
    <div class="col-xs-12 module-cta custom">
      <div class="col-xs-12 ry-container">
        <div class="col-xs-12 content">
          <div class="col-xs-12 ry-flex">
            <div class="col-xs-12 col-lg-3 each each-1" data-aos-duration="1500" data-aos="fade-right">
              <div class="col-xs-12 wrapper">
                <div class="col-xs-12 photo">
                  <div class="col-xs-12 ry-el-bg">
                    <img src="https://static.royacdn.com/Site-656e9e6e-f19a-4ed1-9c29-85197594446c/Homepage_Assets/join-our-team.jpg" loading="lazy" alt class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-12 details">
                  <div class="title">Join Our Team</div>
                  <div class="col-xs-12 text">
                    <p>At Zellig, we believe in practicing with purpose. We're looking for passionate mental health professionals who share our commitment to providing exceptional, patient-centered care.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Original CSS and JavaScript -->
<style>
/* Practice With Purpose Page Styles - Exact Match */
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

/* CTA Module Styles */
.module-cta {
  padding: 4rem 0;
}

.module-cta .content {
  display: flex;
  flex-wrap: wrap;
  gap: 3rem;
}

.module-cta .wrapper {
  background: #f8f9fa;
  border-radius: 12px;
  padding: 2rem;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  height: 100%;
}

.module-cta .photo {
  margin-bottom: 1.5rem;
}

.module-cta .photo img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
}

.module-cta .title {
  font-size: 1.8rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 1rem;
  font-family: 'Jost', sans-serif;
}

.module-cta .text {
  margin-bottom: 2rem;
  color: #555;
  line-height: 1.6;
}

/* Form Styles */
.ry-form {
  margin-top: 2rem;
}

.ry-form .form-group {
  margin-bottom: 1.5rem;
}

.ry-form label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 500;
  color: #333;
  font-family: 'Jost', sans-serif;
}

.ry-form input,
.ry-form select,
.ry-form textarea {
  width: 100%;
  padding: 12px 16px;
  border: 2px solid #e9ecef;
  border-radius: 8px;
  font-size: 1rem;
  font-family: 'Jost', sans-serif;
  transition: border-color 0.3s ease;
}

.ry-form input:focus,
.ry-form select:focus,
.ry-form textarea:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
}

.ry-form small {
  display: block;
  margin-top: 0.25rem;
  color: #666;
  font-size: 0.875rem;
}

.checkbox-wrapper {
  display: flex;
  align-items: flex-start;
  gap: 0.5rem;
}

.checkbox-wrapper input[type="checkbox"] {
  width: auto;
  margin-top: 0.25rem;
}

.checkbox-wrapper label {
  margin-bottom: 0;
  font-weight: 400;
  cursor: pointer;
}

.form-message {
  margin-top: 1rem;
  padding: 1rem;
  border-radius: 8px;
  display: none;
}

.form-message.success {
  background: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
}

.form-message.error {
  background: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
}

/* Button Styles */
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

.ry-btn:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
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
  .col-md-6 {
    width: 50%;
  }
}

@media (min-width: 992px) {
  .col-lg-3 {
    width: 25%;
  }
  
  .col-lg-9 {
    width: 75%;
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
  
  .module-cta .content {
    flex-direction: column;
    gap: 2rem;
  }
  
  .module-cta .wrapper {
    padding: 1.5rem;
  }
  
  .module-cta .title {
    font-size: 1.5rem;
  }
}

@media (max-width: 576px) {
  #ry-pg-banner .ry-bnr-wrp {
    height: 200px;
  }
  
  #ry-pg-banner .ry-pg-title h1 {
    font-size: 1.75rem;
  }
  
  .module-cta {
    padding: 2rem 0;
  }
  
  .module-cta .wrapper {
    padding: 1rem;
  }
  
  .module-cta .title {
    font-size: 1.3rem;
  }
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

.module-cta .wrapper {
  animation: fadeInUp 0.6s ease-out;
}

/* Open Positions Styles */
.module-positions {
  padding: 4rem 0;
  background: #f8f9fa;
}

.module-positions .title {
  text-align: center;
  margin-bottom: 3rem;
}

.module-positions .title h2 {
  font-size: 2.5rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 1rem;
  font-family: 'Jost', sans-serif;
}

.position-item {
  background: #fff;
  border-radius: 12px;
  padding: 2rem;
  margin-bottom: 2rem;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
}

.position-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

.position-details h3 {
  font-size: 1.5rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 1rem;
  font-family: 'Jost', sans-serif;
}

.position-meta {
  display: flex;
  gap: 1rem;
  margin-bottom: 1rem;
}

.position-meta span {
  background: #e9ecef;
  color: #666;
  padding: 0.25rem 0.75rem;
  border-radius: 20px;
  font-size: 0.875rem;
  font-weight: 500;
}

.position-description p {
  color: #555;
  line-height: 1.6;
  margin-bottom: 0;
}

.position-actions {
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

@media (max-width: 768px) {
  .position-meta {
    flex-direction: column;
    gap: 0.5rem;
  }
  
  .position-actions {
    justify-content: flex-start;
    margin-top: 1rem;
  }
  
  .module-positions .title h2 {
    font-size: 2rem;
  }
}
</style>

<script>
jQuery(document).ready(function($) {
  // Handle form submission
  $('#careersForm').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $message = $('#formMessage');
    
    // Disable submit button
    $submitBtn.prop('disabled', true);
    
    // Clear previous messages
    $message.removeClass('success error').hide();
    
    // Create FormData for file uploads
    var formData = new FormData(this);
    
    $.ajax({
      url: '<?php echo admin_url('admin-ajax.php'); ?>',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response.success) {
          $message.addClass('success').text(response.data).fadeIn();
          $form[0].reset();
        } else {
          $message.addClass('error').text(response.data).fadeIn();
        }
      },
      error: function() {
        $message.addClass('error').text('An error occurred. Please try again.').fadeIn();
      },
      complete: function() {
        $submitBtn.prop('disabled', false);
      }
    });
  });
  
  // File upload validation
  $('#resume').on('change', function() {
    var file = this.files[0];
    if (file) {
      var allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
      if (allowedTypes.indexOf(file.type) === -1) {
        alert('Please upload a PDF, DOC, or DOCX file.');
        this.value = '';
      }
    }
  });
  
  $('#cover_letter').on('change', function() {
    var file = this.files[0];
    if (file) {
      var allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
      if (allowedTypes.indexOf(file.type) === -1) {
        alert('Please upload a PDF, DOC, or DOCX file.');
        this.value = '';
      }
    }
  });
});
</script>

<?php get_footer(); ?>
                  </div>
                </div>
                
                <div class="col-xs-12 form-row">
                  <div class="col-xs-12 form-group">
                    <label class="checkbox-label">
                      <input type="checkbox" id="agreement" name="agreement" required>
                      I certify that all information provided is accurate and complete.
                    </label>
                  </div>
                </div>
                
                <div class="col-xs-12 form-row">
                  <div class="col-xs-12 form-group">
                    <button type="submit" class="ry-btn ry-btn-primary">Submit Application</button>
                  </div>
                </div>
                
                <div id="form-message" class="col-xs-12 form-message"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Open Positions Section -->
    <div class="col-xs-12 module-positions custom">
      <div class="col-xs-12 ry-container">
        <div class="col-xs-12 content">
          <div class="col-xs-12 title">
            <h2>Current Open Positions</h2>
          </div>
          
          <div class="col-xs-12 positions-list">
            <div class="col-xs-12 position-item">
              <div class="col-xs-12 col-md-8 position-details">
                <h3>Psychiatric Nurse Practitioner</h3>
                <div class="position-meta">
                  <span class="location">Remote - PA, TX, VA</span>
                  <span class="type">Full-Time</span>
                </div>
                <div class="position-description">
                  <p>We are seeking experienced Psychiatric Nurse Practitioners to join our telehealth team. Provide comprehensive mental health care to patients across multiple states.</p>
                </div>
              </div>
              <div class="col-xs-12 col-md-4 position-actions">
                <a href="#apply" class="ry-btn ry-btn-primary">Apply Now</a>
              </div>
            </div>
            
            <div class="col-xs-12 position-item">
              <div class="col-xs-12 col-md-8 position-details">
                <h3>Licensed Therapist</h3>
                <div class="position-meta">
                  <span class="location">Remote - PA, TX, VA</span>
                  <span class="type">Part-Time/Full-Time</span>
                </div>
                <div class="position-description">
                  <p>Join our team of licensed therapists providing evidence-based therapy services through our secure telehealth platform.</p>
                </div>
              </div>
              <div class="col-xs-12 col-md-4 position-actions">
                <a href="#apply" class="ry-btn ry-btn-primary">Apply Now</a>
              </div>
            </div>
            
            <div class="col-xs-12 position-item">
              <div class="col-xs-12 col-md-8 position-details">
                <h3>Licensed Clinical Social Worker</h3>
                <div class="position-meta">
                  <span class="location">Remote - PA, TX, VA</span>
                  <span class="type">Full-Time</span>
                </div>
                <div class="position-description">
                  <p>We are looking for compassionate LCSWs to provide comprehensive mental health services to our diverse patient population.</p>
                </div>
              </div>
              <div class="col-xs-12 col-md-4 position-actions">
                <a href="#apply" class="ry-btn ry-btn-primary">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.inner-careers .module-cta .wrapper {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.1);
  overflow: hidden;
  margin-bottom: 3rem;
}

.inner-careers .module-cta .photo {
  height: 100%;
  min-height: 400px;
}

.inner-careers .module-cta .photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.inner-careers .module-cta .each-2 .wrapper {
  padding: 3rem;
}

.inner-careers .module-cta .title h2 {
  color: #333;
  font-size: 2.5rem;
  margin-bottom: 1.5rem;
  font-weight: 700;
}

.inner-careers .module-cta .description {
  font-size: 1.1rem;
  line-height: 1.7;
  color: #555;
  margin-bottom: 2rem;
}

.inner-careers .benefits-title h3 {
  color: #007bff;
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

.inner-careers .benefits-list {
  font-size: 1.05rem;
  line-height: 1.6;
}

.inner-careers .module-form .form-wrapper {
  background: #f8f9fa;
  border-radius: 12px;
  padding: 3rem;
  margin-bottom: 3rem;
}

.inner-careers .module-form .title {
  text-align: center;
  margin-bottom: 3rem;
}

.inner-careers .module-form .title h2 {
  color: #333;
  font-size: 2.2rem;
  margin-bottom: 1rem;
}

.inner-careers .module-form .title p {
  color: #666;
  font-size: 1.1rem;
}

.inner-careers .form-group {
  margin-bottom: 1.5rem;
}

.inner-careers .form-group label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 500;
  color: #333;
}

.inner-careers .form-group input,
.inner-careers .form-group select,
.inner-careers .form-group textarea {
  width: 100%;
  padding: 12px 15px;
  border: 2px solid #e9ecef;
  border-radius: 6px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.inner-careers .form-group input:focus,
.inner-careers .form-group select:focus,
.inner-careers .form-group textarea:focus {
  outline: none;
  border-color: #007bff;
}

.inner-careers .form-group small {
  display: block;
  margin-top: 0.5rem;
  color: #666;
  font-size: 0.9rem;
}

.inner-careers .checkbox-label {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  cursor: pointer;
}

.inner-careers .checkbox-label input[type="checkbox"] {
  width: auto;
  margin: 0;
}

.inner-careers .form-message {
  margin-top: 1rem;
  padding: 1rem;
  border-radius: 6px;
  display: none;
}

.inner-careers .form-message.success {
  background: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
}

.inner-careers .form-message.error {
  background: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
}

.inner-careers .module-positions .position-item {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  padding: 2rem;
  margin-bottom: 1.5rem;
  display: flex;
  align-items: center;
  gap: 2rem;
}

.inner-careers .position-details h3 {
  color: #333;
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}

.inner-careers .position-meta {
  margin-bottom: 1rem;
}

.inner-careers .position-meta span {
  display: inline-block;
  background: #e9ecef;
  padding: 0.25rem 0.75rem;
  border-radius: 20px;
  font-size: 0.9rem;
  color: #666;
  margin-right: 0.5rem;
}

.inner-careers .position-description {
  color: #555;
  line-height: 1.6;
}

.inner-careers .position-actions {
  text-align: right;
}

@media (max-width: 768px) {
  .inner-careers .module-cta .each-2 .wrapper {
    padding: 2rem 1.5rem;
  }
  
  .inner-careers .module-cta .title h2 {
    font-size: 2rem;
  }
  
  .inner-careers .module-form .form-wrapper {
    padding: 2rem 1.5rem;
  }
  
  .inner-careers .module-positions .position-item {
    flex-direction: column;
    gap: 1rem;
  }
  
  .inner-careers .position-actions {
    text-align: center;
  }
}
</style>

<script>
jQuery(document).ready(function($) {
  // Handle form submission
  $('#careersForm').on('submit', function(e) {
    e.preventDefault();
    
    var $form = $(this);
    var $submitBtn = $form.find('button[type="submit"]');
    var $message = $('#formMessage');
    
    // Disable submit button
    $submitBtn.prop('disabled', true);
    
    // Clear previous messages
    $message.removeClass('success error').hide();
    
    // Create FormData for file uploads
    var formData = new FormData(this);
    
    $.ajax({
      url: '<?php echo admin_url('admin-ajax.php'); ?>',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response.success) {
          $message.addClass('success').text(response.data).fadeIn();
          $form[0].reset();
        } else {
          $message.addClass('error').text(response.data).fadeIn();
        }
      },
      error: function() {
        $message.addClass('error').text('An error occurred. Please try again.').fadeIn();
      },
      complete: function() {
        $submitBtn.prop('disabled', false);
      }
    });
  });
  
  // File upload validation
  $('#resume').on('change', function() {
    var file = this.files[0];
    if (file) {
      var allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
      if (allowedTypes.indexOf(file.type) === -1) {
        alert('Please upload a PDF, DOC, or DOCX file.');
        this.value = '';
      }
    }
  });
  
  $('#cover_letter').on('change', function() {
    var file = this.files[0];
    if (file) {
      var allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
      if (allowedTypes.indexOf(file.type) === -1) {
        alert('Please upload a PDF, DOC, or DOCX file.');
        this.value = '';
      }
    }
  });
});
</script>

<?php get_footer(); ?>
