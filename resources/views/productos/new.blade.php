@extends('layouts.menu')

@section('contenido')
<div clas="row">
    <h1 class="orange-text text darken-3"> Nuevo Producto </h1>
</div>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
        <input   id="nombre" name="nombre" type="text">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s8">
        <textarea  name="desc" id="desc" class="materialize-textarea"></textarea>
        <label for="desc">Descripcion</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s9">
        <input id="precio" name="precio" type="text">
          <label for="nombre">Precio</label>
        </div>
      </div>
      <div class="row">
      </div>
      <div class="row">
      <div class="file-field input-field col s10">
      <div class="btn">
        <span>Imagen del producto</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      <div class="row">
      <button class="btn waves-effect waves-light" type="submit" >Submit
    <i class="material-icons right"></i>
  </button>
  </div>
    </form>
  </div>
@endsection