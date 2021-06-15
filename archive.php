<?php get_header(); ?>

test depuis archive
<main role="main">
<section class="jumbotron text-center">
    <div class="container">
      <h1>
      <?php
        // if(is_category()){
        //     echo '<h2>Ici une catégorie</h2>';
        // }else if(is_author()){
        //     echo '<h2>' .' ' . the_author() . '</h2>';
        // }
        the_archive_title(); 
        
      ?>
      
      
      </h1>
      
    </div>
  </section>



<?php while(have_posts()){
    the_post(); ?>

<section class="jumbotron text-center">

    <div class="container">

    




      <h1>
        <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
        </a>
      </h1>
      <p class="lead text-muted"><?php the_content(); ?></p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <!-- <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div> -->
              
                <small class="text-muted">
                  
                  </small>
                  <small class="text-muted">posté le <?php echo get_the_date(); ?></small>
                  <small class="text-muted">Catégorie <?php the_category(); ?></small>
              </div>
            </div>
          </div>
        </div>

        <!-- Placer le formulaire de commentaires -->

      

      </div>
      
 


    </div>
  </div>

<?php 
} ?>
 

</main>

<?php get_footer(); ?>
