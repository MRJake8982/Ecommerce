@extends('plantilla-web')

@section('seccion-web')

<form class="loggin-frm" style="align-content: center; margin-left: 20%; margin-right: 20% ;margin-top: 5%;">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Email</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Contraseña</label>
    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Contraseña">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
    <label class="form-check-label" for="dropdownCheck2">
      Recordar...
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
  <a href="#" class="stretched-link">Olvido Su Contraseña?</a>
  
    <div class="dropdown-divider"></div>
  <a href="{{route('registro')}}" class="stretched-link">Registrarse</a>

</div>
</form>

@endsection