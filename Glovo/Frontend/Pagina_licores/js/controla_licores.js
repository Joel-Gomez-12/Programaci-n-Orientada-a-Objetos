licor = [
    {
        imagen: '../img/colonia.webp',
        titulo: 'Supermercados La Colonia'
    },
    {
        imagen: '../img/walmart-card.webp',
        titulo: 'Walmart'
    },
    {
        imagen: '../img/paiz.jpg',
        titulo: 'Supermercados Paiz'
    },
    {
        imagen: '../img/pronto.jpg',
        titulo: 'Pronto'
    },
    {
        imagen: '../img/maxi.webp',
        titulo: 'Maxi Despensa'
    },
    {
        imagen: '../img/pressto.webp',
        titulo: 'Pressto Food'
    },
    {
        imagen: '../img/cerveceria.webp',
        titulo: 'Cervecería Hondureña'
    },
    {
        imagen: '../img/esquina.webp',
        titulo: 'La Esquina Tegus'
    },
    {
        imagen: '../img/favorito.webp',
        titulo: 'Tus Favoritos En Casa'
    },
    {
        imagen: '../img/hatsu.webp',
        titulo: 'Hatsu'
    },
    {
        imagen: '../img/nestle.jpg',
        titulo: 'Tienda Nestlé'
    }


];

function generarSupers(){
    licor.forEach(function(lico){
        document.getElementById('licores').innerHTML +=
        `<div style="cursor: pointer"  class="card col-4">
        <img src="${lico.imagen}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">${lico.titulo}</p>
        </div>
      </div>`;
        
    });
}
generarSupers();