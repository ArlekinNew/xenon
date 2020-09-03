@extends('main.mainlayouts.main')

@section('content')
    <div class="container-fluid block2" >
        <h1 class="text-center text-dark ">Xenon</h1>
        <h2 class="text-center text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco.</h2>

        <button class="btn-lg btnzakaz mx-auto">Заказать звонок</button>
    </div>

    <div class="container-fluid">
        <h2 class="text-center usluga bg-dark ">Наши Услуги</h2>

        <div class=" kont_uslug">
            @foreach($services as $service)
                <div class="card card-hover cell">
                    <div class="card-img-top"><img class="img-fluid" src="{{$service->img}}"></div>
                    <div class="card-footer text-center">{{$service->name}}</div>
                </div>
            @endforeach
        </div>
    </div>



    <div class="container-fluid div-garant">
        <div class="container garant h4 shadow">
            <div>Гарантия на работы и комплектующие</div>
            <div>Мы несём ответственность за все выполненные работы и используем товары только от проверенных поставщиков</div>
        </div>
        <div class="container garant h4 shadow">
            <div>Гарантия на работы и комплектующие</div>
            <div>Мы несём ответственность за все выполненные работы и используем товары только от проверенных поставщиков</div>
        </div>
        <div class="container garant h4 shadow">
            <div>Гарантия на работы и комплектующие</div>
            <div>Мы несём ответственность за все выполненные работы и используем товары только от проверенных поставщиков</div>
        </div>
        
    </div>
    
{{-- ///////////////////////////MAP/////////////////////////////////////////////////////// --}}
    <div class="container-fluid map-cont">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.9095291134677!2d35.226976015637206!3d47.80258947919819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc5e9d698cd185%3A0x1c520e11ee0d3f68!2z0JDQvdGC0LDRgNC60YLQuNGH0LXRgdC60LDRjyDRg9C7LiwgNTMsINCX0LDQv9C-0YDQvtC20YzQtSwg0JfQsNC_0L7RgNC-0LbRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjkwMDA!5e0!3m2!1sru!2sua!4v1598900649664!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="contacts">
            <div class="shmock">
            <div class="header">Наши контакты</div>
            <div class="phones">
                <a class="phone1" href="tel:+380952132328">+38 095-213-23-28</a><br> 
                <a class="phone2" href="tel:+380972132328">+38 097-213-23-28</a><br> 
                <a class="phone3" href="tel:+3806121322328">+38 061-213-23-28</a>
            <div class="button">
            <div id="modalmk2"><a>Заказать звонок</a></div>
            </div>
            </div>
            </div>
            <div class="info">
            <ul>
            <li><span class="small">email:</span><a href="mailto:zp@tdikar.com.ua">zp@tdikar.com.ua</a></li>
            <li><span class="small">Адрес склада:</span> <span class="big str">г. Запорожье,<br> ул. Базовая 3</span></li>
            <li class="time2"><span class="small">График работы:</span><span class="big">пн-пт: c 8-00 до 17-00</span></li>
            </ul>
            </div>
        </div>
    </div>
@endsection




