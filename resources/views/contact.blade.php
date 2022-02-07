@extends('master')

@section('main')
    <h1 class="mb-3">Contact Us</h1>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nama">
        <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
            style="height: 100px"></textarea>
        <label for="floatingTextarea2">Pesan</label>
    </div>
    <button type="button" class="btn btn-primary">Primary</button>
@endsection
