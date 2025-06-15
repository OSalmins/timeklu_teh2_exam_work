<x-layout>
    <section >
            <div class="nav_objects" ><h2>{{__('app.register page')}}</h2></div>
            
            <div id="form_box">
                <form  id="form" action="{{route('register')}}" method="POST">
                    @csrf
                    
                    <div class="form_element">
                        <label for="name">{{__('app.name')}}</label>
                        <input type="text" name="name"  required placeholder="{{__('app.name')}}" value="{{old('name')}}">
                    </div>
                    <div class="form_element">
                        <label for="email">{{__('app.email')}}</label>
                        <input type="email" name="email"  required placeholder="email@gmail.com" value="{{old('email')}}">
                    </div>

                    <div class="form_element">
                        <label for="password">{{__('app.password')}}</label>
                        <input type="password"  name="password"  required placeholder="{{__('app.password')}}">

                    </div>
                    <div class="form_element">
                        <label for="password_confirmation">{{__('app.password')}}</label>
                        <input type="password"  name="password_confirmation"  required placeholder="{{__('app.password')}}">

                    </div>

                    <div class="form_element form_button">
                        <label for="submit"></label>
                        <input type="submit" value="{{__('app.register')}}" id="submit">
                    </div>

                    @if ($errors->any())
                        
                            @foreach ($errors->all() as $error)
                                <div class="form_element">
                                    <p class=" error">{{__('app.'. $error)}}</p>
                                </div>
                            @endforeach
                            
                    @endif
                    
                </form>
            </div>
    </section>
</x-layout>