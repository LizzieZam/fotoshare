@extends('templates.layout')
@section('content')    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">IMAGEN</div>
                        <div class="panel-body">
                        <form  method="post" id="form" action="{{route('create')}}" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>Imagen</label>
                                <input  class='form-control' name="imagen" type="file" id="imagen" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <button type="submit" class="btn btn-default">Guardar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection