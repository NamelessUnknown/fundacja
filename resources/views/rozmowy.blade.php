@include('partials.nav')
<div style="height:60px; width:100%;"></div><!-- MENU END -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="infinite-scroll"> 
          <div class="col-md-12"><br>
          <h2 class="text-center">ROZMOWY</h2>
            @foreach($articles as $article)
            <div class="listed-item">
              <h2>{{$article->title}}</h2>
              <p><strong>{{$article->type}}</strong> <i class="fas fa-calendar-alt"></i><strong>{{$article->created_at}}</strong> </p>
              <h3>{{$article->lead}}</h3>
              <a href="rozmowy/{{$article->id}}/{{str_slug($article->title)}}">Czytaj więcej<i class="fas fa-chevron-right"></i></a>
              <hr>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      {{ $articles->links() }}
    </div>
  </div>
@include('partials.footer')