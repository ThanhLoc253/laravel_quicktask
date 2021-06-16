@extends('layouts.page')
@section('title', 'List Customers')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List Customer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('customers.create')}}" title="Add a Customer"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Options</th>
        @foreach ($customers as $customer)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->age }}</td>
        <td>{{ $customer->address }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
        <td>
            <form action="" method="POST">

                <a href="" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="" title="edit">
                    <i class="fas fa-edit  fa-lg"></i>
                </a>
                <a href="" title="delete">
                    <i class="fas fa-user-minus fa-lg" style="color:red"></i>
                </a>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $customers->links() !!}

@endsection