@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-center">Create New Room</h1>

                <a href="" class="btn btn-primary">
                    All Rooms
                </a>
            </div>
            <div class="card bg-white border-0 shadow mx-auto" style="max-width: 800px;">
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-labe">Room Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-labe">Available Room</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-labe">Room Price</label>
                            <input type="number" class="form-control">
                        </div>

                        <div class="text-center mb-3">
                            <button class="btn btn-primary">
                                Create Room
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
