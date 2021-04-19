<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Album example · Bootstrap v5.0</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>

                    <p class="text-muted">Add some information about the album below, the author, or any other
                        background context. Make it a few sentences long so folks can pick up some informative tidbits.
                        Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                <strong>Netflix</strong>

            </a>
            <strong style="color:white;">@auth
                    {{ Auth::user()->name }}
                @else
                @endauth</strong>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
            @auth
                <a href="javascript: document.getElementById('logout').submit()" class="btn btn-dark">Cerrar sesión</a>

                <form action="{{ route('logout') }}" id="logout" style="display:none;" method="post">
                    @csrf
                @else
                    <a href="{{ route('home') }}" class="btn btn-dark">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-dark">Registrarse</a>
                @endauth
        </div>
    </div>
</header>
<div>
    <table>
        <tr>
            <th>Video id</th>
            <th>User id</th>
            <th>Motivo</th>
        </tr>
        @foreach ($reports as $report)
        <tr>
            <td>{{ $report->video_id }}</td>
            <td>{{ $report->user_id }}</td>
            <td>{{ $report->motivo }}</td>
            <td><a href="{{ route('reports.destroy', $report->id) }}"><button type="button"
                class="btn btn-sm btn-outline-secondary">Quitar bloqueo</button></a></td>
        </tr>
        @endforeach
    </table>
    
</div>