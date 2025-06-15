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
                    <div class="dropdown">
                        <a>{{__('app.selection')}}</a>
                        <div class="content">
                            <a href="#edamgaldi">Ēdamgaldi</a>
                            <a href="#kafijas_galdi">Kafijas galdi</a>
                            <a href="#specialie_galdi">Speciālie galdi</a>
                        </div>
                    </div>
                </li>
                <li><a href="#piegade">Piegāde</a></li>
                <li><a href="#par_mums">{{__('app.About_us')}}</a></li>
                <li><a href="#kontakti">{{__('app.Contacts')}}</a></li>
                
            </ul>      
        </nav>
        <nav class="navbar">            
            <ul>   
                <li>{{__('app.Tables')}}</li>
                <li class="mobile"><a href="/">{{__('app.start')}}</a></li>
                <li class="mobile">
                    <div class="dropdown">
                        <a href="/marketplace">{{__('app.selection')}}</a>
                        <div class="content">
                            <a href="#edamgaldi">Ēdamgaldi</a>
                            <a href="#kafijas_galdi">Kafijas galdi</a>
                            <a href="#specialie_galdi">Speciālie galdi</a>
                        </div>
                    </div>
                </li>
                <li class="mobile"><a href="#piegade">Piegāde</a></li>
                <li class="mobile"><a href="#par_mums">{{__('app.About_us')}}</a></li>
                <li class="mobile"><a href="#kontakti">{{__('app.Contacts')}}</a></li>
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
