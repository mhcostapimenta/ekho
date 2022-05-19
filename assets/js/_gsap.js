function zeraContador() {
  jQuery('.counter').each(function () {
    var $this = jQuery(this);
    $this.text('0');
    countTo = '0';
  });
}

function contador() {
  zeraContador();
  jQuery('.counter').each(function () {
    var $this = jQuery(this),
      countTo = $this.attr('data-count');

    jQuery({ countNum: $this.text() }).animate(
      {
        countNum: countTo,
      },

      {
        duration: 1000,
        easing: 'linear',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
        },
      },
    );
  });
}

// Animações  gom GSAP Greensock

// Registra plugin Scroll Trigger
gsap.registerPlugin(ScrollTrigger);

// Animações Topo
const timelineTopo = gsap.timeline({});

timelineTopo
  .from(
    '.seta',
    {
      duration: 1.5,
      x: -20,
      autoAlpha: 0,
      ease: 'power3.out',
    },
    'together',
  )
  .from(
    '.deusa',
    {
      duration: 2,
      x: -50,
      autoAlpha: 0,
      ease: 'power3.out',
    },
    'together',
  )
  .from(
    '.content h2',
    {
      duration: 0.7,
      y: 30,
      autoAlpha: 0,
      ease: 'power3.out',
    },
    '-=1',
  )
  .from(
    '.content p',
    {
      duration: 1,
      y: 20,
      autoAlpha: 0,
      ease: 'power3.out',
    },
    '-=0.7',
  );

// // Animações Topo com Trigger
// const timelineTopoTrigger = gsap.timeline({
//   scrollTrigger: {
//     trigger: '#topo',
//     start: 'center+=10% top+=20%',
//     end: 'bottom center-=10%',
//     scrub: true,
//     markers: true,
//   },
//   duration: 0.5,
// });

// timelineTopoTrigger
//   .to('#topo .deusa', {
//     x: -50,
//     // autoAlpha: 0,
//     ease: 'power3.out',
//   })
//   .to('#topo .seta', {
//     delay: 0.5,
//     x: 50,
//     // autoAlpha: 0,
//     ease: 'power3.out',
//   });

// Animação Quem Somos Trigger
const timelineQuemSomosTrigger = gsap.timeline({
  scrollTrigger: {
    trigger: '#quemsomos',
    start: 'top center+=15%',
    end: 'bottom center-=15%',
    scrub: true,
  },
});

timelineQuemSomosTrigger
  .from('#quemsomos .title-section', {
    duration: 0.7,
    y: 50,
    autoAlpha: 0,
    ease: 'power3.out',
  })
  .from(
    '#quemsomos .content-section',
    {
      duration: 1,
      y: 30,
      autoAlpha: 0,
      ease: 'power3.out',
    },
    '-=0.3',
  );

// Animação Big Numbers Trigger
const timelineBigNumbersTrigger = gsap.timeline({
  scrollTrigger: {
    trigger: '#bignumbers',
    start: 'top+=15% center+=20%',
    end: 'center center+=5%',
    scrub: true,
    // markers: true,
  },
});

timelineBigNumbersTrigger
  .from('#bignumbers .content', {
    x: 50,
    autoAlpha: 0,
    ease: 'power3.out',
  })
  .from(
    '#bignumbers .graph-row',
    {
      duration: 0.5,
      autoAlpha: 0,
      x: -100,
      ease: 'power3.out',
      stagger: 0.15,
      onStart: () => contador(),
    },
    '-=0.5',
  );

// Animação Serviços Trigger
const timelineServicosTrigger = gsap.timeline({
  scrollTrigger: {
    trigger: '#areas',
    start: 'top center',
    end: 'bottom-=20% center+=10%',
    scrub: true,
  },
});

timelineServicosTrigger
  .from('#areas .title-section', {
    duration: 0.7,
    y: 50,
    autoAlpha: 0,
    ease: 'power3.out',
  })
  .from(
    '#areas .content-section',
    {
      duration: 1,
      y: 30,
      autoAlpha: 0,
      ease: 'power3.out',
    },
    '-=0.3',
  )
  .from(
    '#areas .service-row',
    {
      duration: 0.5,
      x: 50,
      autoAlpha: 0,
      ease: 'power3.out',
      stagger: 1,
    },
    '-=1',
  );

// Animação Equipe Trigger
const timelineEquipeTrigger = gsap.timeline({
  scrollTrigger: {
    trigger: '#partners',
    start: 'top bottom-=15%',
    end: 'bottom-=30% center+=5%',
    scrub: true,
    // markers: true,
  },
});

timelineEquipeTrigger
  .from('#partners .title-section', {
    duration: 0.7,
    y: 50,
    autoAlpha: 0,
    ease: 'power3.out',
  })
  .from(
    '#partners .content-section',
    {
      duration: 1,
      y: 30,
      autoAlpha: 0,
      ease: 'power3.out',
    },
    '-=0.3',
  );
