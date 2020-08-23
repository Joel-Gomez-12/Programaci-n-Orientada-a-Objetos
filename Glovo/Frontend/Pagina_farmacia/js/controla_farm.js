farmacia = [
    {
        imagen: '../img/puntofarm.webp',
        titulo: 'Punto Farma'
    },
    {
        imagen: '../img/opticas.webp',
        titulo: 'Opticas Santa Lucia'
    }
];

function generarFarmacia(){
    farmacia.forEach(function(farm){
        document.getElementById('farmacia').innerHTML +=
        `<div style="cursor: pointer"  class="card col-4">
        <img src="${farm.imagen}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">${farm.titulo}</p>
        </div>
      </div>`;
        
    });
}
generarFarmacia();