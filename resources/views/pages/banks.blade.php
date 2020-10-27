@extends('layouts.app')

@section('title', 'Search IFSC Code: Find IFSC code, address and all banks in India')
@section('seo_desc', 'Find here IFSC and MICR code of all bank branches, Search IFSC Code in india, Find MICR Codes, Address, All Bank Branches in India, List of IFSC Codes by State, District and City')
@section('seo_desc', 'IFSC Code, MICR Code, Bank IFSC Codes, Bank MICR Codes, IFSC India, Search Bank By IFSC Code, Bank Branch Address, Indian Financial System Code, All Bank Branches in India')


@section('content')

<!-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
  </ol>
</nav> -->
<div class="row ">
    <div class="container bg-info d-flex align-items-center p-3 my-3">
        <div class="col-md-12 text-white">
            <h2><strong>Find IFSC Code for Banks in India</strong></h2>
            
            <form class="col-md-12" method="" action="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="bank">Bank Name</label>
                        <select class="form-control" id="bank" name="bank" onchange="this.options[this.selectedIndex].value && (window.location =  this.options[this.selectedIndex].value);">
                            <option disabled selected>Select Bank Name</option>
                            
                            @foreach($banks as $bank)
                            
                                <option value="{{ Str::lower(Str::of($bank->bank_name)->replace(' ', '-')) }}" >{{Str::upper($bank->bank_name)}}</option>
                            @endforeach
                            
                            
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <select class="form-control" id="state" name="state">
                            <option>Select State</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="district">City</label>
                        <select class="form-control" id="district" name="district">
                            <option>Select City</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="branch">Branch</label>
                        <select class="form-control" id="branch" name="branch">
                            <option>Select Branch</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-warning mb-2">Search</button>
                </div>
                </div>
                <div class="align-items-center text-center p-3 ">
                    <img src="{{url('/images/ad3.jpg')}}" class="img-fluid">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="container bg-light d-flex align-items-center p-3 my-3 border border-secondary">
        <div class="col-md-12">
            <div class="top_cities footer_link d-flex col-md-11 m-3">
                <ul>
                <h2><strong>Select Bank</strong></h2>
                    @if(isset($banks))
                        @foreach($banks as $bank)
                            <li><a href="{{ Str::lower(Str::of($bank->bank_name)->replace(' ', '-')) }}" title="{{ $bank->bank_name }}">{{ $bank->bank_name }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection