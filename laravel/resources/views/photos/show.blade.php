@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
			<img src="{{ asset($photo->url) }}" alt="{{ asset($photo->description) }}">
			<hr>
			{{-- descripcion de la foto --}}
			<p><strong>{{Auth::user()->fullname }}</strong> {{ $photo->description }}</p>
			{{-- fecha de la foto --}}
            <?php 
                \Carbon\Carbon::setLocale(config('app.locale'));
                $hoy = \Carbon\Carbon::now();
                $fc = \Carbon\Carbon::parse($photo->created_at);
            ?>
            {{-- se imprime la variable de la fecha --}}
            <small class="text-muted">publicada hace  {{ $fc->diffForHumans($hoy) }} </small>
            <hr>
            <p>Algunos comentarios:</p>
            @foreach($comments as $cm)
            	<p>
            		<strong><a href="{{ url('profile/'.$cm->user->nickname)}}">{{ $cm->user->nickname }}</a></strong> 
            		{{ $cm->message }}
            	</p>
            @endforeach
            <hr>
            <form action="{{ url('comment/add') }}" method="post">
            	@csrf
            	<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            	<input type="hidden" name="photo_id" value="{{ $photo->id }}">
            	<div class="form-group">
            		<textarea name="message" id="" cols="30" rows="1" class="form-control textarea" placeholder="Añadir comentario..."></textarea>
            	</div>
            	<div class="form-group row justify-content-center">
            		<button type="submit" class="btn btn-block btn-instalara">
            			<i class="fa fa-comment"></i> comentar
            		</button>
            	</div>
            </form>
        </div>
    </div>
</div>
@endsection