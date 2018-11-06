@include('en.partials.nav')
  <div style="height:60px; width:100%;"></div><!-- MENU END -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-5"><br>
        <img alt="banner" src="{{URL::asset('img/logo256.png')}}"></div>
        <div class="col-md-7">
          <!--        
        <div class="btn-group pull-right">
            <a class="btn btn-primary " role="button">Polski</a>
            <a href="en/index.php" class="btn btn-primary btn-" role="button">English</a>
    
        </div>
        <br>
    -->
          <img src="{{URL::asset('img/en/banner-EN.png')}}" style="width:100%;">
          <p style="text-align:justify;">The In-Posterum Foundation was 
created with the purpose of promoting culture, the development of Polish
 entrepreneurship and innovation. Our actions are aimed at supporting 
the process of technology transfer and commercialization and the 
promotion of Polish exports abroad. We believe that the results of our 
work will contribute to the development of the Polish economy and the 
improvement of its competitiveness.
          </p>
        </div>
      </div>
    </div>
  </div>
@include('en.partials.footer')
