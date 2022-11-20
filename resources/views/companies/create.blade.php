@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add Company') }}</div>
                    <div class="card-body">
                        <form action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('name')) is-invalid @endif"
                                    value="{{ old('name') }}" type="text" name="name" required>

                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control @if ($errors->has('email')) is-invalid @endif"
                                    value="{{ old('email') }}" type="email" name="email" required>

                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="message">Website</label>
                                <input class="form-control @if ($errors->has('website')) is-invalid @endif"
                                    value="{{ old('website') }}" type="text" name="website">

                                <div class="invalid-feedback">{{ $errors->first('website') }}</div>
                            </div>
                            <div class="form-group">
                                <label for="message">Logo</label>
                                <input class="form-control @if ($errors->has('logo')) is-invalid @endif"
                                    type="file" name="logo">

                                <div class="invalid-feedback">{{ $errors->first('logo') }}</div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit" />
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
