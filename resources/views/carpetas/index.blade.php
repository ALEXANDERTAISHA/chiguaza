@extends('layouts.app')
@section('content')



    @foreach ($carpetas as $carpeta)


        <div class="card my-2">
            <div class="card-header">

                <ul>
                    <li class="nav-item dropdown">
                    @include('carpetas.crear',['carpeta'=>$carpeta])
                    </li>
                </ul>
            </div>
            <div class="card-body">
                
                @include('carpetas.archivos',['carpeta'=>$carpeta])
                @if ($carpeta->subCarpetas)
                <ul>
                    @foreach ($carpeta->subCarpetas as $subCarpeta)
                        @include('carpetas.sub', ['sub_carpeta' => $subCarpeta])
                    @endforeach
                </ul>
                
                @endif
                
                

            </div>
        </div>

    @endforeach


    {{-- modal ingresar archivo --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-lg-down">

          <form action="{{ route('guardarArchivo') }}" method="POST" enctype="multipart/form-data">
            

            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="carpeta_id" id="carpeta_id_modal">

                    <div class="mb-3">
                        <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre de archivo..." required>
                    </div>

                    <div class="file-loading">
                        <input id="input-b9" name="archivo" type="file" accept="application/pdf" required>
                    </div>
                    <div id="kartik-file-errors"></div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Subir archivo</button>
                </div>
              </div>
          </form>

        </div>
    </div>

    {{-- modal ingresar item --}}
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-lg-down">

          <form action="{{ route('carpetas.store') }}" method="POST" >
            

            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="carpeta_id" id="carpeta_id_modal2">

                    <div class="mb-3">
                        <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre de archivo..." required>
                    </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </div>
          </form>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#input-b9").fileinput({
                showPreview: false,
                showUpload: false,
                language: "es",
                elErrorContainer: '#kartik-file-errors',
                allowedFileExtensions: ["pdf"]
                //uploadUrl: '/site/file-upload-single'
            });

            
        });
        function abrirModal(id,title){
            $('#carpeta_id_modal').val(id)
            $('#exampleModal').modal('show');
            $('#exampleModalLabel').html('Subir archivo PDF en: '+title)
        }

        function abrirModal2(id,title){
            $('#carpeta_id_modal2').val(id)
            $('#exampleModal2').modal('show');
            $('#exampleModalLabel2').html('Añadir item en: '+title)
        }
    </script>
@endsection