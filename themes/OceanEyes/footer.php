        <footer>
           <div id="footer-inner">
           <nav id="footer-nav">
               <div class="nav-boxfooter">
                <?php
                   $args = array(
                   'container' => false,
                   );
                   wp_nav_menu($args);
                 ?>
               </div>
            </nav>
            <div class="footer-copyright">
                <p>&copy;<?php echo date('Y'); ?> <?php echo bloginfo('name'); ?> All rights reserved</p>
            </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
