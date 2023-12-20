@extends ('_layouts.app')
@section ('content')
<section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        ♬ EMBARK ON A COLORFUL ADVENTURE ♬
                    </p>
                    <h2 class="primary-header">
                        Explore Creativity and Enrich Your Entertainment Journey
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="item-bootcamp">
                                <h1 class="package">
                                    {{$camp->title}}
                                </h1>
                                <br>
                                <img src="{{asset('images/item_event.png')}}" alt="" class="cover">
                                <p class="description">
                                    Pancawarna is a musical drama presented by students from SMA Negeri 81 Jakarta. Based on 'Panca' and 'Warna,' it aims to preserve the five cultural colors of Indonesia: dance, music, traditional attire, language, and customs
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-5 col-12">
                            @if($errors->any())
                            <div class="alert alert-warning" role= "alert">
                                <strong>Oops!</strong> {{$errors->first()}}
                            </div>
                            @endif
                            <form action="{{route('checkout.store', $camp->id)}}" method="post" class="basic-form">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label">Full Name</label>
                                    <input type="name" type="text" class="form-control" value="{{@Auth::user()->name}}"
                                    aria-describedby="fullnameCheckout" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email Address</label>

                                    <input type="email" type="email" class="form-control" value="{{@Auth::user()->email}}"
                                    aria-describedby="emailCheckout" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Occupation</label>
                                    <input type="occupation" type="text" class="form-control" value="{{@Auth::user()->occupation}}"
                                    aria-describedby="occupationCheckout" required>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="/assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection