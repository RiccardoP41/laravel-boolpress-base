@extends('layouts.app')
@section('content')
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        @method('POST')
        <select class="" name="user_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->id}}</option>
            @endforeach
        </select>
        <label for="title">Titolo</label>
        <input type="text" name="title" placeholder="Titolo">
        <label for="body">Testo</label>
        <textarea name="body" rows="8" cols="80"></textarea>
        <input type="submit" value="Invia">
    </form>
@endsection
