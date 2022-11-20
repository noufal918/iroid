@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Company') }}</div>
                    <div class="card-body">
                        <form action="{{ route('companies.update', $company->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('name')) is-invalid @endif"
                                    value="{{ old('name', $company->name) }}" type="text" name="name" required>

                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('email')) is-invalid @endif"
                                    value="{{ old('email', $company->email) }}" type="email" name="email" required>

                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="message">Website</label>
                                <input class="form-control @if ($errors->has('website')) is-invalid @endif"
                                    value="{{ old('website', $company->website) }}" type="text" name="website">

                                <div class="invalid-feedback">{{ $errors->first('website') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="message">Logo</label>
                                <input class="form-control @if ($errors->has('logo')) is-invalid @endif"
                                    type="file" name="logo">
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}"
                                    class="img-thumbnail" width="250">

                                <div class="invalid-feedback">{{ $errors->first('logo') }}</div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit" />

                            <a href="{{ route('companies.index') }}" class="btn btn-warning">Go Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
