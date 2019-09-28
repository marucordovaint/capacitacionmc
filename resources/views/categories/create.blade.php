@extends('layouts.app')
@section('content')
<!--index de categorie!-->

<div class="container">
  

    <div class="card">
    <div class="card-header bg-danger text-white">
        <b>Ingreso de Categorias</b>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('categories.index') }}" class="btn btn-primary"><b>REGRESAR</b></a>

        {!! Form::open() !!}
        
           {!! Field::text('name',null,['label'=>'Nombre','placeholder'=>'Ingrese el nombre'])
           !!}

           {!! Field::textarea('description',null,['label'=>'Descripción','placeholder'=>'Ingrese el Descripción'])
           !!}

        {!! Form::close()!!}
           
    </div>
    </div>
</div>
@endsection
