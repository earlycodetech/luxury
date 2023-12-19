@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-center"> Edit Room </h1>

                <a href="{{ route('admin.all.rooms') }}" class="btn btn-primary">
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
                    <form action="{{ route('admin.room.update', ['id' => $room->id]) }}" method="POST">
                        @csrf @method('PUT')

                        <div class="mb-3">
                            <label for="" class="form-labe">Room Name</label>
                            <input type="text" name="room_name" value="{{ $room->room_name }}" class="form-control">
                            @error('room_name')
                                <p class="text-danger fw-bold text-center mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-labe">Available Room</label>
                            <input type="number" name="available_rooms" value="{{ $room->available_rooms }}" class="form-control">
                            @error('available_rooms')
                                <p class="text-danger fw-bold text-center mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Room Price</label>
                            <input type="number" name="room_price" value="{{ $room->room_price }}" class="form-control">
                            @error('room_price')
                                <p class="text-danger fw-bold text-center mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="m-3">
                            <label for="" class="form-label">Room Details</label>
                            <textarea name="room_details" class="form-control" rows="5">{{ $room->room_details }}</textarea>
                            @error('room_details')
                                <p class="text-danger fw-bold text-center mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="text-center mb-3">
                            <button class="btn btn-primary">
                                Update Room
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
