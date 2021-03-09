<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
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
      <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
        <strong>Netflix</strong>
            
      </a>
      <strong style="color:white;">@auth
            {{Auth::user()->name}}
            @else
            @endauth</strong>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      @auth
      <a href="javascript: document.getElementById('logout').submit()" class="btn btn-dark">Cerrar sesión</a>
      
      <form action="{{route('logout')}}" id="logout" style="display:none;" method="post">
      @csrf
        @else
        <a href="{{route('home')}}" class="btn btn-dark">Iniciar Sesión</a>
        <a href="{{route('register')}}" class="btn btn-dark">Registrarse</a>
      @endauth
    </div>
  </div>
</header>
@if($videos!=null)
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach($videos as $video)
          <div class="card shadow-sm">
          <h3>{{$video->title}}</h3>
         <video width="100%" height="255" controls poster="{{asset('storage/'.$video->image)}}">
<source type="video/mp4" src="{{asset('storage/'.$video->content)}}">
</video>
            <div class="card-body">
              <p class="card-text">{{$video->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                @if(Auth::user()->hasRole('admin'))
                <a href="{{route('videos.destroy', $video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                  @elseif(Auth::user()->hasRole('editor'))
                  <a href="{{route('videos.destroy', $video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                  @endif
                  
                  @if(Auth::user()->hasRole('admin'))
                  <a href="{{route('videos.edit', $video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  @elseif(Auth::user()->hasRole('editor'))
                  <a href="{{route('videos.edit', $video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  @endif
                </div>
                
                <small class="text-muted">{{$video->category}}</small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        </div>
        </div>
        @endif