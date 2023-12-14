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


                    @if ($message = Session::get('success'))
                        <p class="text-success fw-bold text-center mb-1">
                            {{ $message }}
                        </p>
                    @endif
                    <form action="{{ route('admin.room.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-labe">Room Name</label>
                            <input type="text" name="room_name" class="form-control">
                            @error('room_name')
                                <p class="text-danger fw-bold text-center mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-labe">Available Room</label>
                            <input type="number" name="available_rooms" class="form-control">
                            @error('available_rooms')
                                <p class="text-danger fw-bold text-center mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-labe">Room Price</label>
                            <input type="number" name="room_price" class="form-control">
                            @error('room_price')
                                <p class="text-danger fw-bold text-center mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
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
