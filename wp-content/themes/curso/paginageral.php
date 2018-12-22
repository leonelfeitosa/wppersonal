<?php 
/*
Template Name: Páginas Gerais
*/
 ?>


    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Serviços</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Musculação</h3>
              <p class="text-muted mb-0" id="descricao_musculacao">DESCRICÃO MUSCULAÇÃO.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-thumbs-o-up text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Emagrecimento</h3>
              <p class="text-muted mb-0">A obesidade está cada vez mais presente na vida dos brasileiros, uma das principais medicas para combater esse problema é a atividade física acompanhada de uma boa alimentação.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-refresh text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"> Acompanhamento diario</h3>
              <p class="text-muted mb-0">A atividade física não pode ser praticada apenas uma vez na vida, se deve ser feito um acompanhamento diário para que suas atividades passem a serem melhores execultadas.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Qualidade de Vida</h3>
              <p id="imagem"></p>
              <p class="text-muted mb-0">A atividade física deve ser praticada por todas as pesssoas, expecialmente as que necessitam de um acompanhamento especial.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
    <?php 
						// Se houver algum post
						if(have_posts()) :
							// Enquanto houver algum post, chame o post de determinada maneira
							while (have_posts()) : the_post();
					?>
						<h1><?php the_title(); ?></h1>
						<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
						<p>Categorias: <?php the_category(' '); ?></p>
						<p><?php the_tags('Tags: ', ', '); ?></p>
						<p><?php the_content(); ?></p>
					<?php 
					endwhile;
					else:
					 ?>
						<p>Nao tem nada ainda pra mostrar</p>
					<?php 
					endif;
					?>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Solicite um orçamento!</h2>
        <a class="btn btn-light btn-xl sr-button js-scroll-trigger" href="#contact">Agora!</a>
      </div>
    </section>
<?php get_footer(); ?>
