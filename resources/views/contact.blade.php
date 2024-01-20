@extends('layouts.app')
@section('content')
    <section>
        <div class="container py-5">
            <div class="card mx-auto border-0 shadow bg-white"  style="max-width: 600px;">
                <div class="card-header text-center">
                    <h2> Get In Touch With Us</h2>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <p class="alert alert-success">
                            {{ $message }}
                        </p>
                    @endif


                    <form action="{{ route('contact.form.submit') }}" method="post" class="row">
                        @csrf
                        
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label"> Full Name: </label>
                            <input type="text" name="name" class="form-control bg-transparent" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label"> Email: </label>
                            <input type="email" name="email" class="form-control bg-transparent" required>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea name="message" class="form-control bg-transparent" required rows="10"></textarea>
                        </div>

                        <div class="my-2">
                            <button class="btn btn-primary w-100 rounded-pill">
                                Send Mail
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection