@extends('templates.layout')

@section('content')    
    <div class="container">
        <div class="row">
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <img id="image" name="image" class="img-responsive" alt="imagen" title="Imagen" src="/images/{{ $img->image }}" />
                    
            </div> 
            
        </div>
    </div>
@endsection