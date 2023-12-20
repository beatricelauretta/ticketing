@extends ('_layouts.app')
@section ('content')
<section class="checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{asset('images/ill_register.png')}}" height="400" class="mb-5" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        CONGRATULATIONS!
                    </p>
                    <h2 class="primary-header ">
                        Please go to the Dashboard page and proceed with the payment
                    </h2>
                    <a href="#" class="btn btn-primary mt-3">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection