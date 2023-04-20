@extends('panel.layouts.page')

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                    @endif
                    <form method="POST" action="{{route('herramientas.update', $herramienta)}}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf()
                        <h2 class="tittle"> Edicion de herrramienta: {{$herramienta->id_herramienta}}</h2>



                         <div class="form-group">
                            <label for="descripcion">descripcion de la herramienta:</label>
                            <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion" value="{{old('descripcion', $herramienta->descripcion ?? '')}}">
                        </div>

                        <div class="form-group">
                            <label for="serial">Serial de la herramienta:</label>
                            <input type="text" name="serial" class="form-control" id="serial" placeholder="serial" value="{{old('serial', $herramienta->serial ?? '')}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="categoria">Categoria de la herramienta</label>
                            <input type="text" name="categoria" class="form-control" id="categoria" placeholder="categoria" value="{{old('categoria', $herramienta->categoria ?? '')}}">
                        
                        </div>
                        <div class="form-group pt-2">
                            <a href="{{route('acueductos.index')}}" class="btn btn-dark">Volver</a>
                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>

@endsection
