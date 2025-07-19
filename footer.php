    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/5.jpg);">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <?php 
                                $footer_logo = get_field('footer_logo', 'options');
                                $footer_description = get_field('footer_description', 'options');
                            ?>
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <?php if(!empty($footer_logo)) { ?>
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="<?php echo home_url(); ?>"><img src="<?php echo $footer_logo; ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>
                                        </figure>
                                    </div>
                                    <?php } ?>
                                    <div class="widget-content">
                                        <div class="text"><?php echo $footer_description; ?></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Recent Posts</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/post-thumb-1.jpg" alt=""></a></div>
                                            <h4><a href="blog-detail.html">Triangle Concrete House on lake</a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                                <li>3 Comments</li>
                                            </ul>  
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/post-thumb-2.jpg" alt=""></a></div>
                                            <h4><a href="blog-detail.html">The Amazing Interior for the Hotel art</a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                                <li>3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>         
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                 <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Useful links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="<?php echo home_url(); ?>/about">About</a></li>
                                            <li><a href="<?php echo home_url(); ?>/services">Services</a></li>
                                            <li><a href="<?php echo home_url(); ?>/projects">Project</a></li>
                                            <li><a href="<?php echo home_url(); ?>/blog">News</a></li>
                                            <li><a href="<?php echo home_url(); ?>/contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h2 class="widget-title">Recent Works</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            <figure class="image">
                                                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/work-thumb-1.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/work-thumb-2.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/work-thumb-3.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/work-thumb-4.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/work-thumb-5.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/6.jpg" class="lightbox-image" title="Image Title Here"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/work-thumb-6.jpg" alt=""></a>
                                            </figure>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                    
                    </div>
                </div>
            </div>
        </div>
		<?php wp_footer(); ?>
    </footer>
    <!-- End Main Footer -->

    

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>

</body>


</html>