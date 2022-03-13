@extends('layouts.app')
@section('title', 'Rafli | Dashboard')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($pesan as $p)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->pesan }}</td>
                                <td>
                                    <button class="item" data-placement="top" title="" data-original-title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <a href="/delete_contact/{{ $p->id }}">
                                        <button class="item ml-3" data-placement="top" title=""
                                            data-original-title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                </table>


                @include('admin.partials.footer')
            </div>
        </div>
    </div>
@endsection
