<?php /* Template Name: Home */ get_header(); ?>

<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<div class="view full-page-intro" style="background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->

<div class="clifton-crest">

<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/Clifton_Crest.svg" alt="Cifton Logo" style>






  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 



<main class="">
 <section> <!-- Big News -->
    <div class="row bg-craft big-news">
      <div class="col-md-6 col-xl-8 order-md-2 square-box-small inset-shadow" style="background-image:  url('http://localhost:8888/clifton/wp-content/uploads/2023/08/CD1_3289-scaled.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      </div>
      <div class="col-md-6 col-xl-4 order-md-1 square-box text-middle-box">
        <div class="inner-middle-box">
          <h2>Our new menu has landed</h2>
          <button type="button" class="btn btn-primary">Primary</button>
        </div>
        
      </div>
    </div>
    <div class="row bg-pink big-news">
      <div class="col-md-6 col-xl-8 square-box-small inset-shadow" style="background-image:  url('http://localhost:8888/clifton/wp-content/uploads/2023/08/4team10.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      </div>
      <div class="col-md-6 col-xl-4 square-box text-middle-box">
        <div class="inner-middle-box">
          <h2>Our new menu has landed</h2>
          <button type="button" class="btn btn-secondary">Primary</button>
        </div> 
      </div>
    </div>
  </section>
  <section class="row bg-dot">
    <div class="container">
      <div class="light-header text-center">
        <h2>Gallery</h2>
      </div>
        <div class="col-12 container gallery-parent">
          <div class="gallery-col">
            <img class="gallery-img" src="http://localhost:8888/clifton/wp-content/uploads/2023/08/CD1_7017-scaled.jpg" />
            <img class="gallery-img gallery-portrait-left" src="http://localhost:8888/clifton/wp-content/uploads/2023/08/CD1_4337-scaled-e1692009330431.jpg" />
          </div>
          <div class="gallery-col gallery-col-middle">
            <img class="gallery-img" src="http://localhost:8888/clifton/wp-content/uploads/2023/08/CD1_2383-scaled.jpg" />
          </div>
          <div class="gallery-col hide-lg">
            <img class="gallery-img gallery-portrait-right" src="http://localhost:8888/clifton/wp-content/uploads/2023/08/CD1_5855.jpg" />
            <img class="gallery-img" src="http://localhost:8888/clifton/wp-content/uploads/2023/08/CD1_2464-HDR-Edit-scaled.jpg" />
          </div>
        </div>
        <div class="text-center gallery-button">
          <button type="button" class="btn btn-light">Open full gallery</button>
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
        <div class="col-12 col-lg-4 col-xl-6">
         <?php $the_query = new WP_Query( 'cat=1&posts_per_page=1' );
                      if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                    <div class="">
                      <div class="square-box blog-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                      </div>
                      <div class="blog-content">
                        <h3 class=""> <?php the_title(); ?> </h3>
                        <div class="" >  <?php the_excerpt(); ?>  
                        </div>
                        <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">Read more</button></a>
                      </div>
                    </div>
          <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>

        </div>
        <div class="col-8 col-xl-6 d-none d-lg-block">

          <?php $the_query = new WP_Query( 'cat=1&posts_per_page=2&offset=1' );
                      if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                    <div class="row blog-2-3 g-5">
                      <div class="col-6 col-xl-8 square-box blog-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                      </div>
                      <div class="col-6 col-xl-4 blog-content">
                        <h3 class=""> <?php the_title(); ?> </h3>
                      <p>  <?php echo wp_trim_words(get_the_excerpt(), 15); ?>  
                      </p>
                        <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">more</button></a>
                      </div>
                    </div>
          <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>

        </div>
      </div>
      </div>
    </div>
  </section>
</main
<?php get_footer(); ?>