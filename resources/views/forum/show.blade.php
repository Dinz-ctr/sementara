@extends('layouts.layouts')

@section('content')

<div class="card mb-4">
    <div class="card-body">

        <h2>{{ $forum->title }}</h2>

        <small class="text-muted">
            Oleh {{ $forum->author }}
        </small>

        <hr>

        <p>
            {{ $forum->content }}
        </p>

    </div>
</div>

<div class="card mb-4">

    <div class="card-header">
        Komentar ({{ $forum->comments->count() }})
    </div>

    <div class="card-body">

        @forelse($forum->comments as $comment)

            <div class="border rounded p-3 mb-3">

    <div class="d-flex justify-content-between">

        <div>

            <strong>{{ $comment->author }}</strong>

            <small class="text-muted">
                {{ $comment->created_at->format('d M Y H:i') }}
            </small>

        </div>

        <div>

            <a href="{{ route('comment.edit',$comment->id) }}"
               class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('comment.destroy',$comment->id) }}"
                  method="POST"
                  class="d-inline">

                @csrf
                @method('DELETE')

                <button type="submit"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus komentar?')">
                    Hapus
                </button>

            </form>

        </div>

    </div>

    <hr>

    {{ $comment->comment }}

</div>

        @empty

            <p class="text-muted">
                Belum ada komentar
            </p>

        @endforelse

    </div>

</div>

<div class="card">

    <div class="card-header">
        Tambah Komentar
    </div>

    <div class="card-body">

        <form action="{{ route('forum.comment',$forum->id) }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Nama</label>

                <input type="text"
                       name="author"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Komentar</label>

                <textarea
                    name="comment"
                    class="form-control"
                    rows="4"></textarea>

            </div>

            <button class="btn btn-primary">
                Kirim Komentar
            </button>

        </form>

    </div>

</div>

@endsection