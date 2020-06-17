<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <picture class="d-block w-100">
            <source media="(max-width:750px)" srcset=" {{ URL::to('/')}}/images/banner_mobile750-01.png">
            <source media="(min-width:751px)" srcset=" {{ URL::to('/')}}/images/banner1920-1.png ">
            <img src=" {{ URL::to('/')}}/images/banner1920-1.png " alt="Minecraft footer">
          </picture>
        {{-- <img class="d-block w-100" src=" {{ URL::to('/')}}/images/banner1920-1.png" alt="ad banner"> --}}
      </div>
      <div class="carousel-item">
        <picture class="d-block w-100">
            <source media="(max-width:750px)" srcset=" {{ URL::to('/')}}/images/banner_mobile750-02.png">
            <source media="(min-width:751px)" srcset=" {{ URL::to('/')}}/images/banner1920-2.png ">
            <img src=" {{ URL::to('/')}}/images/banner1920-2.png " alt="Minecraft footer">
          </picture>
        {{-- <img class="d-block w-100" src=" {{ URL::to('/')}}/images/banner1920-2.png" alt="ad banner"> --}}
      </div>
      <div class="carousel-item">
        <picture class="d-block w-100">
            <source media="(max-width:750px)" srcset=" {{ URL::to('/')}}/images/banner_mobile750-03.png">
            <source media="(min-width:751px)" srcset=" {{ URL::to('/')}}/images/banner1920-3.png ">
            <img src=" {{ URL::to('/')}}/images/banner1920-3.png " alt="Minecraft footer">
          </picture>
        {{-- <img class="d-block w-100" src=" {{ URL::to('/')}}/images/banner1920-3.png" alt="ad banner"> --}}
      </div>
    </div>
  </div>
