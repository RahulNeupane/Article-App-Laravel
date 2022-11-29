@extends('layouts.app')
@section('content')
    <div class="text-center container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Post</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->title }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
