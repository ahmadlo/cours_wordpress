
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post">
<header>
    <div class="title">
    <?php
        if ( is_single() ) {
            
				the_title( '<h1 >', '</h1>' );
			} else {
				the_title( '<h2 ><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
     ?>

    
        <!--<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>-->
    </div>
    <div class="meta">
    

        <time class="published" datetime="<?php the_time('y-m-d');?>"><?php the_time('j F Y');?></time>
        <a href="#" class="author"><span class="name"><?php the_author();?></span>
        <!--<img src="images/avatar.jpg" alt="" />-->
        </a>
    </div>
</header>
<?php 
    if (has_post_thumbnail() ) {
        if(is_single()):
        the_post_thumbnail('large');
        else:
        the_post_thumbnail('medium');
        endif;

            
			}
?>



<p><?php 
    if ( is_single() ) {
            
				the_content();
			} else {
				the_excerpt();
			}
?></p>
<footer>
<ul class="actions">
<?php 
    if (! is_single() ) {
            ?>

        <li><a href="<?php the_permalink();?>" class="button big">Continue Reading</a></li>
    			<?php 
                }
            else{
                 //next_post_link('%link', 'Article Suivant')
                ?>
                <!--Adding button for next and previsou post-->
        <li class="button big next"> <?php next_post_link('%link', 'Article Suivant'); ?></li>
        <li class="button big previous"> <?php previous_post_link('%link', 'Article Précédent'); ?></li>


   <?php 
                

        
			}
?>
 </ul>

    
    <ul class="stats">
        <li><a href="#"><?php the_category(', ');?></a></li>
        <li><a href="#" class="icon fa-heart">28</a></li>
        <li><a href="#" class="icon fa-comment">128</a></li>
    </ul>
</footer>
</article>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!-- Post -->


						