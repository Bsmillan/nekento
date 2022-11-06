<?php require('../../Components/navbar/NavBar.php') ?>
<div class="container pt-5">
  <div class="row">
    <div id="carouselExampleFade" class="carousel slide carousel-fade col-sm-7">
      <div class="carousel-inner">
        <div class="carousel-item active text-center">
          <img src="../../assets/prod1.jpg" class="mx-auto d-block w-50" alt="...">
        </div>
        <div class="carousel-item text-center">
          <img src="../../assets/prod2.jpg" class="d-block mx-auto w-50" alt="...">
        </div>
        <div class="carousel-item text-center">
          <img src="../../assets/prod1.jpg" class="d-block mx-auto w-50" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body px-0 py-0">
          <h2 class="card-title px-2 py-2">Cabina Yamaha</h2>
          <p class="card-text px-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="row mx-0 px-2" id="valoracion">
              <h5 class="col-sm-3 mx-0 px-0" style="margin: 0px;">Valoracion</h5>
              <p class="clasificacion col-sm-4 mx-0 px-0" style="margin: 0px;">
                <input id="radio1" type="radio" name="estrellas" value="5">
                <label for="radio1">★</label>
                <input id="radio2" type="radio" name="estrellas" value="4">
                <label for="radio2">★</label>
                <input id="radio3" type="radio" name="estrellas" value="3">
                <label for="radio3">★</label>
                <input id="radio4" type="radio" name="estrellas" value="2">
                <label for="radio4">★</label>
                <input id="radio5" type="radio" name="estrellas" value="1">
                <label for="radio5">★</label>
              </p>
          </div>
          <form action="javascript:void(0)" method="post">
            <div class="row pb-2 mx-0 mb-2 px-2">
              <h5 class="col-sm-3 mx-0 px-0" style="margin: 0px;">Cantidad: </h5>
              <select class="col-sm-3 px-0" type="number" name="" id="">
                <option value="1">Uno</option>
                <option value="2">Dos</option>
                <option value="3">Tres</option>
                <option value="4">Cuatro</option>
                <option value="5">Cinco</option>
              </select>
            </div>
            <h3 class=" mb-3 px-2">$500.000</h3>
            <button type="submit" class="btn mb-1 col-sm-12" id="bten">Comprar</button>
            <button type="submit" class="btn col-sm-12" id="bten">Agregar al carrito</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-5">
    <div class="col-8">
      <h3>Descripcion</h3>
      <p>
      La CABINA YAMAHA DBR12 representa el equilibrio perfecto entre tamaño y prestaciones. Con 1000 W de potencia y una resolución de sonido sobresaliente a cualquier nivel de salida. Perfecto para formar parte del equipo de sonorización principal, pero también como monitor de suelo, ideal para una gran variedad de aplicaciones.
      </p>
    </div>
    <div class="col-4">
      <h3>Valoraciones</h3>
    </div>
  </div>
</div>
<?php require('../../Components/footer/Footer.php') ?>