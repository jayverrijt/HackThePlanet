<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Hack The Planet - Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/scss/global.css')}}">
</head>
<body>
    <div class="container">
        <div class="taskbar">
            <div class="startBtn">
                <img src="{{asset('assets/images/win10StartBtn.png')}}" alt="start menu">
            </div>
        </div>
        <div class="mainScreenContainer">
            <div class="commandFieldContainer">
                <div class="cmdFieldName">
                    <p>Michaelsoft WinBlows Command Prompt</p>
                </div>
                <div class="cmdField">
                    <p>Michaelsoft WinBlows [Version 6.9.0492]</p>
                    <p>(bruh) Dogfood Studios Inc. All right NOT reserved.</p>
                    <br>
                    @yield('container')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
