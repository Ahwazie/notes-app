document.addEventListener('DOMContentLoaded', (event) => {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 100) {
        setTimeout(() => {
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }, 100);
      }
    });
  });
  