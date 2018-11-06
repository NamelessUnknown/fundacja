@include('partials.nav')
<div style="height:60px; width:100%;"></div><!-- MENU END -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="infinite-scroll"> 
          <div class="col-md-12"><br>
          <h2 class="text-center">PLIKI</h2>
            @foreach($articles as $article)
            <div class="listed-item">
              <p class="date-placement"><i class="fas fa-calendar-alt"></i><strong> {{$article->created_at}}</strong></p>
              <h2 >{{$article->title}}</h2>
              <h3>{{$article->lead}}</h3>
              @if(isset($article->pdf))
                <a href="{{ URL::route('home') }}/storage/{{$article->pdf}}">Link do dokumentu</a>
              @endif
            </div>
            @endforeach
          </div>
        </div>
      </div>
      {{ $articles->links() }}
    </div>
  </div>
@include('partials.footer')