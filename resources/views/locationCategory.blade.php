@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 class="mb-5">Kategori Gereja: {{ $category }}</h1> 
        <div class="row">
            @foreach ($locations as $location)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x400?church" class="card-img-top" alt="church">
                        <div class="card-body">
                            <article>
                                <h2>
                                    <a href="/locations/{{ $location->slug }}" class="text-dark">{{ $location->nama_pos }}</a>
                                </h2>
                                <h5>{{ $location->alamat_pos }}</h5>
                                <h6>{{ $location->tipe_pos }}</h6>
                                <p>Ibadah Minggu: Pkl. {{ $location->jam_ibadah }} Wita</p>
                            </article>
                        </div>       
                    </div>
                </div> 
            @endforeach 
        </div>
        <a href="/locations" class="text-dark"><- Daftar Gereja</a> | <a href="/categories" class="text-dark">Lihat semua kategori-></a>
    </div>
@endsection
