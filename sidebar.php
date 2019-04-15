<div class="col-lg-4 col-md-12 col-sm-12">
                <aside class="widget-area right-widget-area" style="">
                    <section class="widget widget_search">
                        <form method="get" class="search-form" action="<?php bloginfo('url'); ?>">
                            <div class="input-group">
                                <input type="text" class="form-control" name="s" value="" placeholder="Pesquisa...">
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </section>
                    <section class="widget widget_categories border-li">
                        <h3 class="widget-title">Categorias</h3>
                        <ul>
                            <?php
								   $categories_sidebar = get_categories();
								   //print_r($categories_sidebar);
									foreach ( $categories_sidebar as $category ) {
										$tag_link_side = get_category_link( $category->term_id );

										$htmlSide .= "<li class='cat-item'><a href='{$tag_link_side}' title='{$category->cat_name}'>";
										$htmlSide .= "{$category->name}</a></li>";
									}
								 	echo $htmlSide; ?>
                        </ul>
                    </section>
                    <?php /*<section class="widget markut_popular_post_widget border-li">
                        <h3 class="widget-title">Próximos Eventos</h3>
                        <div class="widget-content">
                            <ul class="post-eventos">
                                <li>                         
                                    <div class="side-image">
                                        <a href="#" rel="bookmark">
                                            <img width="80" height="80" src="<?php bloginfo('template_url'); ?>/images/noticias/noticia1.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="side-item-text">
                                        <p><span>October 4, 2018</span></p>
                                        <a href="#" rel="bookmark">Do right now to feel less</a>
                                        
                                    </div>                             
                                </li>
                                <li>                         
                                    <div class="side-image">
                                        <a href="#" rel="bookmark">
                                            <img width="80" height="80" src="<?php bloginfo('template_url'); ?>/images/noticias/noticia1.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="side-item-text">
                                        <p><span>October 4, 2018</span></p>
                                        <a href="#" rel="bookmark">Do right now to feel less</a>
                                        
                                    </div>                             
                                </li>
                                <li>                         
                                    <div class="side-image">
                                        <a href="#" rel="bookmark">
                                            <img width="80" height="80" src="<?php bloginfo('template_url'); ?>/images/noticias/noticia1.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="side-item-text">
                                        <p><span>October 4, 2018</span></p>
                                        <a href="#" rel="bookmark">Do right now to feel less</a>
                                        
                                    </div>                             
                                </li>
                            </ul>
                        </div>
                    </section>*/ ?>
                    <section class="widget widget_categories border-li arquivos">
                        <h3 class="widget-title">Arquivos</h3>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12, 'format' => 'html' ) ); ?> 
                        </ul>
                    </section>
                    <section class="widget widget_categories">
                        <h3 class="widget-title">Curta nossa página</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/WDCNetworks/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WDCNetworks/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WDCNetworks/">WDC Networks</a></blockquote></div>
                    </section>
                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Popular Tags</h3>
      
                         <?php
								   $tags = get_tags();
								   //print_r($categories);
									foreach ( $tags as $tag ) {
										$tag_link = get_tag_link( $tag->term_id );

										$htmlTag .= "<a class='tag-cloud-link' href='{$tag_link}' title='{$tag->cat_name}'>";
										$htmlTag .= "{$tag->name}</a>";
									}
								 	echo $htmlTag; ?>
                    </section>
                </aside>
            </div>