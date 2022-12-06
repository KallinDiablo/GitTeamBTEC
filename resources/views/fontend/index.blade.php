@INCLUDE('fontend.layout.header')

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/free-vector/toy-store-sale-flyer-templates-vector-set_107791-14756.jpg?w=1380&t=st=1670303164~exp=1670303764~hmac=b55b63df9dd015ff0170810782f101acfe380acef67bec697c8b0ed73cdacc34" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-vector/flat-festas-juninas-landing-page-template_23-2149400810.jpg?w=1060&t=st=1670303343~exp=1670303943~hmac=3f2157fd01a0305178e404f65085e40a47a1b4710c58730baa56f8ec0e233693" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        
      </div> 
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h2>f</h2>
        
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <h3>ToyShop</h3>
  


        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach ($products as $key => $value)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('storage/products/' . $value->pImage1)}} " alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $value->pName }}</h5>
                                    <!-- Product price-->
                                   <p style="font-size:15px ; color:000;"> Price: <span style="font-size:11px">{{ $value->pPrice }}</span> </p>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('detail',$value->pID) }}">View detail</a></div>
                            </div>
                        </div>
                    </div>

                

@endforeach


                </div>
            </div>
        </section>
        <!-- Footer-->



        @include('fontend.layout.footer')


  
