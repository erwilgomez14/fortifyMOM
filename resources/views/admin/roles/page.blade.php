@extends('panel.layouts.page')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    @if(session('status'))

                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{session('status')}}</strong>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                    @endif

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Bienvenido al listado de Roles de Meru Operaciones</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('rol.create')}}" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Crear Rol</a>
                            </div>
                            <table class="table mt-3">
                                <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Permisos</th>
                                    <th scope="col " class="text-center">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($roles as $rol)
                                    <tr>
                                        <td>{{$rol['id']}}</td>
                                        <td>{{$rol['nombre']}}</td>
                                        <td>{{$rol['slug']}}</td>
                                        <td>
                                            @if($rol->permisos != null)
                                                @foreach($rol->permisos as $permiso)
                                                    <span class="babge badge-secondary">
                                                        {{$permiso->nombre}}
                                                    </span>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('rol.show',$rol)}}"><i class="far fa-eye"></i><span class="icon-name"></span></a>

                                            <a href="{{route('rol.edit',$rol)}}"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg><span class="icon-name"></span> </a>

                                            <a href="" class="text-danger" data-toggle="modal" data-target="#exampleModal" data-rolid="{{$rol['id']}}"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg><span class="icon-name"></span></a>



                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Esta apunto de eliminar el registro</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ¿Esta seguro que desea eliminar el registro?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <form method="POST" action="">
                                                                @method('DELETE')
                                                                @csrf()
                                                                <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Borrar Registro</a>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var rol_id = button.data('rolid') // Extract info from data-* attributes
            var modal = $(this)
            modal.find('form').attr('action','/rol/'+ rol_id);
        })
    </script>
@endsection
