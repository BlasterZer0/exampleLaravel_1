@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de control') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div>
                    {{ __('Haz iniciado sesión') }}
                    <br/>
                    <br>
                </div>
<!--------------------------------------------------------------------------------------------->
<div>
<a class="btn btn-info btn-block" href = "/edit-records">Tabla de usuarios</a>
</div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
