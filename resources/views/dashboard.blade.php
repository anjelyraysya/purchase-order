@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5>Total Users</h5>
                <p>{{ $total_users }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5>Total Suppliers</h5>
                <p>{{ $total_suppliers }}</p>
            </div>
        </div>
    </div>
    <!-- Add cards for materials and purchase orders -->
</div>
@endsection
