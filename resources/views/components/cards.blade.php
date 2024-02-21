<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center">
            <div class=" card mt-3 mb-4 d-flex justify-content-center"  data-aos="flip-left">
                <img src="{{$image}}" class="card-img-top  rounded " id="home_img" alt="">
            </div>
        </div>
        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
            <h5 class=" mt-3">{{$name}}</h5>
            <div class="card-body ">
                <a href="{{$link}}" class="button btn btn-dark px-4 py-2 mt-3"><span>{{__("ui.Dettaglio")}}</span></a>
            </div> 
        </div>
    </div>
</div>