regalos = [
    {
        imagen: '../img/miniso.webp',
        titulo: 'Miniso'
    },
    {
        imagen: '../img/secadora.webp',
        titulo: 'Remington'
    },
    {
        imagen: '../img/perrito.webp',
        titulo: 'Planeta Animal'
    },
    {
        imagen: '../img/covid.webp',
        titulo: 'Antic-Pandemic'
    },
    {
        imagen: '../img/barbero.webp',
        titulo: 'Los Barberos'
    },
    {
        imagen: '../img/joya.webp',
        titulo: 'Veintitres 23'
    },
    {
        imagen: '../img/puros.webp',
        titulo: 'Cigar Box'
    },
    {
        imagen: '../img/gel.webp',
        titulo: 'Higiene y Salud'
    }

];

function generarRegalos(){
    regalos.forEach(function(rega){
        document.getElementById('regalos').innerHTML +=
        `<div style="cursor: pointer"  class="card col-4">
        <img src="${rega.imagen}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">${rega.titulo}</p>
        </div>
      </div>`;
        
    });
}
generarRegalos();