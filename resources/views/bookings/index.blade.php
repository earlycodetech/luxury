@extends('layouts.app')
@section('content')
    <section>
        <div class="container-fluid my-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-center">All Bookings</h1>

               <form action="">
                <div class="input-group">
                    <input type="date" class="form-control bg-white">
                    <button class="btn btn-outline-success">
                        Search
                    </button>
                </div>
               </form>
            </div>
            <div class="card bg-white border-0 shadow mx-auto">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="text-nowrap">Full Name</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Phone</th>
                                    <th class="text-nowrap">Room Type</th>
                                    <th class="text-nowrap"><u>N</u> Rooms</th>
                                    <th class="text-nowrap">Booking Amount</th>
                                    <th class="text-nowrap">Checkin</th>
                                    <th class="text-nowrap">Checkout</th>
                                    <th class="text-nowrap">Booking Status</th>
                                    <th class="text-nowrap">Booking Date</th>
                                    <th class="text-nowrap">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-nowrap">David Gerald</td>
                                    <td class="text-nowrap">davidgerald@gmail.com</td>
                                    <td class="text-nowrap">08132635366</td>
                                    <td class="text-nowrap">Deluxe Room</td>
                                    <td class="text-nowrap">20</td>
                                    <td class="text-nowrap">₦40,000.00</td>
                                    <td class="text-nowrap">14th Dec. 2023 9:00 am</td>
                                    <td class="text-nowrap">14th Dec. 2023 9:00 am</td>
                                    <td class="text-nowrap">
                                        <span class="btn bg-success-subtle rounded-pill">
                                            Checked In
                                        </span> 
                                    </td>
                                    <td class="text-nowrap">14th Dec. 2023 9:00 am</td>

                                    <td>
                                        <div class="droptop">
                                            <button class="btn btn-sm btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Btn
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#">Action</a></li>
                                              <li><a class="dropdown-item" href="#">Another action</a></li>
                                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                          </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
