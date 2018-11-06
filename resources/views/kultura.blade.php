@include('partials.nav')
  <div style="height:60px; width:100%;"></div><!-- MENU END -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="infinite-scroll"> 
          <div class="col-md-12"><br>
            @foreach($articles as $article)
              <h2>{{$article->title}}</h2>
              <p><strong>{{$article->type}}</strong> <i class="fas fa-calendar-alt"></i><strong>{{$article->created_at}}</strong> </p>
              <h3>{{$article->lead}}</h3>
              <button><a href="#">Czytaj więcej</a></button>
              <hr>
            @endforeach
          </div>
        </div>
      </div>
      {{ $articles->links() }}
    </div>
  </div>
@include('partials.footer')
