    <header>
      <nav class="navbar navbar-expand-lg justify-content-between">
        <div class="container">
          <a class="navbar-brand" href="/"><h1 class="text-hide m-0">The Hearld Group</h1></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hgNavDrop" aria-controls="hgNavDrop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php
            wp_nav_menu([
              'menu'            => 'main',
              'theme_location'  => 'main',
              'container'       => 'div',
              'container_id'    => 'mainNav',
              'container_class' => 'collapse navbar-collapse justify-content-end',
              'menu_id'         => false,
              'menu_class'      => 'navbar-nav',
              'depth'           => 2,
              'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
            ]);
          ?>
        </div>
      </nav>
    </header>