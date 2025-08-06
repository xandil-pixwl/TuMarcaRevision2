//Identifica cuando los elementos entran en la vista
const observador = new IntersectionObserver((entradas) => {
  entradas.forEach(entrada => {
    if (entrada.isIntersecting) {
      entrada.target.classList.add('visible');
    }
  });
}, {
  threshold: 0.1 //Activa cuando el 10% del elemento está visible
});

//aplica a todos los elementos con clase 'animado'
document.querySelectorAll('.animado').forEach(seccion => {
  observador.observe(seccion);
});
