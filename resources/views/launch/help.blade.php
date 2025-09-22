@extends('launch.windows')
@section('container')
    <form method="POST" action="{{route('launch.ai')}}">
        @csrf
        <p>X:\> Welkom bij Hack The Planet!</p>
        <p>X:\> Je bent nu in help mode. Hier zie je voorbeelden en hoe het spel werkt.</p>
        <br>
        <p>Als je nog een commando wil probleren druk dan <a href="{{route('launch.prompt')}}">hier</a> om terug te gaan.</p>
        <br>
        <p>---</p>
        <br>
        <p class="responseWidth" name="answerField" type="text" required disabled>
        Welkom bij hack the Planet.
            <br>
            <br>
        Het spel waar je rond kan kloten met commandos en er achter kan komen wat deze doen!
            <br>
            <br>

        Het spel is opgedeeld in destructive commando's en non destructive commandos.
            <br>
        Als je een destructieve commando uitvoerd kan je een Idiotcoin mee verdienen bij zoveel coins kan je andere omgevingen (shells) ontgrendelen.

       </p>
    </form>
@endsection
