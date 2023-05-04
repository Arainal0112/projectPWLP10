@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center mt-2">
            <h1>SISTEM KELOLA ARTIKEL</h1>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('articles.create') }}"> Tambah Artikel</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr align="center">

        <th>Judul</th>
        <th>Konten</th>
        <th>Gambar</th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <td>{{ $article->title}}</td>
        <td>{{ $article->content }}</td>
        <td class="col-md-6"><img width="100%" src="{{asset('storage/'.$article->featured_image)}}"></td>
        
        </td>

    </tr>
    @endforeach
</table>
@endsection
