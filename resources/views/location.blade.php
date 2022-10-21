@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class='mb-3'>{{ $title }}</h1>
                <article>
                    <img src="https://source.unsplash.com/500x400?church" class="card-img-top" alt="church">
                    <h2>
                        {{ $location->nama_pos }}
                    </h2>
                    <h5>{{ $location->alamat_pos }}</h5>
                    <h6><a href="/categories/{{ $location->locationCategory->slug }}" class="text-dark">{{ $location->locationCategory->name }}</a></h6>
                    <p>Ibadah Minggu: Pkl. {{ $location->jam_ibadah }} Wita</p>
                </article>
            </div>
        </div>
    </div>
    
@endsection