<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<div id="ed" class="col-lg-12">
        <h1 class="my-4">Comentarios</h1>
        <form action="{{route('comments.store')}}" method="POST">
            @csrf
            @method('POST')
            Comentario
            <br/>
            <input type="text" name="content" class="form form-control">
            Puntuacion
            <br/>
            <input type="number" name="puntuation" class="form form-control">
            <input type="hidden" name="video_id" value="{{ $video->id }}" class="form form-control">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        @foreach($video->comment()->orderBy('created_at', 'desc')->get() as $comment)
        <div id="commment_div">
            <div id="user_comment"></div>
            <div id="comment"></div>
        </div>
        <p>{{ $comment->content }} {{ $comment->user->name }} {{ $comment->puntuation }}</p>
        @endforeach
    <br/>
    </div>