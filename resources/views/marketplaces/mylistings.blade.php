<x-layout>
    
    <div class="nav_objects" id="piedavajums"><h1>{{__('app.my offers')}}</h1></div>

    <div class="container_piedavajumi container_edamgaldi">    
        @foreach ($mylistings as $item)
            <div class="card">
                <div class="card_img">
                    <img src="${item.table_img}" alt="attels">
                </div>
                <div class="card_text">
                    <h3>{{$item["name"]}}</h3>    
                </div>
                <div class="card_price">
                    <i>{{$item["price"]}}</i>
                </div>
                <div class="card_button">
                    <a href="/marketplace/mylistings/mylisting/{{$item["id"]}}">{{__('app.View details')}}</a>

                </div>
            </div>
        @endforeach
        
        
            
    </div>
    
</x-layout>