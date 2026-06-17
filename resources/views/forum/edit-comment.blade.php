@extends('layouts.layouts')

@section('content')

<div class="card">

    <div class="card-header">
        Edit Komentar
    </div>

    <div class="card-body">

        <form action="{{ route('comment.update',$comment->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>

                <input type="text"
                       name="author"
                       class="form-control"
                       value="{{ $comment->author }}">
            </div>

            <div class="mb-3">
                <label>Komentar</label>

                <textarea name="comment"
                          class="form-control"
                          rows="5">{{ $comment->comment }}</textarea>
            </div>

            <button class="btn btn-primary">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection