@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <form>
    <div class="form-row">
      <div class="col-md-4 mb-3">

        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Название игры" value="" required>
        <div class="valid-feedback">
          Заполнено верно!
        </div>
      </div>

      <div class="col-md-4 mb-3">

     <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Сторона-фракция" value="">
     <div class="valid-feedback">
       Заполнено верно!
     </div>
   </div>
   <div class="col-md-4 mb-3">

  <button class="btn btn-primary align-middle" type="submit">Сохранить</button>



  </form>
</div>
@endsection
