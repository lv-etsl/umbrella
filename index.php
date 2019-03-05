<?php get_header(); ?>

    <main class="main">

    <!-- boucle simple -->
    <?php if(have_posts()); ?>
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('content'); ?>>
          <header>
            <h1>
              <a href="<?php the_permalink(); ?>" >
                <?php the_title(); ?>
              </a>
            </h1>
            <div>

              <span>
                <i class="icon icon-calendar">test</i>Date de publication: <?php the_date(); ?>
              </span>

              <span>
                <i class="icon icon-category">test</i>Catégories: <?php the_category( ', ' ); ?>
              </span>

              <span>
                <i class="icon icon-tags">test</i>
                <?php the_tags(); ?>
              </span>

            </div>
          </header>

          <div>
            <?php the_content(); ?>
          </div>

          <div class="">
            <a href="<?php the_permalink(); ?>" class="btn">Lire l'article</a>
            <button class="btn" type="button" name="button"><a href="<?php the_permalink(); ?>">Lire l'article</a></button>
            <a href="<?php the_permalink(); ?>" class="btn-primary">Lire l'article</a>
          </div>

        </article>

      <?php endwhile; ?>

      <div class="">
        <div class="">
          <div class="nav-previous"><?php previous_posts_link( 'Older posts' ); ?></div>
        </div>
        <div class="pure-u-md-1-6">
          <div class="nav-next"><?php next_posts_link( 'Newer posts' ); ?></div>
        </div>
      </div>

    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
