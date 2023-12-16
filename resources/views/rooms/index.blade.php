@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-center">All Rooms</h1>

                <a href="" class="btn btn-primary">
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
                                <td></td>
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