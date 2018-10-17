@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="{{ url('add')}}" class="btn ButtonRegister mb-4">
                <i class="fas fa-camera-retro"></i> Subir foto
            </a>
            {{-- Extraeremos los campos del modelo photos --}}
            @forelse($photos as $photo)

            @empty
                <div class="card">
                    <div class="card-body">
                        <p class="text-center">Aún no tienes fotos</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
