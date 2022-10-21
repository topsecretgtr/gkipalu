@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 class="mb-5">Kategori Gereja</h1> 
        @foreach ($categories as $category)
            <ul>
                <li>
                    <h2><a href="/categories/{{ $category->slug }}" class="text-dark">{{ $category->name }}</a></h2>
                </li>
            </ul>
        @endforeach 
        
        <a href="/locations" class="text-dark"><- Daftar Gereja</a>
    </div>
@endsection
