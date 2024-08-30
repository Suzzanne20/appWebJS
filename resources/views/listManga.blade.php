@extends('layout/plantilla')
@section('tituloPagina','Neko Shop')
@section('contenido')

<style>
        .scrollable-table {
            max-height: 550px; /* Ajusta la altura según sea necesario */
            overflow-y: scroll;
        }
</style>  
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-2">
            <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/Neko%20Shop%20Perfil%2050x50%20sin.png" alt="NekoShop" width="120">
            </div>
            <div class="col-6">
                <h1>STOCK</h1>
                <h3>de Tomos de Mangas</h3>
            </div>        </div>
            <div class="card">
            <div><br></div>
            <div class="col-md-4 px-md-5"> 
            <form method="GET" action="{{ route('manga.show') }}" class="mb-3">
                    <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar nombre de Manga" value="{{ $search ?? '' }}">
                        <button type="submit" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></button>
                    </div></form>
            </div>
            @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                {{$mensaje}}
                </div>
            @endif
            <div class="row col-md-12">   
            <div class="card-body px-4 py-5 px-md-5">
                <div class="scrollable-table">
                    <table class="table table-striped table-hover">
                        <thead class='table-dark'>
                            <tr>
                                <th>Id</th>
                                <th>Manga</th>
                                <th>Tomo</th>
                                <th>Precio</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre_manga}}</td>
                                <td>{{$item->tomo}}</td>
                                <td>{{$item->precio}}</td>
                                <td>
                                    <form action="{{ route('manga.edit', $item->id) }}" method="GET">
                                    <button class='btn btn-info btn-sm'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                    </svg></button></form>   
                                </td>
                                <td>
                                    <form action="{{ route('manga.eli', $item->id) }}" method="GET">
                                    <button class='btn btn-danger btn-sm'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                                    <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                                    </svg></button></form>
                                </td>
                            </tr>
                            <tr>
                            @endforeach

                        </tbody>
                    </table>
                </div></div></div>

            </div></div>
        
        <div><br>
    </div>
    <br>
            .



@endsection
