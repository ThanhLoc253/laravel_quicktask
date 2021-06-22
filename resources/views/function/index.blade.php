@extends('layouts.page')
@section('title', 'List Customers')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{ trans('message.list') }}</h2>
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
@elseif ($message = Session::get('danger'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>{{ trans('message.no') }}</th>
        <th>{{ trans('message.name') }}</th>
        <th>{{ trans('message.age') }}</th>
        <th>{{ trans('message.address') }}</th>
        <th>{{ trans('message.email') }}</th>
        <th>{{ trans('message.phone') }}</th>
        <th>{{ trans('message.options') }}</th>
    </tr>
    @foreach ($customers as $key=>$customer)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->age }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">

                    <a href="{{ route('customers.show',$customer->id) }}" title="{{ trans('message.show') }}">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>

                    <a href="{{ route('customers.edit',$customer->id) }}" title="{{ trans('message.updated') }}">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                    @csrf
                    @method('DELETE')

                    <button class="button_delete" type="submit" title="{{ trans('message.deleted') }}">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{!! $customers->links() !!}
@endsection
