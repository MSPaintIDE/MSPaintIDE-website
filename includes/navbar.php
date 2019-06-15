<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/#"><img src="/images/logos/ms-paint-logo-colored.png" alt="Logo"/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav m-auto">
                <?php
                foreach ([
                             'Home' => '',
                             'About' => 'about',
                             'Features' => 'features',
                             'Advantages' => 'advantages'
                         ] as $display => $anchor) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#<?php echo $anchor; ?>"><?php echo $display; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>