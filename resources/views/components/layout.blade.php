<doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @vite('resources/css/style.css')
    @vite('resources/js/script.js')


</head>
<body>
    <header class="navigation">
        <nav class="sidebar">            
            <ul>   
                <li id="sidebar_close"><div>Aizvērt</div></li>
                <li><a href="#">{{__('app.start')}}</a></li>
                <li>
                    <a>{{__('app.selection')}}</a>
                </li>
                <li><a href="#piegade">Piegāde</a></li>
                <li><a href="#par_mums">{{__('app.About_us')}}</a></li>
                <li><a href="#kontakti">{{__('app.Contacts')}}</a></li>
                
                @guest
                    <li><a href="{{route('show.login')}}">{{__('app.Log in')}}</a></li>
                    <li><a href="">{{__('app.register')}}</a></li>
                @endguest

                @auth
                    <li><a href="{{route('marketplace.mylistings')}}">{{__('app.my offers')}}</a></li>
                    <li><a href="/marketplace/create">{{__('app.create')}}</a></li>
                    <li><a href="" onclick="event.preventDefault();document.getElementById('logout_form').submit();"> {{__('app.logout')}} </a></li> 
                @endauth
                @if (session('locale')=='en')
                    <li><a href="{{route('lang.switch',['locale'=>'lv'])}}"> {{__('app.lv')}} </a></li>
                @else
                    <li><a href="{{route('lang.switch',['locale'=>'en'])}}"> {{__('app.en')}} </a></li>
                @endif
            </ul>      
        </nav>
        <nav class="navbar">            
            <ul>   
                <li>{{__('app.Tables')}}</li>
                <li class="mobile"><a href="/">{{__('app.start')}}</a></li>
                <li class="mobile">                  
                    <a href="/marketplace">{{__('app.selection')}}</a>                        
                </li>   
                
                  
                @guest             
                    <li><a href="{{route('show.login')}}">{{__('app.Log in')}}</a></li>
                    <li><a href="{{route('show.register')}}">{{__('app.register')}}</a></li>
                @endguest
                @auth
                    
                    <li><a href="{{route('marketplace.mylistings')}}">{{__('app.my offers')}}</a></li>
                    <li><a href="/marketplace/create">{{__('app.create')}}</a></li>

                    <form id="logout_form" action="{{route('logout')}}" method="POST" style="display:none;">
                        @csrf
                    </form>
                    <li><a href="" onclick="event.preventDefault();document.getElementById('logout_form').submit();"> {{__('app.logout')}} </a></li> 
                @endauth
                @if (session('locale')=='en')
                    <li><a href="{{route('lang.switch',['locale'=>'lv'])}}"> {{__('app.lv')}} </a></li>
                @else
                    <li><a href="{{route('lang.switch',['locale'=>'en'])}}"> {{__('app.en')}} </a></li>
                @endif
                    
                
                <li id="sidebar_open">
                    Pārskats
                </li>
            </ul>      
        </nav>
    </header>
    <main class="container">
        {{$slot}}
    </main>

</body>
</html>
