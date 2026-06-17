@extends('layouts.layouts')

@section('content')

<div class="card">

    <div class="card-header">
        Edit Topik
    </div>

    <div class="card-body">

        <form action="{{ route('forum.update',$forum->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Judul</label>

                <input type="text"
                       name="title"
                       class="form-control"
                       value="{{ $forum->title }}">
            </div>

            <div class="mb-3">
                <label>Author</label>

                <input type="text"
                       name="author"
                       class="form-control"
                       value="{{ $forum->author }}">
            </div>

            <div class="mb-3">
                <label>Isi Diskusi</label>

                <textarea name="content"
                          rows="6"
                          class="form-control">{{ $forum->content }}</textarea>
            </div>

            <button class="btn btn-primary">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection