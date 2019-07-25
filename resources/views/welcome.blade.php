@extends('plantilla-web')

@section('seccion-web')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 "  height="500" src="{{ asset('image/promo1.jpg') }}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">  
      <h4>Ya disponible!</h4>
    <p>Crash Team Racing Nitro Fueld </p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " height="500" src="{{ asset('image/promo2.jpg') }}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">  
      <h4></h4>
    <p></p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-30" height="500" src="{{ asset('image/promo3.jpg') }}" alt="Third slide">
    <div class="carousel-caption d-none d-md-block">  
      <h4>Promocion!</h4>
    <p>LLevate 3 funkos por el precio de 2. </p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-30"  height="500" src="{{ asset('image/promo4.jpg') }}" alt="four slide">
    <div class="carousel-caption d-none d-md-block">  
      <h4>¿Tienes Juegos que ya no Juegas?</h4>
    <p>Traenoslo y te daremos un buen precio por el!</p>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="mt-5 bg-dark text-white container" >
   <p class="font-weight-bold">PlayStation</p>
</div>


<div class="card-group">
  <div class="card">
      <div class="card-body">
    <h6 class="card-title" style="color: green;" >Disponible</h6>
    </div>
    <img src="{{ asset('image/ctr-ps4.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Crash Team Racing Nitro Fueled</h5>
      <p class="card-text">$ 34.990</p>
      
    </div>
  </div>
  <div class="card">
     <div class="card-body">
    <h6 class="card-title" style="color: green;" >Disponible</h6>
    </div>
    <img src="{{ asset('image/mk11-ps4.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mortal Kombat 11</h5>
      <p class="card-text">$ 44.990</p>
    </div>
  </div>
  <div class="card">
     <div class="card-body">
    <h6 class="card-title" style="color: green;" >Disponible</h6>
    </div>
    <img src="{{ asset('image/daysgone-ps4.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Days Gone</h5>
      <p class="card-text">$ 29.990</p>
      </div>
  </div>
</div>

<div class="mt-5 bg-dark text-white container">
   <p class="font-weight-bold">Xbox</p>
</div>


<div class="card-group">
  <div class="card">
   <div class="card-body">
    <h6 style="color: green;" class="card-title">Disponible</h6>
    </div>
    <img src="{{ asset('image/halo-xbox.jpeg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title" >Halo Master Shief Collection</h5>
      <p class="card-text">$ 34.990</p>
      
    </div>
  </div>
  <div class="card">
     <div class="card-body">
    <h6 class="card-title" style="color: red;">No Disponible</h6>
    </div>
    <img src="{{ asset('image/mud-xbox.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mud And Runner</h5>
      <p class="card-text">$ 44.990</p>
    </div>
  </div>
  <div class="card">
     <div class="card-body">
    <h6 class="card-title" style="color: red;"> No Disponible</h6>
    </div>
    <img src="{{ asset('image/ow-xbox.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">OverWatch</h5>
      <p class="card-text">$ 19.990</p>
      </div>
  </div>
</div>

<div class="mt-5 bg-dark text-white container">
   <p class="font-weight-bold">Nintendo</p>
</div>

<div class="card-group">
  <div class="card">
     <div class="card-body">
    <h6 class="card-title" style="color: green;">Disponible</h6>
    </div>
    <img src="{{ asset('image/mariomk2-sw.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mario Maker 2 </h5>
      <p class="card-text">$ 42.990</p>
      
    </div>
  </div>
  <div class="card">
     <div class="card-body">
    <h6 class="card-title" style="color: green;">Disponible</h6>
    </div>
    <img src="{{ asset('image/bow-sw.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="Responsive image">
    <div class="card-body">
      <h5 class="card-title">legend of zelda</h5>
      <p class="card-text">$ 24.990</p>
    </div>
  </div>
  <div class="card">
     <div class="card-body">
    <h6 class="card-title" style="color: green;">Disponible</h6>
    </div>
    <img src="{{ asset('image/la-sw.jpg') }}" class="card-img-top" style="width: auto; height: 300px;" alt="Responsive image">
    <div class="card-body">
      <h5 class="card-title">L.A. Noire</h5>
      <p class="card-text">$ 24.990</p>
      </div>
  </div>
</div>

@endsection