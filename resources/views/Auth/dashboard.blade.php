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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Dashboard</h3>
                </div>
                <div class="card-body">
                    <h4>Total Users: {{ $totalUsers }}</h4>
                    @if (Auth::user()->email === 'admin@example.com')
                    <form method="GET" action="" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search by name, email, phone, city, pass type" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                    @endif
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Pass Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $user)
                                <tr>
                                    <td>{{ ($users->currentPage() - 1) * $users->perPage() + $index + 1 }}</td>
                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>
                                        <span class="badge bg-{{ $user->pass_type == 'VIP' ? 'warning' : ($user->pass_type == 'Standard' ? 'primary' : 'secondary') }} text-dark">
                                            {{ $user->pass_type }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="6" class="text-center">No users found.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
