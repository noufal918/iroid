@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Companies') }}
                        <a href="{{ route('companies.create') }}" class="float-right btn btn-primary">Create</a>
                    </div>
                    <div class="card-body">
                        <div>
                            {{ $dataTable->table() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
    {{ $dataTable->scripts() }}
@endpush
