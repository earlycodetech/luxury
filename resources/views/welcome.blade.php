@extends('layouts.app')
@section('content')
    <section>
        <div class="container-fluid position-relative p-0 hero">
            <img src="{{ asset('images/img-3.jpg') }}" alt="hero image" class="img-fluid">
            <div class="position-absolute top-50 w-100 text-center">
                <h1 class="fw-bold text-white">
                    Welcome to Luxury Hotels
                </h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container bookings position-relative">
            <div class="card  border-0 mx-auto bg-transparent shadow" style="max-width:900px;">
                <div class="card-body">
                    <h3 class="text-center fst-italic">
                        Book a room with us today
                    </h3>
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="form-label">Room Type</label>
                                <select class="form-select">
                                    @forelse ($rooms as $room)
                                        <option> 
                                            {{ $room->room_name . ' - ₦' . number_format($room->room_price, 0) }}
                                        </option>
                                    @empty
                                        <option disabled> No Room Available</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label"> Number of Rooms </label>
                                <input type="number" value="1" class="form-control text-center bg-transparent">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label"> Checkin Date </label>
                                <input type="datetime-local" class="form-control bg-transparent">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label"> Checkout Date </label>
                                <input type="datetime-local" class="form-control bg-transparent">
                            </div>

                            <div class="col-12 text-center py-4">
                                <button class="btn btn-primary rounded-pill px-5">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <h3 class="text-center fst-italic mb-5">
                At Luxury Hotels You Enjoy...
            </h3>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-transparent border-0 shadow">
                        <img src="{{ asset('images/img-1.jpg') }}" alt="" class="card-img-top">
                        <h5 class="card-body text-center py-3">
                            Exemplary Service
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-transparent border-0 shadow">
                        <img src="{{ asset('images/img-4.jpg') }}" alt="" class="card-img-top">
                        <h5 class="card-body text-center py-3">
                            Beautiful Rooms
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-transparent border-0 shadow">
                        <img src="{{ asset('images/img-2.jpg') }}" alt="" class="card-img-top">
                        <h5 class="card-body text-center py-3">
                            Wonderful Scenery
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
