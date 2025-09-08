@extends('launch.windows')
@section('container')
    <form method="POST" action="{{route('launch.ai')}}">
        @csrf
        <p>X:\> Welkom bij Hack The Planet!</p>
        <p>X:\> Probeer deze "Computer" maar te vernietigen met Command Prompt commands als je dat kan :P</p>
        <br>
        <p>X:\> Voer je destructive command in en druk op Enter AI zal besluiten of dit destructive genoeg was...</p>
        <br>
        <section><p>X:\> </p></section>
        <input name="answerField" type="text" placeholder="..." required>
    </form>

@endsection
