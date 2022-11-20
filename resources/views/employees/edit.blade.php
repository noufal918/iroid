@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Employee') }}</div>
                    <div class="card-body">
                        <form action="{{ route('employees.update', $employee->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('first_name')) is-invalid @endif"
                                    value="{{ old('first_name', $employee->first_name) }}" type="text" name="first_name"
                                    required>

                                <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('last_name')) is-invalid @endif"
                                    value="{{ old('last_name', $employee->last_name) }}" type="email" name="last_name"
                                    required>

                                <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="company_id">Company</label>
                                <select name="company_id"
                                    class="form-control text-dark @if ($errors->has('company_id')) is-invalid @endif"
                                    required>
                                    <option disabled selected>Choose an option...</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}"
                                            {{ old('company_id', $employee->company_id) == $company->id ? 'selected' : '' }}>
                                            {{ $company->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <div class="invalid-feedback">{{ $errors->first('company_id') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('email')) is-invalid @endif"
                                    value="{{ old('email', $employee->email) }}" type="email" name="email" required>

                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('phone')) is-invalid @endif"
                                    value="{{ old('phone', $employee->phone) }}" type="text" name="phone" required>

                                <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                            </div>

                            <input class="btn btn-primary" type="submit" value="Submit" />
                            <a href="{{ route('employees.index') }}" class="btn btn-info">Go Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
