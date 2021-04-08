<!--  @extends('layouts.app')  -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Inicio') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>

                        @endif
                        <a href="{{ route('users.edit', Auth::user()->id) }}" class="btn btn-primary my-2">Perfil</a>
                        @if (Auth::user()->hasRole('admin'))
                            <a href="{{ route('videos.create', Auth::user()->id) }}" class="btn btn-secondary my-2">Subir
                                Video</a>
                            <a href="{{ route('users.show', Auth::user()->id) }}" class="btn btn-secondary my-2">Administrar usuarios</a>
                            <a href="{{ route('reports.show', Auth::user()->id) }}" class="btn btn-secondary my-2">Administrar bloqueos</a>
                        @elseif(Auth::user()->hasRole('editor'))
                            <a href="{{ route('videos.create', Auth::user()->id) }}" class="btn btn-secondary my-2">Subir
                                Video</a>
                        @endif
                        <a href="{{ route('videos.index') }}" class="btn btn-secondary my-2">Ir a videos</a>
                        <section>
                            <div class="album py-5 bg-light">

                            </div>
                        </section>

                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
