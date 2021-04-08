<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<!-- For demo purpose -->
<div class="row">
    <div class="col-lg-7 mx-auto text-white text-center pt-5">
        <h1 class="display-4">Bootstrap 4 profile page</h1>
        <p class="lead mb-0">Easily create a profile widget using bootstrap 4.</p>
        <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
            <u>Bootstrapious</u></a>
        </p>
    </div>
</div><!-- End -->


<div class="row py-5 px-4">
    <div class="col-xl-4 col-md-6 col-sm-10 mx-auto">

        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3"><a href="#ed" class="btn btn-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="profile mr-3"><a href="{{route('home')}}" class="btn btn-dark btn-sm btn-block">Volver al inicio</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">{{$user->name}}</h4>
                    </div>
                </div>
            </div>

            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">241</h5><small class="text-muted"> <i class="fa fa-picture-o mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">84K</h5><small class="text-muted"> <i class="fa fa-user-circle-o mr-1"></i>Followers</small>
                    </li>
                </ul>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent videos</h5>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/nicole-honeywill-546848-unsplash_ymprvp.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/dose-juice-1184444-unsplash_bmbutn.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294926/cody-davis-253925-unsplash_hsetv7.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/tim-foster-734470-unsplash_xqde00.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
                
            </div>
        </div><!-- End profile widget -->

    </div>
</div>

    <div id="ed" class="col-lg-12">

        <h1 class="my-4">Property edit</h1>
        <form action="{{route('users.update',$user->id)}}" method="POST">
            @csrf
            @method('PUT')
            Name
            <br/>
            <input type="text" name="name" class="form form-control">

            Email
            <br/>
            <input type="text" name="email"  class="form form-control">
            Pass
            <br/>
            <input type="password" class="form form-control " name="password" >
            
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    <br/>
    </div>

