@include('partials.nav')
<div style="height:60px; width:100%;"></div><!-- MENU END -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="infinite-scroll"> 
          <div class="col-md-12"><br>
          <h3 class="text-center">{{$article->title}}</h3>
          <div>{!!$article->content!!}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('partials.footer')
