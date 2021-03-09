<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<div id="ed" class="col-lg-12">

        <h1 class="my-4">Property edit</h1>
        <form action="{{route('videos.update',$video->id)}}" method="POST">
            @csrf
            @method('PUT')
            Title
            <br/>
            <input type="text" name="title" class="form form-control">

            Category
            <br/>
            <input type="text" name="category"  class="form form-control">

            Description
            <br/>
            <input type="text" name="description"  class="form form-control">
            
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    <br/>
    </div>