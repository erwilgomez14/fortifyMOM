@extends('panel.layouts.page')

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="card">
                        <div class="card-header">
                            <h2 class="">herramienta: {{$herramienta->id_herramienta}}</h2>

                        </div>
                        <div class="card-body">
                            <h4>Descripcion: {{$herramienta->descripcion}}</h4>
                            <h4>seria: {{$herramienta->serial}}</h4>
                            <h4>categoria: {{$herramienta->categoria}}</h4>

                            <div class="card-footer">

                                <a href="{{route('herramientas.index')}}" class="btn btn-primary">Volver al listado</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
