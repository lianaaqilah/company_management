@extends('layouts.app')

@section('content')
<div class="createcontainer mt-5">
       
        <div class="card-body">
            <form action="{{ isset($company) ? route('companies.update', $company) : route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($company))
                    @method('PUT')
                @endif
                <div class="cardheader">
            <h3>{{ isset($company) ? 'Edit' : 'Create' }} Company</h3>
            <button type="submit" class="save-button">{{ isset($company) ? 'Save' : 'Save' }}</button>
           
        </div>
                <div class="form-group row">
                    <h6 style="margin-top:50px;">COMPANY INFORMATION</h6>
                    <div class=" col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $company->name ?? old('name') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ $company->email ?? old('email') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class=" col-md-6">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" class="form-control">
                        @if (isset($company) && $company->logo)
                            <img src="{{ asset('storage/' . $company->logo) }}" alt="company logo" class="company-image mt-2">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="website">Website</label>
                        <input type="url" name="website" class="form-control" value="{{ $company->website ?? old('website') }}">
                    </div>  
                </div>    
                
                     
            </form>
        </div>
  </div>
@endsection
