@extends('app')

@section('content')
    <div class="page-wrapper p-3" id="create-post">
        <div class="container mt-5">
            <div class="flex-row">
                <div class="card col-lg-6 col-md-12">
                    <div class="card-body">
                        <div class="card-inside mt-3">
                            <p>Kirjutage meile oma kogemusest</p>
                            <form action="/feedback" method="post">
                                <div class="form-group">
                                   <label for="user">Nimi:</label>
                                    <input type="text" id="name" name="name" autocomplete="off">

                                    @csrf

                                </div>
                                <div class="form-group">
                                    <label for="title">Pealkiri:</label>
                                    <input type="text" id="title" name="title" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
                                </div>
                                {{-- {{-- <input type="button" value="saada" class="button"> --}}
                                <button class="button">saada</button>
                            </form>

                            @error('name') {{ $message }} @enderror
                            @error('title') {{ $message }} @enderror
                            @error('feedback') {{ $message }} @enderror


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
