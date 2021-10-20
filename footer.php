        </main>

        <footer class="main-footer" id="site-footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            footer
                        </li>
                        <?php 
                        // wp_nav_menu([
                        //     'menu'            => 'footer',
                        //     'theme_location'  => 'footer',
                        //     'container'       => '',
                        //     'items_wrap'     => '%3$s',
                        //     'menu_id'         => false,
                        //     'depth'           => 1,
                        //     'fallback_cb'     => 'bs4navwalker::fallback',
                        //     'walker'          => new bs4navwalker()
                        // ]); 
                        ?>
                    </ul>
                </nav>
            </div>
        </footer>

        
        <div class="loading-screen" id="loading-screen">
            <div class="loadbar"></div>
            <div class="loadbar-inner"></div>
        </div>

        

        <?php wp_footer(); ?>

    </body>

</html>