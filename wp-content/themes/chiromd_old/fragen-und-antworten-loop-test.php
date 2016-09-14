<?php 
/*
Template Name: xFAQ
*/

get_header('other'); 
?>

			<div id="content" class="">
                <section id="entrance" class="firstsection chiropractice faq">
                    <div class="container padtop text-center">
                        <h1 class="text-center">
                            Nur Ärzte und Heilpraktiker dürfen chiropraktische Behandlungstechniken anwenden.
                        </h1>
                    </div>
                </section>
                
                <section id="welcome-info" class="secondsection">
                    <div class="container">
                        <h2 class="text-center uppercase">Fragen und Antworten</h2>
                        
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          
							<!-- wp panel section starts here -->
							<?php
							$n=1;
							$i=0;
							global $post;
							$args = array('category' => 3, 'posts_per_page' => 15,);
							$myposts = get_posts( $args );
							// $posts = get_post('category=3');
							foreach ( $myposts as $post ):setup_postdata($post);
							// foreach ( $posts as $post ) : setup_postdata( $post );
							?>
									<div class="panel">
									<div class="panel-heading" role="tab" id="heading<?php echo $n ?>">
									  <h4 class="panel-title">
										<a class="collapsed uppercase" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsing<?php echo $n ?>" aria-expanded="false" aria-controls="collapsing<?php echo $n ?>">
										  <span><?php the_title(); ?></span>
										</a>
									  </h4>
									</div>
									<div id="collapsing<?php echo $n ?>" class="panel-collapse collapse <?php if ($n==1) : ; ?>in<?php endif; ?>" role="tabpanel" aria-labelledby="heading<?php echo $n ?>">
									  <div class="panel-body">
										<!-- <p class="col-sm-9"></p> -->
										  <?php the_content(); ?>
									  </div>
									</div>
								  </div>
							
							<?php
							$n++;
							$i++;
							endforeach;
							wp_reset_postdata();
							?>
							<!-- wp panel section starts here -->
							
                        </div><!-- end #accordion -->    
                        
                    </div><!-- end .container -->  
                </section>
                
                
           </div>


<?php get_footer(); ?>