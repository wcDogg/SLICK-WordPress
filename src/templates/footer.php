 <?php
/**
 * footer.php
 * Displays the site footer
 * 
 * @package slick
 * @since slick 1.0
 */
?>   
    
    </main><!-- #main -->

	<footer id="footer" class="site__footer">

        <div class="section__amazon">
            <script type="text/javascript">
                amzn_assoc_placement = "adunit0";
                amzn_assoc_tracking_id = "slicksexy-20";
                amzn_assoc_ad_mode = "manual";
                amzn_assoc_ad_type = "smart";
                amzn_assoc_marketplace = "amazon";
                amzn_assoc_region = "US";
                amzn_assoc_linkid = "56aa8d028a625baf55649e81fa8343e4";
                amzn_assoc_asins = "B017T582ZS,B0161J28AI,B075SN1MY9";
                amzn_assoc_design = "in_content";
            </script>
            <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script> 
        </div><!-- .section__amazon -->

        <div class="section__amazon">
            <script type="text/javascript">
                amzn_assoc_placement = "adunit0";
                amzn_assoc_tracking_id = "slicksexy-20";
                amzn_assoc_ad_mode = "manual";
                amzn_assoc_ad_type = "smart";
                amzn_assoc_marketplace = "amazon";
                amzn_assoc_region = "US";
                amzn_assoc_design = "in_content";
                amzn_assoc_linkid = "8640ab8130aceea571655b9c5147658c";
                amzn_assoc_asins = "B01DL8ODCS,B00P0A2UU8,B00GBQAAKM";
            </script>
            <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>

        </div><!-- .section__amazon -->        

		<?php get_search_form(); ?>
		<?php get_template_part('parts/nav/nav', 'follow'); ?>

        <div class="site__copyright">
            <span class="meta">&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></span>
        </div>		

		<?php get_template_part('parts/nav/nav', 'footer');?>	
		
        <div class="site__legal ">
            <?php bloginfo( 'name' ); ?> is protected by reCAPTCHA V3. The Google <a rel="nofollow noopener" href="https://policies.google.com/privacy">Privacy Policy</a> and <a rel="nofollow noopener" href="https://policies.google.com/terms">Terms of Service</a> apply.
        </div>

        <div class="site__legal">
            <?php bloginfo( 'name' ); ?> is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.com.
        </div>
			
	</footer><!-- #footer -->

</div><!-- #site -->

<?php wp_footer(); ?>

<script>MobileMenu.init(); </script>
<script>OverlayHover.init(); </script>
<!-- #id of header, #id of container to pad -->
<!-- <script>StickyHeader.init("header", "main"); </script> -->

<?php

    // Flex accordions
    if ( is_page() || is_singular( 'post' ) ) :
        echo '<script>ToggleContent.init(); </script>'; 
    endif;	

    // Review Filters
    if ( is_page() || is_archive() ) :
        echo '<script>ToggleFilters.init(); </script>'; 
    endif;	

?>

</body>
</html>