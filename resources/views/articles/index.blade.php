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
        <th>Aksi</th>
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->title}}</td>
            <td>{{ $article->content }}</td>
            <td class="col-md-6"><img width="100%" src="{{asset('storage/'.$article->featured_image)}}"></td>
            <td class="col-md-2" align="center">

                <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </td>
        </tr>
        @endforeach
        </table>
        <div class="my-2" align="right">
            <a class="btn btn-primary" href="articles/cetak_pdf"> Cetak PDF </a>
        </div>
        @endsection

