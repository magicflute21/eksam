<section class="gallery">
    <h5 class="gallery-heading">populaarsed tooted</h5>
    <ul class="gallery__grid">
        <li class="gallery__grid-item">
            <div class="imagediv">
                <img src="{{ URL::to('/')}}/images/battleroyale.jpeg" alt="Battle Royale">
            </div>
            <div class="text-flex">
                <div>
                    <h6>Battle Royale<span>Uus!</span></h6>
                    <p>Vaata täpsemalt</p>
                </div>
                <a href="#" class="button btn3 btn-small ml-auto">osta</a>
            </div>
            <a href="/details" class="link"></a>
        </li>
        <li class="gallery__grid-item">
            <img src="{{ URL::to('/')}}/images/daysgone.jpg" alt="Days Gone">
            <div class="text-flex">
                <div>
                    <h6>Days Gone<span></span></h6>
                    <p>Vaata täpsemalt</p>
                </div>
                <a href="#" class="button btn2 btn-small ml-auto">osta</a>
            </div>
            <a href="/details" class="link"></a>
        </li>
        <li class="gallery__grid-item">
            <img src="{{ URL::to('/')}}/images/mariobros.jpg" alt="Mario Bros">
            <div class="text-flex">
                <div>
                    <h6>Mario Bros<span></span></h6>
                    <p>Vaata täpsemalt</p>
                </div>
                <a href="#" class="button btn4 btn-small ml-auto">osta</a>
            </div>
            <a href="/details" class="link"></a>
        </li>
        <li class="gallery__grid-item">
            <img src="{{ URL::to('/')}}/images/pokemongo.jpeg" alt="Pokemon Go">
            <div class="text-flex">
                <div>
                    <h6>Pokemon Go<span></span></h6>
                    <p>Vaata täpsemalt</p>
                </div>
                <a href="#" class="button btn1 btn-small ml-auto">osta</a>
            </div>
            <a href="/details" class="link"></a>
        </li>
        <li class="gallery__grid-item">
            <img src="{{ URL::to('/')}}/images/minecraft_city.jpg" alt="Minecraft City">
            <div class="text-flex">
                <div>
                    <h6>Minecraft City<span>Uus!</span></h6>
                    <p>Vaata täpsemalt</p>
                </div>
                <a href="#" class="button btn3 btn-small ml-auto">osta</a>
            </div>
            <a href="/details" class="link"></a>
        </li>
        <li class="gallery__grid-item">
            <img src="{{ URL::to('/')}}/images/sekiro.jpg" alt="Sekiro">
            <div class="text-flex">
                <div>
                    <h6>Sekiro<span></span></h6>
                    <p>Vaata täpsemalt</p>
                </div>
                <a href="#" class="button btn2 btn-small ml-auto">osta</a>
            </div>
            <a href="/details" class="link"></a>
        </li>

        {{-- db generated --}}
        {{-- @foreach($items as $item)

        <li class="gallery__grid-item">
            <img src="" alt="game">
            <div class="text-flex">
                <div>
                    <h6><span> {{$item->name}} </span></h6>
                    <p>Vaata täpsemalt</p>
                </div>
                <a href="#" class="button btn1 btn-small ml-auto">osta</a>
            </div>
            <a href="/details" class="link"></a>
        </li>
        @endforeach --}}
    </ul>
</section>
