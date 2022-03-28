   <div class="product-grid">
        <?php
            $args = array(
            'post_type' => 'product',
            'posts_per_page' => 4 ,
            'paged'          => $paged
        );
         $loop = new WP_Query( $args );
         if ( $loop->have_posts() ) {
          while ( $loop->have_posts() ) : $loop->the_post();?>
            <div class="p-grid-main">
                <div class="grid-p-img">
                    <a href="<?php echo get_the_permalink();?>" class="main-p-img d-block">
                        <?php echo get_the_post_thumbnail()?>
                    </a>
                    <!-- <img class="add-product" src="/wp-content/themes/storefront-child/svgs/sum-icon.svg" alt=""> -->
                </div>
                <div class="product-content">
                    <img class="dish-rating" src="/wp-content/themes/storefront-child/svgs/sum-star.svg" alt="">
                    <a href="<?php echo get_the_permalink();?>" class="product-name">
                        <div class="dish-name"><?php echo get_the_title();?></div>
                    </a>
                    <div class="pricing-main">
                        <div class="starting">starting
                            <div>
                            <?php
                            echo $product->get_price_html();
                            ?>
                            </div>
                        </div>
                        <div class="instock">instock
                            <div class="amount">$99.99</div>
                        </div>
                        <div class="discount">
                            -50%
                        </div>
                    </div>
                    <a href="<?php echo get_the_permalink();?>" class="btn-blue">shop now</a>
                </div>
            </div>
            <?php
             
                 endwhile;

             } else {
                 echo __( 'No products found' );
             }
             wp_reset_postdata();
            ?>