<?php get_header(); ?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <h2>Posts récents (3 derniers)</h2>
      <div class="row">

        <!-- Boucle -->
        <?php

        $recentPosts = new WP_Query(array(
          'posts_per_page'  => 3
        )); 


        while($recentPosts -> have_posts()){
          $recentPosts -> the_post(); ?>

              <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                  <p class="card-text"><?php echo wp_trim_words(get_the_content(), 7); ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php the_permalink(); ?>">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                      </a>
                    </div>
                    <!-- Afficher le nombre de commentaire -->
                    <small class="text-muted">
                        <?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires'); ?>
                    </small>

                    <!-- Afficher la date -->
                    <small class="text-muted"><?php echo get_the_date(); ?></small>

                    <!-- Afficher le nom de l'auteur -->
                    <!-- <small class="text-muted"><?php the_author(); ?></small> -->

                    <!-- Afficher le nom de l'auteur + lien vers ses articles -->
                    <small class="text-muted"><?php the_author_posts_link(); ?></small>

                  </div>
                </div>
              </div>
            </div><!-- Fermeture de col-md-4 -->

            <?php } wp_reset_postdata(); ?>


      </div><!-- Fermeture de Row // Limite à 3 éléments-->


      <h2>Posts dans la catégorie Politique (3 derniers)</h2>
      <div class="row">

      <!-- 'posts_per_page' => 3, 
      'category_name'  => 'politique' -->

        <!-- Boucle pour afficher que la catégorie Politique -->
        <!-- Boucle -->
        <?php

        $politiquePosts = new WP_Query(array(
          'posts_per_page'  => 1, 
          'category_name'  => 'politique'
        )); 


        while($politiquePosts -> have_posts()){
          $politiquePosts -> the_post(); ?>

              <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                  <p class="card-text"><?php the_title(); ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    <!-- Afficher le nombre de commentaire -->
                    <small class="text-muted">
                        <?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires'); ?>
                    </small>

                    <!-- Afficher la date -->
                    <small class="text-muted"><?php echo get_the_date(); ?></small>

                    <!-- Afficher le nom de l'auteur -->
                    <!-- <small class="text-muted"><?php the_author(); ?></small> -->

                    <!-- Afficher le nom de l'auteur + lien vers ses articles -->
                    <small class="text-muted"><?php the_author_posts_link(); ?></small>

                  </div>
                </div>
              </div>
            </div><!-- Fermeture de col-md-4 -->

        <?php } wp_reset_postdata(); ?>

        
      


      </div><!-- Fermeture de row // Catégorie Politique -->


    </div>
  </div>

</main>

<?php get_footer(); ?>
