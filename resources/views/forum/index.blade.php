@extends('layouts.layouts')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h1>💬 Forum Diskusi</h1>

    <a href="{{ route('forum.create') }}"
       class="btn btn-primary">
        + Buat Topik
    </a>

</div>

<div class="row mb-4">

    <div class="col-md-6">

        <div class="card bg-primary text-white">

            <div class="card-body">

                <h3>{{ $totalForum }}</h3>

                <p>Total Topik</p>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card bg-success text-white">

            <div class="card-body">

                <h3>{{ $totalComment }}</h3>

                <p>Total Komentar</p>

            </div>

        </div>

    </div>

</div>

<div class="card shadow-sm">

    <div class="card-body">

        <table class="table table-striped table-hover">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Author</th>
                    <th width="180">Aksi</th>
                </tr>

            </thead>

            <tbody>

            @forelse($forums as $forum)

                <tr>

                    <td>{{ $forum->id }}</td>

                    <td>
                        <strong>{{ $forum->title }}</strong>
                    </td>

                    <td>{{ $forum->author }}</td>

                    <td>

                        <a href="{{ route('forum.show',$forum->id) }}"
                        class="btn btn-info btn-sm">
                            Detail
                        </a>

                        <a href="{{ route('forum.edit',$forum->id) }}"
                        class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('forum.destroy',$forum->id) }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus topik?')">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="4" class="text-center text-muted">

                        Belum ada diskusi 😢

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection