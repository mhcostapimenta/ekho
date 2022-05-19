var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);

jQuery(document).ready(function () {
  // Função para abrir o modal de navegação
  function abrirNavDoc() {
    // jQuery("#modal-nav").stop().animate({opacity:"1"}, 200);
    jQuery('#navDocs').animate(
      {
        top: '0',
      },
      400,
    );
    jQuery('.btn-documentos').addClass('active');
    jQuery('#navDocs').addClass('active');
  }

  // Função para abrir o modal de navegação
  function fecharNavDoc() {
    // jQuery("#modal-nav").stop().animate({opacity:"1"}, 200);
    jQuery('#navDocs').animate(
      {
        top: '-100%',
      },
      400,
    );
    jQuery('.btn-documentos').removeClass('active');
    jQuery('#navDocs').removeClass('active');
  }

  // Botão abrir Nav Documentos
  jQuery('.btn-documentos').click(function (e) {
    e.preventDefault();
    if (jQuery('#navDocs').hasClass('active')) {
      fecharNavDoc();
    } else {
      abrirNavDoc();
    }
  });

  // Botão fechar Nav Documentos
  jQuery('.btn-close-nav').click(function (e) {
    e.preventDefault();
    fecharNavDoc();
  });
});
