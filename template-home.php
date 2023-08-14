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



<main class="container-fluid">
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
</main
<?php get_footer(); ?>