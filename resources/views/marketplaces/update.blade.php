 <h2>{{__('app.c_table')}}</h2>
    <section id="section_kontakti">
            <div class="nav_objects" id="kontakti"><h2>{{__('app.c_table')}}</h2></div>
            <div class="div_text">
                <p>{{__('app.c_table_bio')}}</p>
                
            </div>
            
            <div id="form_box">
                <form  id="form" action="{{route('marketplace.update')}}" method="POST">
                    @csrf
                    
                    <div class="form_element">
                        
                        <input type="hidden" name="seller_id" id="seller_id" value="111">
                    </div>

                    <div class="form_element">
                        <label for="table_kind_id">{{__('app.Table kind')}}</label>
                        <select id="table_kind_id" name="table_kind_id" required>
                            <option disabled selected> {{__('app.Select a kind')}} </option>
                            @foreach ($kinds as $kind)
                                <option value="{{$kind->id}}">
                                    {{__('app.'. $kind->table_kind)}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form_element">
                        <label for="name">{{__('app.table_name')}}</label>
                        <input type="text" name="name" id="name" required placeholder="Oak table" value="{{old('name')}}">
                    </div>

                    <div class="form_element">
                        <label for="price">{{__('app.price')}}</label>
                        <input type="number"  name="price" id="price" required placeholder="250" value="{{old('price')}}">

                    </div>
                    
                    <div class="form_element">
                        <label for="description">{{__('app.description')}}</label>
                        <textarea name="description" id="description"  rows="10" >{{old('description')}}</textarea>
                    </div>

                    <div class="form_element form_button">
                        <label for="reset"></label>
                        <input type="reset" value="{{__('app.c_table_clear')}}" id="reset">
                    </div>

                    <div class="form_element form_button">
                        <label for="submit"></label>
                        <input type="submit" value="{{__('app.c_table_submit')}}" id="submit">
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