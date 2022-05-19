<?php get_header(); ?>

<body class="empresas">

<!-- Sessão topo -->
<section id="topo">
    <div class="wrapper">
        <div class="video">
            <div class="bodymovin" data-bm-path="<?php echo get_template_directory_uri().'/assets/videos/data.json';?>" data-bm-renderer="svg"></div>
            <img class="logo" src="<?php echo get_template_directory_uri().'/assets/img/EKHO_logo_empresa.svg';?>" alt="Logo Ekho Empresas">
        </div>
        <div id="scene" data-relative-input="true" class="text">
            <div data-depth="0.3">
                <p><?php the_field('texto_empresas','options'); ?></p>
                <a href="mailto:<?php the_field('e-mail_family_office','options'); ?>"><?php the_field('e-mail_empresas','options'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Região de degradê atrás do Footer -->
<div class="degrade"></div>

<!-- Footer -->
<footer>
    <div class="leftFooter">
        <button aria-label="Baixar Documentos" class="btn btn-documentos" type="button">
            <i class="fas fa-arrow-down"></i>Documentos
        </button>
        <img class="seloAnbima" src="<?php echo get_template_directory_uri().'/assets/img/ANBIMA.svg';?>" alt="Selo ANBIMA">
    </div>
    <a href="<?php echo get_bloginfo('url'); ?>" aria-label="Página Empresas" class="btn btn-empresas" type="button">Family Office
        <i class="fas fa-angle-double-right"></i>
    </a>
</footer>

<!-- Navegação de documentos -->
<nav id="navDocs">
    <button class="btn btn-close-nav" type="button"></button>

    <!-- Links dos arquivos -->
    <?php if( have_rows('documentos_empresas', 'option') ): ?>

    <ul>

        <?php while( have_rows('documentos_empresas', 'option') ): the_row(); ?>

            <li><a href="<?php the_sub_field('arquivo_empresas');?>" target="_blank"><?php the_sub_field('nome_empresas');?></a></li>

        <?php endwhile; ?>

    </ul>

    <?php endif; ?>

</nav>

<?php get_footer(); ?>