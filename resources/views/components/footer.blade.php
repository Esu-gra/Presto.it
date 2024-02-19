<footer class="mt-5">
   <div class="footerContainer">
      <div class="socialIcons">
         <a href=""><i class="fa-brands fa-instagram"></i></a>
         <a href=""><i class="fa-brands fa-facebook"></i></a>
         <a href=""><i class="fa-brands fa-at"></i></a>
      </div>
      <div class="footerNav d-flex justify-content-center">
         <ul class="ps-0 text-center">
            <li class="link list-group-item"><a href="{{route('home')}}">{{__("ui.Torna alla Home")}}</a></li>
            {{-- <li><a href="">News</a></li>
            <li><a href="">About</a></li> --}}
         </ul>
      </div>
   </div>
   <div class="container-fluid">
      
      {{-- <div class="row justify-content-center">
         <div class="col-5 col-md-2">
            <a class="button-88 text-decoration-none ms-4" role="button" href="">Lavora con noi</a> 
         </div>
      </div> --}}
   <div class="row mt-4">
      <div class="col-1 d-flex align-items-start justify-content-center flex-column mb-3">
         <x-_locale lang="en" />
         <x-_locale lang="es" />
         <x-_locale lang="it" />
      </div>
      <div class="footerBottom col-10 d-flex align-items-center justify-content-center">
         <p class="">Copyright &copy;2024; Design by <span class="designer">Presto.it</span></p>
      </div>
   </div>
   </div>
</footer>