<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Hack The Planet - Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/scss/global.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script type="application/javascript">
        let openCtrl = 0;
        function openStartMenu() {
            var button = document.getElementById('startBtn').classList;
            var menu = document.getElementById('startMenu').classList;

            if (openCtrl == 0) {
                openCtrl = 1;
                menu.add('open');
                menu.remove('close');
            } else if (openCtrl == 1) {
                openCtrl = 0;
                menu.add('close');
                menu.remove('open');
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="taskbar">
            <div class="startBtn" id="startBtn" onclick="openStartMenu()">
                <img src="{{asset('assets/images/win10StartBtn.png')}}" alt="start menu">
            </div>
            <div class="idiotCoinHolder">
                <p>{{session('idiotcoin')}} Idiotcoin(s) 🤦</p>

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
        <div class="startMenu close" id="startMenu">
            <h1>Idiotshop</h1>

            <div class="storeHolder">
                <p class="storeHeader">Koop hier je shell's met Idiotcoin®</p>
                <div class="storeitem cmd">
                    <form method="POST" action="{{route('ic-buyhandler')}}">
                    @csrf
                    <img src="{{asset('assets/images/wincmd.png')}}">
                    <p>Windows CMD</p>
                    @if(session('cmd') == '1')
                        <buttton type="submit" name="shell" value="cmd">Switch</buttton>
                    @endif
                    </form>
                </div>
                <div class="storeitem pwsh">
                    <form method="POST" action="{{route('ic-buyhandler')}}">
                        @csrf
                        <img src="{{asset('assets/images/pwsh.png')}}">
                        <p>PowerShell</p>
                        @if(session('pwsh') == '2')
                            <button type="submit" name="shell" value="pwsh">Using</button>
                        @elseif(session('pwsh') == '1')
                            <button type="submit" name="shell" value="pwsh">Switch</button>
                        @elseif(session('pwsh') == '0')
                            <button type="submit" name="shell" value="pwsh">20 Idiotcoins</button>
                        @endif
                    </form>
                </div>
                <div class="storeitem arch">
                    <form method="POST" action="{{route('ic-buyhandler')}}">
                    @csrf
                    <img src="{{asset('assets/images/arch-bashsh.png')}}">
                    <p>ArchLinux (WSL)</p>
                    @if(session('arch') == '2')
                        <button type="submit" name="shell" value="arch">Using</button>
                    @elseif(session('arch') == '1')
                        <button type="submit" name="shell" value="arch">Switch</button>
                    @elseif(session('arch') == '0')
                        <button type="submit" name="shell" value="arch">90 Idiotcoins</button>
                    @endif
                    </form>
                </div>
                <div class="storeitem gentoo">
                    <form method="POST" action="{{route('ic-buyhandler')}}">
                    @csrf
                    <img src="{{asset('assets/images/gentoo-sh.png')}}">
                    <p>Gentoo (WSL)</p>
                    @if(session('gentoo') == '2')
                        <button type="submit" name="shell" value="gentoo">Using</button>
                    @elseif(session('gentoo') == '1')
                        <button type="submit" name="shell" value="gentoo">Switch</button>
                    @elseif(session('gentoo') == '0')
                        <button type="submit" name="shell" value="gentoo">120 Idiotcoins</button>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
