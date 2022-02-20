@extends('layouts.master')

@section('main')
    <h1 class="mb-3">Contact Us</h1>
    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama">
            <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="pesan"
                placeholder="Tulis pesanmu disini" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Pesan</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
