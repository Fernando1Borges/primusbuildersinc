  <?php
  /*
  Template Name: Name of Template
  */
  ?>



<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>



  <div class="container">
  <div class="row">
    <div class="title">
      <h1>About Us</h1>
    </div>
  </div>
  </div>
  <div class="about-image">
  </div>
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <section id="aboutus" class="body-text">

        <h3>Who We Are</h3>
        <p class="larger-text">
          We are a small team of dedicated professionals. We have built our business on
           positive recommendations from previous customers and on many repeat
           customers. We take pride in completing every project just as the customer had
           envisioned it. We bring your dreams to life! With over twenty years
           of experience in carpentry that our team has you can be sure that your
           project is done experty and that you can rely on expert consultation from
           us.
        </p>
        <p class="smaller-text">
          We specialize in custom carpentry projects of all kinds, whether
          it is custom wood work, finish carpentry, custom furniture or even
          a tree house, we have the knowledge and skill to expertly bring
          your project to life. Because our team is so small you can count on
          great communication and on us getting the job done just right.        </p>
      </section>
      <hr class="solid tall">
      <section id="history" class="body-text">

        <h3>History</h3>
        <img src="<?php bloginfo('template_directory');?>/img/tools003.jpeg" alt="" class="history-image">
        <p class="larger-text">
          Since the begining we have prided ourselves on every job done well and
          every satisfied customer. Our compnay had formed in 2007. Our team leader
          and owner Richard has been in the construction business since 1996.
          Richard brings his extensive experience in all areas of carpentry
          to every project.
         In the early 2000's, before starting this very successful business,
          he was co-owner of a construction company that had worked in all types of carpentry, including additions,
          new custom homes and multi story condo buildings.
        </p>
      </br>
      <p class="smaller-text">
        This extensive experience allows us to complete every project with
        precision and knowledge that it is of the highest standard. Our expert
        knowledge of all areas of carpentry makes us stand out among the competition.


      </p>

    </section>
    <hr class="solid tall">
    <section id="mission" class="body-text">

      <div class="row">
        <div class="col-xs-12 col-sm-6 about-column">

          <i class="fa fa-bullseye fa-5x"></i>
          <h4>Mission</h4>
          <p class="smaller-text">
            Our mission is to make sure every one of our customer is
            satisified and that the job is done up to the highest standard.
          </p>
        </div>
        <div class="col-xs-12 col-sm-6 about-column">
          <i class="fa fa-eye fa-5x"></i>
          <h4>Vision</h4>
          <p class="smaller-text">
            Striving to work closely with our customers to bring them the custom
            carpentry workmanship that they envision.
          </p>

          </div>
        </div>

      </section>

    </div>
  </div>
  </div>


      <?php endwhile; // end of the loop. ?>



    </div><!-- #content -->
  </div><!-- #primary -->


<?php get_footer(); ?>
