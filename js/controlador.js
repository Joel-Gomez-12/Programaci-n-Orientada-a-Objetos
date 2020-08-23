const url = '../../Glovo/Backend/api/registros.php';

function obtenerRegistros(){
    axios({
        method: 'GET',
        url:url,
        responseType:'json'
    }).then(res=>{
        console.log(res);
    }).catch(error=>{
        console.error(error);
    });
}
obtenerRegistros();



function guardarRegistro(){
    $('#terminos-cond').modal('show');
    $('#registrar').modal('hide');
    
    let registro ={
        nombre: document.getElementById('nombre').value,
        correo: document.getElementById('correo').value,
        contrasena: document.getElementById('contrasena').value
    };
    console.log('Registro a guardar', registro);
    axios({
        method: 'POST',
        url: url,
        responseType:'json',
        data:registro

    }).then(res=>{
        console.log(res);
        obtenerRegistros();

    }).catch(error=>{
        console.error(error);
    });

    
    
}
function obtenerCategorias(){
    axios({
        method: 'GET',
        url: '../../Glovo/Backend/api/categorias.php',
        responseType: 'json'    
    }).then(res=>{
        for (let i = 0; i < res.data.length; i++) {
            document.getElementById('local').innerHTML +=
            `<div align="center" style="background-color: white; border-radius: 100%; margin: 12.5px; height: 114.2px; width: 114.2px; col-md-3 col-lg-4">
        <a style="text-align: center; text-decoration: none; color: black;" href="${res.data[i].enlace}">
          <img style="height: 60px; margin-top: 5px; " src="${res.data[i].imagen}" alt="">
          <h2 style="margin-top: 9px; margin-right: auto; font-size: 14px;">${res.data[i].negocio}</h2>
        </a>
        
      </div>`;
        }
        console.log(res);
    }).catch(error=>{
        console.error(error);
    });
}
obtenerCategorias();

function obtenerTiendas(){
    axios({
        method: 'GET',
        url: '../../Glovo/Backend/api/tiendas.php',
        responseType: 'json'
    }).then(res=>{
        for (let i = 0; i < res.data.length; i++){
            document.getElementById('tienda').innerHTML +=
            `<div id="negocios" class="col-12 col-sm-6 col-lg-4">
        <a style="text-decoration: none; color: black;" href="${res.data[i].enlace}">
        <div style="border-radius: 10px!important;"; class="card">
          <img src="${res.data[i].imagen}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">${res.data[i].nombre}</p>
          </div>
        </div> 

        </a>
      </div>`;
        }
    }).catch(error=>{
        console.error(error);
    });
}

obtenerTiendas();

function obtenerRepartidores(){
    axios({
        method: 'GET',
        url: '../../Glovo/Backend/api/repartidores.php',
        responseType: 'json'
    }).then(res=>{
        for (let i = 0; i < res.data.length; i++){
            document.getElementById('repartir').innerHTML +=
            `<div class="col-12 col-md-6 col-lg-4">
        <div style="margin-top: 30px;" class="card" style="width: 18rem;">
          <img src="${res.data[i].imagen}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">${res.data[i].titulo}</h5>
            <p id="repar-text" >${res.data[i].texto}</p>
            <p class="card-text">${res.data[i].parrafo}</p>
            <a href="${res.data[i].enlace}" class="btn btn-primary">${res.data[i].boton}</a>
          </div>
        </div>

      </div>`;
        }
    }).catch(error=>{
        console.error(error);
    });
}
obtenerRepartidores();

function buscar() {
    document.getElementById('parrafo').innerHTML =
    `<div id="cerrrar" class="input-buscar">
        <form class="container">
            <span id="lupa-input">
                <img style="margin-top: 25px;" src="img/search_orange.svg" alt="">
            </span>
            
            <input class="input-busqueda" type="text" placeholder="Búsqueda">
            
            <img style="position: absolute; margin-left: 870px; width: 38px;" onclick="cerrar()" src="img/cerrar.svg" alt="">
        </form>
  </div>`;
   
    
    console.log('usted busca');
    document.getElementById('porfa').style.marginLeft = '-250px';
    document.getElementById('porfa').style.marginTop = '190px';
    
    
}
function cerrar(){
    
    document.getElementById('cerrrar').style.display = 'none';
    document.getElementById('porfa').style.marginLeft = '750px';
    document.getElementById('porfa').style.marginTop = '25px';
    
    console.log('usted cerro')
}

function iniciarSesion(){
    $('#registrar').modal('show');
    document.getElementById('nombre').value = null;
    document.getElementById('correo').value = null;
    document.getElementById('contrasena').value = null;
    document.getElementById('boton-3').style.display='';
    document.getElementById('Iniciar-email').style.display='';
    document.getElementById('face-boton').style.display='';
    document.getElementById('correo').style.display='';
    document.getElementById('contrasena').style.display='';
    document.getElementById('o').style.display='';
    document.getElementById('img-correo').style.display='';
    document.getElementById('img-mostrar').style.display='';
    document.getElementById('img-candado').style.display='';

    

    document.getElementById('registrarLabel').style.display='none';
    document.getElementById('nueva-modal').style.display='block';
    document.getElementById('div-nombre').style.display='none';
    document.getElementById('olvidar').style.display='block';
    document.getElementById('cuenta').style.display='none';
    document.getElementById('terminos').style.display='none';
    document.getElementById('nuevo').style.display='block';
    document.getElementById('boton-3').style.display='none';
    document.getElementById('Iniciar-email').style.display='block';
    
   
    
}
function registrarMod(){
    $('#registrar').modal('show');
    document.getElementById('nombre').value = null;
    document.getElementById('correo').value = null; 
    document.getElementById('contrasena').value = null;
    document.getElementById('registrarLabel').style.display='';
    document.getElementById('nueva-modal').style.display='';
    document.getElementById('div-nombre').style.display='';
    document.getElementById('olvidar').style.display='';
    document.getElementById('cuenta').style.display='';
    document.getElementById('terminos').style.display='';
    document.getElementById('nuevo').style.display='';
    document.getElementById('nuevo').style.display='';
    document.getElementById('boton-3').style.display='';
    document.getElementById('Iniciar-email').style.display='';
    document.getElementById('face-boton').style.display='';
    document.getElementById('correo').style.display='';
    document.getElementById('contrasena').style.display='';
    document.getElementById('o').style.display='';
    document.getElementById('img-correo').style.display='';
    document.getElementById('img-mostrar').style.display='';
    document.getElementById('img-candado').style.display='';
    document.getElementById('terminos-mod').style.display = '';


    document.getElementById('registrarLabel').style.display='block';
    document.getElementById('nueva-modal').style.display='none';
    document.getElementById('olvidar').style.display='none';
    document.getElementById('nuevo').style.display='none';
    document.getElementById('boton-3').style.display='block';
    document.getElementById('Iniciar-email').style.display='none';
    
      
}

function abreSesion(){
    registrarMod();
    
}
function abreRegistro(){
    iniciarSesion();
}

function login(){
    axios({
        url: '../../Glovo/Backend/api/login.php',
        method: 'POST',
        responseType: 'json',
        data:{
            correo: document.getElementById('correo').value,
            contrasena: document.getElementById('contrasena').value
        }
    }).then(res=>{
        if (res.data.CodigoResultado==1){
            window.location.href = "loginG.php";
        }else{
            document.getElementById('errro-p').style.display = 'block';
            document.getElementById('errro-p').innerHTML = res.data.mensaje;
        }
        console.log(res);   
    }).catch(error=>{
        console.error(error);
    });
}

function abrirInfo(){
    $('#ventana-login').modal('show');
}