

<?php get_header(); ?>

<main role="main">
index.php
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
     
      <div class="row">

        <!-- Boucle -->
        <?php

        while(have_posts()){
          the_post(); ?>

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
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div><!-- Fermeture de col-md-4 -->

            <?php } ?>


      </div><!-- Fermeture de Row //-->

    </div>
  </div>

</main>

<?php get_footer(); ?>
