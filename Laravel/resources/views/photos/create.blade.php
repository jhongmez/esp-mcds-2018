@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        	<div class="card-header-instalara">Selecciona una foto de la galería</div>
        	<hr>
            @if( $errors->any() )
                <div class="alert alert-danger">
                        @foreach( $errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                </div>
            @endif
            <form action="{{ url('save') }}" method="post" enctype="multipart/form-data">
            	@csrf
            	<div class="form-group">
            		<input type="file" name="photo" class="form-control" accept="image/*">
            	</div>
            	<div class="form-group">
            		<textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Añade una descripción..."></textarea>
            	</div>
            	<div class="form-group">
            		<button class="btn ButtonRegister">
            			<i class="fas fa-location-arrow"></i> Compartir
            		</button>
            	</div>
            </form>
        </div>
    </div>
</div>
@endsection