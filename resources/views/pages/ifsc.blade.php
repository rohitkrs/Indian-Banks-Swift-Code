@extends('layouts.app')

@section('title', str_replace("-", " ", $District))

@section('content')
<div class="row ">
    <div class="container bg-info d-flex align-items-center p-3 my-3">
        <div class="col-md-12 text-white">
            <h2><strong>Find IFSC Code for Banks in India</strong></h2>
            
            <form class="col-md-12" method="" action="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="bank">Bank Name hello</label>
                        <select class="form-control" id="bank" name="bank" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option disabled selected>Select Bank Name</option>
                            
                            @foreach($banks as $bank)
                                <option value="/{!! strtolower(str_replace(' ', '-', $bank->bank_name)) !!}" {{ $bank->bank_name == strtoupper($BankName) ? "selected":"" }}>{{$bank->bank_name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <select class="form-control" id="bank" name="bank" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option disabled selected>Select State</option>
                            
                            @foreach($states as $state)
                                <option value="/{!! strtolower(str_replace(' ', '-', $BankName)) !!}/{!! strtolower(str_replace(' ', '-', $state->state)) !!}" {{ $state->state == str_replace('-', ' ', $State) ? "selected":"" }}>{{$state->state}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="branch">District</label>
                        <select class="form-control" id="bank" name="bank" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option disabled selected>Select District</option>
                            
                            @foreach($districts as $district)
                                <option value="/{!! strtolower(str_replace(' ', '-', $BankName)) !!}/{!! strtolower(str_replace(' ', '-', $State)) !!}/{!! strtolower(str_replace(' ', '-', $district->district)) !!}" {{ $district->district == str_replace('-', ' ', $District) ? "selected":"" }}>{{$district->district}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="branch">Branch</label>
                        <select class="form-control" id="bank" name="bank" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option disabled selected>Select Branch</option>
                            
                            @foreach($branches as $branch)
                                <option value="/{!! strtolower(str_replace(' ', '-', $BankName)) !!}/{!! strtolower(str_replace(' ', '-', $State)) !!}/{!! strtolower(str_replace(' ', '-', $District)) !!}/{!! strtolower(str_replace(' ', '_', $branch->branch)) !!}" {{ $branch->branch == str_replace('_', ' ', $Branch) ? "selected":"" }}>{{$branch->branch}}</option>
                                
                            @endforeach
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
    <div class="container bg-light align-items-center p-3 my-3 border border-secondary">
        <div class="col-md-12">
            <div class="tab-pane  box  active" id="credentials">
                <h3 class="font-20 bolded  p-3">Details of {{ $BankName }}, {{ $Branch}}</h3>
                <div class="row row" data-gutter="10">
                @foreach($ifscs as $ifsc)
                    <div class="col-md-6">
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <th width="150" class="pr30">Bank Name:</th>
                                <td class="bg-primary text-white">{{ $BankName }}</td>
                            </tr>
                            <tr>
                                <th width="150" class="pr30">State :</th>
                                <td>{{ $State }}</td>
                            </tr>
                            <tr>
                                <th width="150" class="pr30">District :</th>
                                <td>{{ $ifsc->district }}</td>
                            </tr>
                            </tbody>
                            <tr>
                                <th width="150" class="pr30">City :</th>
                                <td>{{ $ifsc->city }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <th width="150" class="pr30">Address :</th>
                                <td>{{ $ifsc->address }}</td>
                            </tr>
                            <tr>
                                <th width="150" class="pr30">CONTACT :</th>
                                <td>
                                @if(Str::length($ifsc->contact) > 5)
                                {{ $ifsc->contact }}
                                @else 
                                No contact
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <th width="150" class="pr30">IFSC CODE :</th>
                                <td class="bg-info text-white">{{ $ifsc->ifsc_code }}</td>
                            </tr>   
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="top_cities footer_link col-md-10 m-5">
                <ul>
                <h2><strong>Other Branches</strong></h2>
                    @if(isset($districts))
                        @foreach($branches as $branch)
                            <li><a href="/{!! strtolower(str_replace(' ', '-', $BankName)) !!}/{!! strtolower(str_replace(' ', '-', $State)) !!}/{!! strtolower(str_replace(' ', '-', $district->district)) !!}/{!! strtolower(str_replace(' ', '-', $branch->branch)) !!}" title="{{ $branch->branch }}">{{ $branch->branch }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
    </div>
</div>
@endsection