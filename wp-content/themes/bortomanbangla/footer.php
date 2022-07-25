<section class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-wapper">
                        <div class="footer-title">
                            <h2><i class="fa fa-user" aria-hidden="true"></i>About Us</h2>
                        </div>
                        <?php
                                if(is_active_sidebar('sidebar_one')){
                                    dynamic_sidebar('sidebar_one');
                                }
                            ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-wapper">
                        <div class="footer-title">
                            <h2><i class="fa fa-paper-plane" aria-hidden="true"></i>Top Stories</h2>
                        </div>
                        <?php
                                if(is_active_sidebar('sidebar_two')){
                                    dynamic_sidebar('sidebar_two');
                                }
                            ?>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-wapper">
                        <div class="footer-title">
                            <h2><i class="fa fa-paper-plane" aria-hidden="true"></i><?php echo esc_html('Latest posts','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                                if(is_active_sidebar('sidebar_three')){
                                    dynamic_sidebar('sidebar_three');
                                }
                            ?>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="cfooter-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="footer-copy-inner">
                        <p>© Copyright by <a href=""> Bortoman Bangla </a> <?php echo date("Y");?>. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="footer-copy-inner deelko">
                        <p> Made With <i class="fa fa-heart"></i> by <a href="http://www.deelko.com" target="_blank" rel="noopener noreferrer"> Deelko </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer area end -->
    <?php wp_footer();?>
</body>
</html>