<!-- FOOTER -->
<footer class="bs-footer" role="contentinfo">
    <small></small>
    <hr>
    <div class="container">
      <small></small>
      <address>
        <small></small>
        <div class="col-md-4">
          <small>{{$contacts->foundationname}}<br>
          <abbr title="KRS">KRS:</abbr> {{$contacts->krs}}<br></small>
        </div><small></small>
        <div class="col-md-4" style="text-align: center">
          <small><i class="fas fa-home"></i> ul.{{$contacts->street}}<br>
          {{$contacts->postalcode}} {{$contacts->city}}<br>
          {{$contacts->country}}<br></small>
        </div>
        <div class="col-md-4" style="text-align: right">
          <div><small><abbr title="Phone"><i class="fas fa-phone"></i> T:</abbr> {{$contacts->phone}}</small></div>
          @if(isset($contacts->phone2))
          <div><small><abbr title="Phone"><i class="fas fa-phone"></i> T:</abbr> {{$contacts->phone2}}</small></div>
          @endif
          @if(isset($contacts->phone3))
          <div><small><abbr title="Phone"><i class="fas fa-phone"></i> T:</abbr> {{$contacts->phone3}}</small></div>
          @endif
        </div><small></small>
      </address>
    </div>
  </footer><!-- FOOTER END -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		
  <script src="{{URL::asset('js/bootstrap.js')}}"></script>
  <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('js/wow.min.js')}}"></script>
  <script>
$(document).ready(function(){
  new WOW().init();
  $(".owl-carousel").owlCarousel({
    items:1,
    loop:true,
    dots:false,
    nav:true,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
  });
});
  </script>

</body>
</html>