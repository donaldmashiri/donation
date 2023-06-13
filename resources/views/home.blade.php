@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @include('partials.errors')

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Names</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Type</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $apply)
                                <tr>
                                    <td>{{ $apply->id }}</td>
                                    <td>{{ $apply->full_names }}</td>
                                    <td>{{ $apply->email }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $apply->image) }}" alt="" width="100" height="60">
                                    </td>
                                    <td>{{ $apply->app_type }}</td>
                                    <td>{{ $apply->comments }}</td>
                                    <td>${{ $apply->amount }}.00</td>
                                    <td>
                                        @if($apply->status == 'Approved')
                                            <p class="text-success fw-bolder">{{ $apply->status }}</p>
                                        @else
                                            <p class="text-danger fw-bolder">{{ $apply->status }}</p>
                                        @endif
                                        </td>
                                    <td>{{ $apply->created_at }}</td>
                                    <td>
                                        <form action="{{ route('applications.update', $apply->id) }}" method="POST" id="statusForm">
                                            @csrf
                                            @method('PUT')
                                            <button onclick="showAlert()"  class="btn btn-success" name="status" value="Approved" type="submit">Approve</button>
                                            <button onclick="showDAlert()" class="btn btn-danger" name="status" value="Declined" type="submit">Decline</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">

{{--                            <button onclick="showAlert()" class="btn btn-primary">Show Alert</button>--}}

                            <!-- Bootstrap JS and jQuery -->
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
                            <!-- SweetAlert JS -->
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>

                            <script>
                                // Display a basic SweetAlert alert
                                function showAlert() {
                                    Swal.fire('Success', 'Application was Approved', 'success');
                                }

                                function showDAlert() {
                                    Swal.fire('Declined', 'Declined Application', 'error');
                                }
                            </script>


                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
