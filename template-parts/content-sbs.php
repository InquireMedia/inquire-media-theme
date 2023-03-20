<div class="col-md-6 story article-padded">
    <div class="card section-card" style="height: 480px;" onclick="divRedirection('<?php the_permalink();?>')">

        <!-- Check if thumbnail exists if it does add else create a blue box of the same size -->
        <?php if (has_post_thumbnail()) { ?>
            <img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Image Missing!">
        <?php } else { ?>
            <div class="card-img-top" style="background-color: #007bff;"></div>
        <?php } ?>
        <div class="card-body">
            <p class="card-text-bold"><?php echo the_title(); ?></p>
            <p class="card-text-italic">By <?php echo get_the_author_meta('user_login', $post->post_author); ?></p>
            <p class="card-text-italic"><?php echo get_the_category_list(', '); ?></p>
            <p class="card-text"><?php the_excerpt(); ?></p>
        </div>
    </div>
</div>