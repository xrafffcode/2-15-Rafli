@extends('layouts.app')
@section('title', 'Dea | Edit')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @foreach ($contact as $c)
                    <form method="POST" action="/update_contact">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $c->id }}"> <br />
                        <div class="form-floating mb-3">
                            <label for="floatingInput">Nama</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama"
                                value="{{ $c->nama }}">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="floatingInput">Email</label>
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email"
                                value="{{ $c->email }}">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="floatingTextarea2">Pesan</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="pesan"
                                placeholder="Tulis pesanmu disini" style="height: 100px">{{ $c->pesan }}</textarea>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @endforeach

                @include('admin.partials.footer')
            </div>
        </div>
    </div>
@endsection
