@extends('layouts.master')

@section('title', 'Halaman Gallery')

@section('main')
    <h1>Halaman Gallery</h1>
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://4.bp.blogspot.com/-XG9NVsyqrhU/Vz1gcUEN3OI/AAAAAAAAAn0/kSV-WUyocJkC2sahFz1sv6XD0WrgMLjxACLcB/s1600/OPSI-FOTO-BERITA-III-A.png"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://smktelkom-pwt.sch.id/wp-content/uploads/2020/08/HUT-SMK-TELKOM-PURWOKERTO-KE-27-1.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://smktelkom-pwt.sch.id/wp-content/uploads/2019/12/ANNUAL-MANAGEMENT-MEETING-1.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
