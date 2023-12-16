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
                                <td>Deluxe Room</td>
                                <td>20</td>
                                <td>₦40,000.00</td>
                                <td>14th Dec. 2023 9:00 am</td>
                                <td>14th Dec. 2023 9:00 am</td>
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