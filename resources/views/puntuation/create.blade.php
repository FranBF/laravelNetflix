<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<div id="ed" class="col-lg-12">
        <h1 class="my-4">Puntuaciones</h1>
        <form action="{{route('puntuations.store')}}" method="POST">
            @csrf
            @method('POST')
            Comentario
            <br/>
            <input type="text" name="puntuacion" class="form form-control">
            <input type="hidden" name="video_id" value="{{ $video->id }}" class="form form-control">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    <br/>
    </div>