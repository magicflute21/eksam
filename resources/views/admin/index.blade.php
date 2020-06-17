@extends('app')

@section('content')

<div class="page-wrapper p-3" id="create-post">
    <div class="container mt-5">
        <div class="flex-row">
            <div class="card col-lg-6 col-md-12">
                <div class="card-body">
                    <div class="card-inside mt-3">
                        <p>Sisesta toode</p>
                        <form action="/admin" method="post">
                            <div class="form-group">
                               <label for="user">Nimetus</label>
                                <input type="text" id="name" name="name" autocomplete="off">

                                @csrf

                            </div>
                            <div class="form-group">
                                <label for="price">Hind</label>
                                <input type="text" id="price" name="price" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="code">Kood</label>
                                <input type="text" id="code" name="code" autocomplete="off">
                            </div>
                            {{-- <div class="form-group">
                                <label for="file">Lisa pilt</label>
                                <input type="file" id="file" name="file" autocomplete="off">
                            </div> --}}
                            <div class="form-group">
                                <label for="company">Tootja</label>
                                <input type="text" id="company" name="company" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="platform">Platvorm</label>
                                <select name="platform" id="platform">
                                    <option value="pc">PC</option>
                                    <option value="xbox">XBox</option>
                                    <option value="playstation">Playstation</option>
                                    <option value="switch">Switch</option>
                                  </select>
                            </div>
                            {{-- <div class="form-group">
                                <textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
                            </div> --}}
                            <button class="button btn3">saada</button>
                            <p class="confirmation" style="color:green"> {{ session('confirmation') }} </p>
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
