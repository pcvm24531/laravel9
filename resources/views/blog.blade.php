@extends('template')
@section('content')
    <h1>Listado</h1>
    <ul>
    @foreach ($posts as $post)
        <li>
            <strong>{{ $post['id'] }}</strong>
            <a href="">
                {{$post['title']}}
            </a>
        </li>
    @endforeach
</ul>
@endsection
