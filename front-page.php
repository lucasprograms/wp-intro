<?php get_header() ?>
  <?php if ( have_posts() ) : ?>
    <div id="carouselExampleControls" class="carousel slide row justify-content-center align-items-center posts" data-ride="carousel" data-interval="false">
      <a class="carousel-control-prev col-2" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-arrow carousel-arrow--previous" aria-hidden="true">&#x2B05;</span>
        <span class="sr-only">Previous</span>
      </a>
      <div class="carousel-inner col-8 align-self-start">
        <?php $post_idx = 0; while ( have_posts() ) : the_post(); ?>
          <div class="carousel-item <?php echo ($post_idx == 0 ? 'active' : '') ?>">
            <h3 class="row">
              <div class="col-9"><?php the_title() ?></div>
              <div class="col-3 text-right"><?php the_time() ?></div>
            </h3>
            <p><?php the_content() ?></p>
          </div>
          <?php $post_idx++ ?>
        <?php endwhile; ?>
      </div>
      <a class="carousel-control-next col-2" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-arrow carousel-arrow--next" aria-hidden="true">&#x2B05;</span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <?php endif; ?>
<?php get_footer() ?>