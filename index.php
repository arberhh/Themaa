<?php
/**
 * Template Name: FrontPage
 *
 */

get_header(); ?>
<!-- sections -->
<section id="services">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading text-uppercase">Our Services</h2>
      <h3 class="section-subheading text-muted">
        You will have access to the daily newsletter at any time, starting from the day you register. In just three steps you can register to become a regular reader of the Online Newsletter.</h3>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-4">
      <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
      </span>
      <h4 class="service-heading">Subscribe Now</h4>
      <p class="text-muted">
          Sign up quickly and easily by filling out the required fields in the membership area and wait for the confirmation.</p>
    </div>
    <div class="col-md-4">
      <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-money-check fa-stack-1x fa-inverse"></i>
      </span>
      <h4 class="service-heading">Choose your membership</h4>
      <p class="text-muted">After you register,you can choose the membership level that suits you best,and pay from your credit card,bank transfer,Pay Pal,Visa,Stripe etc.</p>
    </div>
    <div class="col-md-4">
      <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
      </span>
      <h4 class="service-heading">Read the newsletter</h4>
      <p class="text-muted">Once the registration is confirmed, you can read the online newsletter on your favorite device.</p>
    </div>
  </div>
</div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Examples</h2>
        <h3 class="section-subheading text-muted">Here you can find some examples about our newsletter.</h3>
      </div>
    </div>
    
    <div class="row">
    <?php 
    $btpgid = get_queried_object_id();
    $btmetanm = get_post_meta($btpgid, 'WP_Catid', 'true');
    // $paged = $_POST["page"];
    $args = array(
      'posts_per_page' => 3,
      'post_status' => 'publish',
      'category_name' => 'free',
      'paged' => '1',
      'post_type' => 'post'
    );
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : ?>
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?> 
            <div class='col-md-4 col-sm-6 portfolio-item'>
              <a class='portfolio-link' data-toggle='modal' href='<?php echo get_permalink(); ?>' class='modalOpen'>
            <div class='portfolio-hover'>
              <div class='portfolio-hover-content'>
                <i class='fas fa-plus fa-3x'></i>
              </div>
            </div>
            <div class="portfolio-caption">
              <h3>
                <?php the_title(); ?>
              </h3>
              <?php echo the_post_thumbnail('thumbnail'); ?>
            </div>
            </a>  
            </div>  
            <?php endwhile; ?>
        <?php wp_reset_postdata();
        endif; ?>
    </div>
</section>

  <!-- Abonohu -->   
  <div class="container-fluid padding" id="subscribe">
  <h6 class="section-subheading text-center" style="color:#212529">Choose your package</h6> 
    <div class="row padding">
      <div class="col-md-3 padding">
        <br>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">1 month</h4>
            <hr>
            <h1 class="card-text card-price">10.00&dollar;</h1>
            <hr>
            <p class="card-text">Monthly Subscription</p>
            <hr>
            <p class="card-text"> - </p>
            <hr>
            <p class="card-text">Newsletter archive</p>
            <hr>
            <p class="card-text">Help 24/7/365</p>
            <hr>
            <a href="membership-account/membership-checkout/?level=1" class="btn btn-primary">Subscribe now</a>		
          </div>
        </div>
      </div>
  <br>
      <div class="col-md-3 padding">
        <br>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">3 months</h4>
              <hr>
              <h1 class="card-text card-price">30.00&dollar;</h1>
              <hr>
              <p class="card-text">3 Months Subscription</p>
              <hr>
              <p class="card-text"> - </p>
              <hr>
              <p class="card-text">Newsletter archive</p>
              <hr>
              <p class="card-text">Help 24/7/365</p>
              <hr>
              <a href="membership-account/membership-checkout/?level=4" class="btn btn-primary">Subscribe now</a>		
            </div>
          </div>
      </div>
  <br>
    <div class="col-md-3 padding">
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">6 months</h4>
          <hr>
          <h1 class="card-text card-price">60.00&dollar;</h1>
          <hr>
          <p class="card-text">6 Months Subscription</p>
          <hr>
          <p class="card-text"> - </p>
          <hr>
          <p class="card-text">Newsletter archive</p>
          <hr>
          <p class="card-text">Help 24/7/365</p>
          <hr>
          <a href="membership-account/membership-checkout/?level=2" class="btn btn-primary">Subscribe now</a>			
        </div>
      </div>
    </div>
  <br>  
    <div class="col-md-3 padding">
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">1 year</h4>
          <hr>
          <h1 class="card-text card-price">110.00&dollar;</h1>
          <hr>
          <p class="card-text">Yearly Subscription</p>
          <hr>
          <p class="card-text"> One free month </p>
          <hr>
          <p class="card-text">Newsletter archive</p>
          <hr>
          <p class="card-text">Help 24/7/365</p>
          <hr>
          <a href="membership-account/membership-checkout/?level=3" class="btn btn-primary">Subscribe now</a>		
        </div>
      </div>
    </div>
  </div>
</div>
<br>
    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo get_template_directory_uri() . '/img/team/1.jpg'; ?>" alt="">
              <h4>Kay Garland</h4>
              <p class="text-muted">Lead Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo get_template_directory_uri() . '/img/team/2.jpg'; ?>" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo get_template_directory_uri() . '/img/team/3.jpg'; ?>" alt="">
              <h4>Diana Pertersen</h4>
              <p class="text-muted">Lead Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>
<!-- Contact -->
<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">For </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Modals -->
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
          <?php
          $args = array(
            'category_name' => 'free',
            'posts_per_page' => 1,
          );
          $query = get_posts($args);
          foreach ($query as $querys) { ?>
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php $querys->title ?></h2>
                  <p class="item-intro text-muted">Here is an example how our online newsletter works</p>
                  <img class="img-fluid d-block mx-auto" src="<?php  ?>" alt="">
                  <p></p>
                  <ul class="list-inline">
                    <li> <?php $post_date = get_the_date('D M j');
                        echo $post_date; ?> </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
            <?php 
          } ?>
          </div>
        </div>
      </div>
          </div>
<?php get_footer(); ?>
