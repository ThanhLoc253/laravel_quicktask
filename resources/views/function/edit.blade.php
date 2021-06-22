@extends('layouts.page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ trans('message.edit') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}" title="{{ trans('message.back') }}"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>{{ trans('message.whoops') }}!</strong>{{ trans('message.wrong') }}.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.update', $customers->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ trans('message.name') }}:</strong>
                    <input type="text" name="name" class="form-control" placeholder="{{ trans('message.name') }}"
                        value="{{ $customers->name }}"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ trans('message.age') }}:</strong>
                    <input type="number" name="age" class="form-control" placeholder="{{ trans('message.age') }}"
                        value="{{ $customers->age }}"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ trans('message.address') }}:</strong>
                    <input type="text" name="address" class="form-control" placeholder="{{ trans('message.address') }}"
                        value="{{ $customers->address }}"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ trans('message.email') }}:</strong>
                    <input type="email" name="email" class="form-control" placeholder="{{ trans('message.email') }}"
                        value="{{ $customers->email }}"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ trans('message.phone') }}:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="{{ trans('message.phone') }}"
                        value="{{ $customers->phone }}"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{ trans('message.submit') }}</button>
            </div>

        </div>
    </form>
@endsection
