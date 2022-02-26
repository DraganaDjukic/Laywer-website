<?php

if (is_home() && get_option('page_for_posts')) {
  $leadSubtitle = get_field('lead_subtitle', get_option('page_for_posts'));
  $leadDescription = get_field('lead_description', get_option('page_for_posts'));
  $leadImage = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
} else {
  $leadSubtitle = get_field('lead_subtitle');
  $leadDescription = get_field('lead_description');
  $leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
}


?>

<section class='welcome-to-lawyer'>
  <div class='container'>
    <div class='row'>
      <div class='col-12 col-md-5'>
        <article class='text-item animation slide-right' data-animation='slide-right'>
          <h1><?php echo $leadSubtitle ?></h1>
          <p><?php echo $leadDescription ?></p>
          <a href="aboutUs.html" class='btn rounded-pill' style="background-color: #1A77CD; color: white;">MORE ABOUT US</a>
        </article>
      </div>

      <div class='col-12 col-md-7'>
        <img src="<?php echo $leadImage; ?>">
      </div>
    </div>
</section>