// GSAP + ScrollTrigger animation logic placeholder
// Replicate Codrops effects here

document.addEventListener('DOMContentLoaded', () => {
  // Hero image scale on scroll
  if (document.querySelector('.hero-image')) {
    gsap.to('.hero-image', {
      scale: 1.1,
      scrollTrigger: {
        trigger: '.hero',
        start: 'top top',
        end: 'bottom top',
        scrub: true
      }
    });
  }

  // Codrops-inspired grid layout formation effect
  document.querySelectorAll('[data-grid-first] .grid__img').forEach((img, i) => {
    gsap.from(img, {
      y: gsap.utils.random(window.innerHeight, window.innerHeight * 1.8),
      scale: 0.7,
      autoAlpha: 0,
      ease: 'power4',
      scrollTrigger: {
        trigger: img.parentNode,
        start: 'center center',
        end: '+=250%',
        scrub: 0.5,
        pin: img.parentNode,
      },
      stagger: 0.07
    });
  });

  // Title animation
  if (document.querySelector('.content__title')) {
    gsap.from('.content__title', {
      yPercent: 180,
      autoAlpha: 0,
      duration: 1.2,
      ease: 'power4',
      scrollTrigger: {
        trigger: '.content__title',
        start: 'top 80%',
        end: 'bottom top',
        scrub: true
      }
    });
  }

  // Text scroll-based animations for section headings and paragraphs
  document.querySelectorAll('.content__text, .type-tiny, h4, h2').forEach(textEl => {
    gsap.from(textEl, {
      y: 60,
      opacity: 0,
      scale: 0.98,
      duration: 1.1,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: textEl,
        start: 'top 90%',
        end: 'bottom 60%',
        scrub: true
      }
    });
  });

  // Parallax effect for gallery images
  document.querySelectorAll('.gallery .wp-post-image').forEach(img => {
    gsap.to(img, {
      y: -80,
      scale: 1.05,
      ease: 'power1.out',
      scrollTrigger: {
        trigger: img,
        start: 'top 80%',
        end: 'bottom 20%',
        scrub: true
      }
    });
  });

  // Section fade-in and translate for galleries
  document.querySelectorAll('.gallery').forEach(section => {
    gsap.from(section, {
      opacity: 0,
      y: 60,
      duration: 1,
      scrollTrigger: {
        trigger: section,
        start: 'top 90%',
        toggleActions: 'play none none reverse'
      }
    });
  });

  // Responsive adjustments for mobile
  ScrollTrigger.matchMedia({
    '(max-width: 768px)': function() {
      document.querySelectorAll('.gallery .wp-post-image').forEach(img => {
        gsap.to(img, {
          y: -30,
          scale: 1.02,
          scrollTrigger: {
            trigger: img,
            start: 'top 90%',
            end: 'bottom 10%',
            scrub: true
          }
        });
      });
    }
  });
});
