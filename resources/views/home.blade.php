@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                                    <td>---</td>
                                    <td>{{ $apply->app_type }}</td>
                                    <td>{{ $apply->comments }}</td>
                                    <td>${{ $apply->amount }}.00</td>
                                    <td>not approved</td>
                                    <td>{{ $apply->created_at }}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Approve</a>
                                        <a href="" class="btn btn-danger btn-sm">Decline</a>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
