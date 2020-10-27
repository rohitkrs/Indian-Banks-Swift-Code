@extends('layouts.app')

@section('title', 'IFSC Code of '.$BankName.', search IFSC Code of '.$BankName. ' IFSC Code finder')
@section('seo_desc', 'Find here IFSC and MICR code of all bank branches, Search IFSC Code in india, Find IFSC of '.$BankName.', search IFSC Code of '.$BankName. ' List of IFSC Codes by State, District and City')

@section('content')
<div class="row ">
    <div class="container bg-info d-flex align-items-center p-3 my-3">
        <div class="col-md-12 text-white">
            <h2><strong>Find IFSC Code for Banks in India</strong></h2>
            
            <form class="col-md-12" method="" action="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="bank">Bank Name</label>
                        <select class="form-control" id="bank" name="bank" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option disabled selected>Select Bank Name</option>
                            
                            @foreach($banks as $bank)
                                <option value="/{!! strtolower(str_replace(' ', '-', $bank->bank_name)) !!}" {{ $bank->bank_name == strtoupper($BankName) ? "selected":"" }}>{{Str::upper($bank->bank_name)}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <select class="form-control" id="bank" name="bank" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option disabled selected>Select State</option>
                                
                            @foreach($states as $state)
                                <option value="/{!! strtolower(str_replace(' ', '-', $BankName)) !!}/{!! strtolower(str_replace(' ', '-', $state->state)) !!}"> {{Str::upper($state->state)}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="branch">City</label>
                        <select class="form-control" id="branch" name="branch">
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
                <h2><strong>Select State</strong></h2>
                    @if(isset($states))
                        @foreach($states as $state)
                            <li><a href="/{!! strtolower(str_replace(' ', '-', $BankName)) !!}/{!! strtolower(str_replace(' ', '-', $state->state)) !!}" title="{{ $state->state }}">{{ $state->state }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection