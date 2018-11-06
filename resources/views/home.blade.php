@include('partials.nav')
  <div style="height:60px; width:100%;"></div><!-- MENU END -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-5"><br>  <!--wow fadeInLeft -->
          <img alt="banner" src="{{URL::asset('img/logo256.png')}}">
        </div>
        <div class="col-md-7 ">  <!--wow fadeInRight  -->
          <img src="{{URL::asset('img/banner-PL.png')}}" style="width:100%;">
          <p style="text-align:justify;">Celem działalności Fundacji 
            In-Posterum jest wspieranie polskiej kultury, przedsiębiorczości i 
            innowacyjności. Chcemy poprzez komercjalizację i transfer technologii, 
            rozwój polskiego eksportu oraz kultury, wspomagać instytucje i osoby 
            mające nowatorskie pomysły.
          </p>
          <p style="text-align:justify;">Wierzymy, iż efekty naszej pracy przyczynią się do zwiększenia innowacyjności oraz konkurencyjności polskiej gospodarki.</p>
        </div>
      </div>
      <br>
      <!-- <div class="text-center slider-head">Aktualności</div>
      <div class="owl-carousel owl-theme">
        @foreach($latestArticles as $article)
        @if (isset($article->image))<div class="slide" style="background-image: url({{ Voyager::image( $article->image ) }}); background-repeat:no-repeat;  background-position: center; ">
        @else <div class="slide" style="background-image: url({{ Voyager::image( $article->image ) }}); background-repeat:no-repeat;  background-position: center; ">
        @endif
          <div class="slide-caption">
            <p class="slide-caption_category">{{$article->type}}</p>
            <p class="slide-caption_title">{{$article->title}}</p>
            <p class="slide-caption_subtitle">{{$article->lead}}</p>
            <a href="" class="slide-caption_button">Czytaj dalej...</a>
          </div>
        </div>
        @endforeach
      </div> -->
    </div>
  </div>


@include('partials.footer')
