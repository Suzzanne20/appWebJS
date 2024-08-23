@extends('layout/plantilla')
@section('tituloPagina','Registro')
@section('contenido')
<br>
<style>
    .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
    }
    .preview-img {
        max-width: 200px;
        max-height: 200px;
        margin-top: 10px;
    }
</style>

<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                Actualizar <br />
                <span style="color: hsl(218, 81%, 75%)">Información del Manga</span>
            </h1>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

            <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">

                    <form action="{{ route('manga.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-3 col-5">
                            <span class="input-group-text col-3" id="basic-addon3">Manga</span>
                            <input type="text" name="nombre_manga" class="form-control col-2" required>
                        </div>
                        <div class="input-group mb-3 col-5">
                            <span class="input-group-text col-3" id="basic-addon3">Tomo</span>
                            <input type="text" name="tomo" class="form-control col-2" required>
                        </div>
                        <div class="input-group mb-3 col-5">
                            <span class="input-group-text col-3" id="basic-addon3">Precio</span>
                            <input type="number" name="precio" class="form-control col-2" required>
                        </div>
                        <div class="input-group mb-3 col-5">
                            <span class="input-group-text col-3" id="basic-addon3">Portada</span>
                            <input type="file" name="image" class="form-control col-2" accept="image/*" onchange="previewImage(event)">
                        </div>
                        <img id="imagePreview" class="preview-img" src="#" alt="Vista previa de la imagen" style="display:none;"/>

                        <button class="btn btn-info">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection



