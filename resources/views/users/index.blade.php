@extends('layouts.app')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        Cancellato utente ID {{session('status')}}
    </div>
@endif
    <h2>Elenco utenti</h2>
    @foreach ($users as $user)
        <ul>
            <li>{{$user->name}}</li>
            <li>{{$user->email}}</li>
            <li>{{$user->avatar->avatar}}</li>
            <a href="{{route('users.show',$user->id)}}"><li>Dettagli</li></a>
        </ul>
    @endforeach
@endsection
