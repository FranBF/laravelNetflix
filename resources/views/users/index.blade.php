<!-- @extends('layouts.master') -->
<h1>Hola</h1>

    <div class="col-lg-12">

        <h1 class="my-4">Property edit</h1>
        <form action="{{route('users.update',Auth::user()->id)}}" method="POST">
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
            <input class="password " name="password" >
            
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    <br/>
    </div>

