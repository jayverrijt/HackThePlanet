@extends('launch.windows')
@section('container')
    <form method="POST" action="{{route('launch.ai')}}">
        @csrf
        <p>X:\> Welkom bij Hack The Planet!</p>
        <p>X:\> Gelukkig was je commando niet harmfull je kan hier onder zien wat het commando ongeveer zal doen.</p>
        <br>
        <p>Als je nog een commando wil probleren druk dan <a href="{{route('launch.prompt')}}">hier</a> om terug te gaan.</p>
        <br>
        <p>---</p>
        <br>
        <input class="responseWidth" name="answerField" type="text" value="{{$explain}}" required disabled>
    </form>
@endsection
