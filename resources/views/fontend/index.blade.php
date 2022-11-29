@INCLUDE('fontend.layout.header')
<header class="bg-dark py-5">
                      <h4 style="font-size:40px ; text-align:center ; color:#fff; padding-bottom:30px">ToyShop</h4>
                    <img style="width:100%; height:500px" src="{{asset('storage/products/7364045.jpg')}}" alt="">
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
                                    {{ $value->pPrice }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('home/product-detail',$value->pID) }}">View detail</a></div>
                            </div>
                        </div>
                    </div>

                

@endforeach


                </div>
            </div>
        </section>
        <!-- Footer-->



        @include('fontend.layout.footer')


  
