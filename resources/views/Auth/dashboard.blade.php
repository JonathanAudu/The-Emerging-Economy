@extends('layouts.app')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header-admin mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Hello {{ Auth::user()->last_name }}</h1>
    </div>
</div>
<!-- Page Header End -->


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Admin Dashboard</h3>
                </div>

                <div class="card-body">
                    <h4>Total Users: {{ $totalUsers }}</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                @if ($index != 0)
                                    <tr>
                                        <td>{{ $index }}</td>
                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
