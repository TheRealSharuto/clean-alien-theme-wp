<?php 
/**
 * Header Navigation template.
 * 
 * @package CleanAlien
 */
?>
<header>
<nav class="navbar navbar-expand-lg">
        <!-- container wrapper -->
        <div class="container-fluid">
            <!-- Site Logo and Name -->
            <a class="navbar-brand me-2 px-2" href="#">
                <?php
                    if(function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <img src=<?php echo $logo[0] ?>" alt="Cute Purple Alien" class="d-inline-block"
                    loading="lazy">
                    <?php echo get_bloginfo('name'); ?>
            </a>
            <!-- End of Site Logo and Name -->
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- toggle button -->
            <!-- Navbar toggles these links -->
            <div class="collapse navbar-collapse" id="navbarNav">

            <?php wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
                    )
                );
            ?>
                <!-- left links end -->
            </div>

            <!--  right elements -->
            <div class="d-flex align-items-center me-3">
                <div class="dropdown me-3">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle" src="assets/images/user-profile.png" alt="User Profile"
                            loading="lazy">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="layouts/dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="layouts/logout.html">Log Out</a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
            <!-- left links end -->

        </div>
        <!-- end of toggled links -->
    </nav>
</header>