<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div id="site-wrap">

    <section id="hero">
      <div class="wrap container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>Quality · Service · Convenience</h1>
            <a href="#" class="btn btn-primary btn-lg">Place Order</a>
          </div>
        </div>
      </div>
    </section>

    <section id="section1">
      <div class="wrap container">
        <div class="row">
          <div class="col-sm-4">
            <h3>Pickup & Deliver</h3>
            <div id="box"></div>
            <p>
              Finder performance Downloads $399 change SSD A8X amazing. Hi-res thunderbolt Mavericks $599 screen. Better translucent Spotlight love better touch. Finder Smart Cover Cupertino $799 iTunes.
            </p>
            <h3>Pickup & Deliver</h3>
            <div id="box"></div>
            <p>
              Finder performance Downloads $399 change SSD A8X amazing. Hi-res thunderbolt Mavericks $599 screen. Better translucent Spotlight love better touch. Finder Smart Cover Cupertino $799 iTunes.
            </p>
          </div>
          <div class="col-sm-4 text-center">
            <h3>
              In by 10am, Ready by 4pm<br>
              6 Days a Week<br>
              Dry Cleaning and Laundry
            </h3>
            <h3 class="hours">Hours</h3>
            <p>
              Monday – Friday 7:00 am – 7:00 pm
            </p>
            <p>
              Saturday 8:00 am – 6:00 pm
            </p>
            <p>
              Sunday Closed
            </p>
          </div>
          <div class="col-sm-4">
            <h3>Location</h3>
            <address>
              <strong>Twitter, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
              <strong>Full Name</strong><br>
              <a href="mailto:#">first.last@example.com</a>
            </address>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section id="section2">
      <div class="wrap container">
        <div class="row">
          <div class="col-sm-12">
            <h3>Cupertino Retina Apple Zoom Yosemite</h3>
            <p>
              Download our free mobile app for iPhone and Android devices (including iPad and tablets) to instantly access great deals! It’s as easy as 1,2,3.
            </p>
            <ol>
              <li>Apple Pay call iBooks Apple remote lock new features.</li>
              <li>Apple Pay call iBooks Apple remote lock new features.</li>
              <li>Apple Pay call iBooks Apple remote lock new features.</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

  </div>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
