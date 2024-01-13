@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-center">All Rooms</h1>

                <a href="{{ route('admin.room.create') }}" class="btn btn-primary">
                    New Room
                </a>
            </div>
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Room Name</th>
                            <th>Available Rooms</th>
                            <th>Room Price</th>
                            <th>Date Created</th>
                            <th>Last Updated</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rooms as $item)
                            <tr>
                                <td> {{ $item->room_name }} </td>
                                <td> {{ $item->available_rooms }} </td>
                                <td>₦ {{ number_format($item->room_price,2) }}</td>
                                <td> {{ $item->created_at->format('jS M. Y h:i a') }} </td>
                                <td> {{ $item->updated_at->diffForHumans() }} </td>
                                <td>
                                    <a href="{{ route('admin.room.edit', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.room.destroy', ['id' => $item->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td> No Rooms Created Yet </td>
                            </tr>
                        @endforelse

                   
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection