<?php
    if (have_posts()) {
    ?>
        <section class="news">
            <div class="container">
                <?php
                while (have_posts()) {
                    the_post();

                    ?>
                    <div class="row justify-content-md-between news-items my-4 my-md-0">
                    <div class="col-12 mb-3 col-md-6 mb-md-0">
                        <h2 class="news-title">
                            <?php the_title();?>
                        </h2>
                        
                            <?php the_excerpt(); ?>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more">READ MORE</a>
                    </div>

                    <div class="col-12 col-md-5 parent">
                        <img src="<?php the_post_thumbnail('news-list');?>
                    </div>
                </div>
                <?php
                }
                ?>
                

            </div>
        </section>

    <?php
    } else {
    ?>
        <section class="news">
            <div class="container">
                <div class="jumbotron">
                    <h3>There are no posts to show</h3>
                </div>
            </div>
        </section>
    <?php
    }
    ?>