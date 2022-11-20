@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Show Company') }}</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <span class="form-control">{{ $employee->first_name }}</span>
                        </div>
                        <div class="form-group">
                            <label for="name">Last Name</label>
                            <span class="form-control">{{ $employee->last_name }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <span class="form-control">{{ $employee->email }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Phone</label>
                            <span class="form-control">{{ $employee->phone }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Company</label>
                            <span class="form-control">{{ $employee->company->name }}</span>
                        </div>
                        <a href="{{ route('employees.index') }}" class="btn btn-info">Go Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
