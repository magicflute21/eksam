@extends('app')

@section('content')

<div class="page-wrapper p-3" id="create-post">
    <div class="container mt-5">
        <div class="flex-row">
            <div class="card col-lg-6 col-md-12">
                <div class="card-body">
                    <div class="card-inside mt-3">
                        <p class="confirmation" style="color:green"> {{ session('confirmation') }} </p>
                        <p style="text-decoration:underline">Toode</p>
                        <p class="prod">Nimetus: </p>
                        <p class="prod">Hind: </p>
                        <p class="prod">Kood: </p>
                        <p class="prod">Tootja: </p>
                        <p class="prod">Platvorm: </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
