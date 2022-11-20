@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Show Company') }}</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <span class="form-control">{{ $company->name }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <span class="form-control">{{ $company->email }}</span>
                        </div>
                        <div class="form-group">
                            <label for="message">Website</label>
                            <span class="form-control">{{ $company->website }}</span>
                        </div>
                        <div class="form-group">
                            <label for="message">Logo</label>
                            @if ($company->logo)
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}"
                                    class="img-thumbnail" width="250">
                            @else
                                <br> <span class="text-danger">No logo uploaded</span>
                            @endif
                            <div class="invalid-feedback">{{ $errors->first('logo') }}</div>
                        </div>
                        <a href="{{ route('companies.index') }}" class="btn btn-info">Go Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
