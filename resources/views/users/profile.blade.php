@extends('layouts.app
@section('content')
    <section>
        <div class="container my-5">
            <form action="" method="post">
                
                <div class="row"> 
                    <h1>My Profile</h1>
    
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">
                            Name
                        </label>
                        <input type="text" value="{{ auth()->user()->name }}" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">
                            Email
                        </label>
                        <input type="text" value="{{ auth()->user()->email }}" class="form-control" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">
                            Phone Number
                        </label>
                        <input type="tel" value="{{ auth()->user()->phone_number }}" name="phone_number" class="form-control">
                    </div>

                    <div class="col-12 text-center py-5">
                        <button class="btn btn-primary">
                            Update
                        </button>
                    </div>
    
                </div>
            </form>
        </div>
    </section>
@endsection