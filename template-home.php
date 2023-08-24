<?php /* Template Name: Home */ get_header(); ?>

<!-- Full Page Intro -->

  <div class="comtaner-fluid" style="height: 100vh; background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
  <div class="col-12 text-center clifton-crest">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/Clifton_Crest.png" alt="Cifton Logo" style>
  </div>
</div>



<main class="container-fluid">
<section> <!-- Big News -->
<div class="row big-news bg-craft">
            <div class="col-md-6 col-xl-8 order-md-2 square-box-small inset-shadow" style="background-image:  url(' http://seanc275.sg-host.com/wp-content/uploads/2023/08/4team10.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
            <div class="col-md-6 col-xl-4 order-md-1 square-box text-middle-box">
              <div class="inner-middle-box">
                <h2>Our new menu has landed</h2>
                  <a class="a-hover" href="">
                    <button type="button" class="btn btn-primary">Primary</button>                  
                  </a>
              </div> 
            </div>
        </div>
        <div class="row big-news bg-craft pink-overlay">
            <div class="col-md-6 col-xl-8 square-box-small inset-shadow" style="background-image:  url(' http://seanc275.sg-host.com/wp-content/uploads/2023/08/4team10.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
            <div class="col-md-6 col-xl-4 square-box text-middle-box">
              <div class="inner-middle-box">
                <h2>Our new menu has landed</h2>
                <a class="a-hover" href="">
                    <button type="button" class="btn btn-secondary">Secondary</button>                  
                  </a>
              </div> 
            </div>
        </div>
 
    </section>
  <section class="row bg-craft blue-overlay">
    <div class="bg-dot">
    <div class="container">
      <div class="light-header text-center">
        <h2>Gallery</h2>
      </div>
        <div class="col-12 container gallery-parent">
          <div class="gallery-col">
            <div class="gallery-img pink-border bg-craft pink-overlay">
             <img  src=" http://seanc275.sg-host.com/wp-content/uploads/2023/08/CD1_7017-scaled.jpg" />
            </div>
            <div class="gallery-img bg-craft pink-overlay gallery-portrait-left">
              <img src=" http://seanc275.sg-host.com/wp-content/uploads/2023/08/CD1_4337-scaled-e1692009330431.jpg" />
            </div>
          </div>
          <div class="gallery-col gallery-col-middle">
           <div class="gallery-img bg-craft pink-overlay">
              <img src=" http://seanc275.sg-host.com/wp-content/uploads/2023/08/CD1_2383-scaled.jpg" />
            </div>
            </div>
          <div class="gallery-col hide-lg">
            <div class="gallery-img bg-craft pink-overlay gallery-portrait-right">
            <img class="" src=" http://seanc275.sg-host.com/wp-content/uploads/2023/08/CD1_5855.jpg" />
            </div>
            <div class="gallery-img bg-craft pink-overlay">
              <img  src=" http://seanc275.sg-host.com/wp-content/uploads/2023/08/CD1_2464-HDR-Edit-scaled.jpg" />
            </div>
 
          </div>
        </div>
        <div class="btn-50 pt-5 pb-5">
 
            <a class="a-hover" href="">
                <button type="button" class="btn btn-light">See more pictures</button>
              </a>  
         
      </div>  
      </div>
  </section>
  <section class="whats-on row bg-craft">
      <div class="col-12">
      <div class="dark-header text-center">
          <h2>What's On</h2>
      </div>
      <div class="container">

      <div class="row g-5">
        <div class="col-12 col-lg-7 col-xl-6">
         <?php $the_query = new WP_Query( 'cat=1&posts_per_page=1' );
                      if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                    <div class="row">
                    <a href="<?php echo get_permalink() ?>" class="border bg-craft pink-overlay" >
                      <div  class="square-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                      </div>

                      </a>
                      <div class="">
                        <h3 class="pt-4"> <?php the_title(); ?> </h3>
                        <div class="" >  <?php the_excerpt(); ?>  
                        </div>
                        <a class="a-hover" href="">
                          <button type="button" class="btn btn-primary">more</button>
                        </a>  
                      </div>
                    </div>
          <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>

        </div>
        <div class="col-8 col-lg-5 col-xl-6 d-none d-lg-block">

          <?php $the_query = new WP_Query( 'cat=1&posts_per_page=2&offset=1' );
                      if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                    <div class="row blog-2-3">
                   
                    <a href="<?php echo get_permalink() ?>" class="col-12 col-xl-8 border bg-craft pink-overlay" >
                        <div class="square-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                        </div>
                  
                      </a>
                      <div class="col-12 col-xl-4 g-lg-0 g-xl-5 pt-lg-2 pt-xl-0">
                        <h3 class=""> <?php the_title(); ?> </h3>
                      <p class="d-none d-xxl-block">  <?php echo wp_trim_words(get_the_excerpt(), 8); ?>  
                      </p>
                      <a class="a-hover" href="">
                          <button type="button" class="btn btn-primary">more</button>
                        </a>                        </div>
                    </div>
          <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>

        </div>
      </div>
      </div>
    </div>
  </section>
        </main>
<?php get_footer(); ?>