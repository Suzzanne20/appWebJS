@extends('layout/plantilla')
@section('tituloPagina','Neko Shop')
@section('contenido')

<style>
        .scrollable-table {
            max-height: 486px; /* Ajusta la altura según sea necesario */
            overflow-y: scroll;
        }
</style>
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-2">
            <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/Neko%20Shop%20Perfil%2050x50%20sin.png" alt="NekoShop" width="120">
            </div>
            <div class="col-6">
                <h1>Un universo</h1>
                <h3>de historias al alcance de tus manos</h3>
            </div>        </div>
            <div class="row">
                <div class="progress" role="progressbar" aria-label="Info striped example">
                <div class="progress-bar progress-bar-striped bg-info" style="width: 100%"></div>
            </div>   <br> <br> 
            <div class="row">
            <div class="col-md-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/Neko%20Shop%20dispo%20ancient.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/Neko%20Shop%20dispo%20jujutsu.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/main/Neko%20Shop%20dispo%20demon.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            </div>
            <div class="col-md-4">    
            <h3>Mangas en Stock</h3>           
                <form method="GET" action="{{ route('manga.index') }}" class="mb-3">
                    <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar nombre de Manga" value="{{ $search ?? '' }}">
                        <button type="submit" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></button>
                    </div></form>

                <div class="scrollable-table">
                    <table class="table table-striped table-hover">
                        <thead class='table-dark'>
                            <tr>
                                <th>Manga</th>
                                <th>Tomo</th>
                                <th>Precio</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $item)
                            <tr>
                                <td>{{$item->nombre_manga}}</td>
                                <td>{{$item->tomo}}</td>
                                <td>{{$item->precio}}</td>
                            </tr>
                            <tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div><br></div>

        <div class="row">
        <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped bg-info" style="width: 100%"></div>
        </div>   <br> 
        <!----------------------------ULTIMOS AGREGADOS-->
        <h3>Últimos Mangas agregados</h3>

        <div class="card-group">
            @foreach($ultimosMangas as $manga)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/manga/' . $manga->image) }}" class="img-fluid rounded-start" alt="{{ $manga->nombre_manga }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $manga->nombre_manga }}</h5>
                                <p class="card-text">Tomo #{{ $manga->tomo }}</p>
                                <p class="card-text"><small class="text-muted">Q{{ $manga->precio }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Noticias del mundo del Manga</h3>
            </div>
        
        <div class="card-group"> <!-- PRIMER BLOQUE -->
            <div class="card h-100">
            <img src="https://i0.wp.com/www.gamerfocus.co/wp-content/uploads/2024/06/my-hero-academia-el-final-del-manga-de-kohei-horikoshi-llegara-en-agosto.jpg?resize=860%2C484&ssl=1" class="card-img-top" alt="30">
                        <div class="card-body">
                        <h3 class="card-title">Boku no Hero</h3>
                        <p class="card-text">El capitulo final del manga a tomado por sorpresa a todos los fans de la serie, mostrando un fuerte desagrado por la conclusión que le fue dada al protagonista...</p>
                        </div>
            </div>
            <div class="card h-100">
            <img src="https://preview.redd.it/galaxy-impact-is-more-impressive-than-you-think-v0-8mgsifl4gmsa1.png?width=2755&format=png&auto=webp&s=8cb7798a56adf69225fe240e0773985331d8f265" class="card-img-top" alt="30">
                        <div class="card-body">
                        <h3 class="card-title">One Piece</h3>
                        <p class="card-text">El tomo 107 del manga de One Piece muestra el tan esperado Galaxy Impact del que fué Vice Almirante de la Marina y Abuelo de Luffy...</p>
                        </div>
                    </div>
            <div class="card h-100">
            <img src="https://cdn.alfabetajuega.com/alfabetajuega/2023/07/el-manga-de-jujutsu-kaisen-podria-haber-revelado-su-fecha-de-final-definitivo.jpg" class="card-img-top" alt="30">
                        <div class="card-body">
                        <h3 class="card-title">Jujutsu Kaisen</h3>
                        <p class="card-text">Gege Akutami el creador del manga Jujutsu Kaisen, ha anunciado sorpresivamente el inminente final del manga, estando a tan solo 5 semanas de su último capitulo... </p>
                        </div>
                    </div>
            </div>
            <div class="card-group"><!-- SEGUNDO BLOQUE -->
            <div class="card h-100">
            <img src="https://http2.mlstatic.com/D_NQ_NP_647098-MLA77820437110_072024-O.webp" class="card-img-top" alt="30">
                        <div class="card-body">
                        <h3 class="card-title">Bleach</h3>
                        <p class="card-text">El manga de Bleach vuelve con una nueva edición, Bleach Remix con un tamaño Kanzenban y una alta calidad en sus páginas</p>
                        <a href=" " class="btn btn-dark mb-3">Información de Preventa</a>
                        </div>
                    </div>
            <div class="card h-100">
            <img src="https://laverdadnoticias.com/__export/1708186479433/sites/laverdad/img/2024/02/17/el_manwha_solo_leveling_llega_a_mexico_en_panini_precio_y_donde_comprarlo.jpg_1517869940.jpg" class="card-img-top" alt="30">
                        <div class="card-body">
                        <h3 class="card-title">Solo Leveling</h3>
                        <p class="card-text">Uno de los manhwas mejores valorados ya se encuentra disponible en stock, con sus paginas llenas de emocionantes batallas junto a su protagonista Sung Jin Woo...</p>
                        </div>
                    </div>
            <div class="card h-100">
            <img src="https://cdn.oneesports.gg/cdn-data/2024/04/Anime_Kaijuno8_Manga_KafkaHibino_SoshiroHoshina_MinaAshiro_BannerArt_2.jpg" class="card-img-top" alt="30">
                        <div class="card-body">
                        <h3 class="card-title">Kaiju No. 8</h3>
                        <p class="card-text">SINOPSIS: ¡Un hombre, descontento con el trabajo que ha tenido que hacer en la vida, se ve envuelto en un acontecimiento inesperado...! ¡Se convierte en un Kaiju, una criatura monstruosa, dándole así una nueva oportunidad de lograr lo que siempre soñó! </p>
                        </div>
                    </div>
            </div>
    </div>
    <div><br></div></div>
        <!----------------------------CONTACTOS------->
        <div class="card">
            <div class="card-header">
                Contáctanos
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <a href="https://www.facebook.com/Nekotaku.ShopGT/">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg></a>
                <a href="https://www.instagram.com/neko.shopgt/">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg></a>
                <a href="https://wa.me/message/HODEKDC7VDHEL1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                </svg></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>4557-3507 | Neko Shop GT
                </blockquote>
            </div>
            </div><br>
            .



@endsection
