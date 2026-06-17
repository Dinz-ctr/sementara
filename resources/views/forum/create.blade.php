@extends('layouts.layouts')

@section('content')

<div class="card">

    <div class="card-header">
        <h3>Buat Topik Diskusi</h3>
    </div>

    <div class="card-body">

        <form action="{{ route('forum.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label>Judul</label>
                <input type="text"
                       name="title"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Author</label>
                <input type="text"
                       name="author"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Isi Diskusi</label>
                <textarea name="content"
                          rows="5"
                          class="form-control"></textarea>
            </div>

            <button class="btn btn-success">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection