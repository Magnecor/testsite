@extends('admin.layouts.app_admin')

@section('content')



<br>
<br>
<div class="container">
<h2>Список игр</h2>
  <form>
    <div class="form-row">
      <div class="col-md-4 mb-3">

        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Название игры" value="" required>

      </div>


   <div class="col-md-4 mb-3">

  <button class="btn btn-primary align-middle" type="submit">Сохранить</button>



  </form>
</div>
</div>
</div>
<br>
<br>
<div class="container">

  <form>
    <div class="form-row">
      <div class="col-md-4 mb-3">

        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Название игры" value="" required>

      </div>


   <div class="col-md-4 mb-3">

  <button class="btn btn-primary align-middle" type="submit">Добавить</button>



  </form>
</div>
</div>
</div>
@endsection
