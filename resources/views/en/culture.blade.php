@include('en.partials.nav')
  <div style="height:60px; width:100%;"></div><!-- MENU END -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="infinite-scroll"> 
          <div class="col-md-12"><br>
            @foreach($articles as $article)
            @if($article->titleen)
              <h2>{{$article->titleen}}</h2>
              <p><strong>{{$article->type}}</strong> <i class="fas fa-calendar-alt"></i><strong>{{$article->created_at}}</strong> </p>
              <h3>{{$article->leaden}}</h3>
              <button><a href="#">Read more</a></button>
              <hr>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      {{ $articles->links() }}
    </div>
  </div>
@include('en.partials.footer')
