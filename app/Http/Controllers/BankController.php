<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
    
    /**
     * Display the Bank names.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::select('bank_name')->distinct()->orderBy('bank_name','ASC')->get();
        
        return view('pages.banks', compact('banks'));
    }

    /**
     * Display the State.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showState($BankName) 
    {   
        
        $BankName = strtoupper(str_replace("-", " ", $BankName));
        $bank_name = strtoupper($BankName);
        $banks = Bank::select('bank_name')->distinct()->orderBy('bank_name','ASC')->get();
        $states = Bank::select('state')->where('bank_name', $bank_name)->distinct()->orderBy('state','ASC')->get();
        return view('pages.state', compact('banks', 'BankName', 'states'));
    }


    /**
     * Display the District.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showDistrict($BankName, $State) 
    {
        
        $BankName = strtoupper(str_replace("-", " ", $BankName));
        $bank_name = strtoupper($BankName);
        $State = strtoupper($State);
        $banks = Bank::select('bank_name')->distinct()->orderBy('bank_name','ASC')->get();
        $states = Bank::select('state')->where('bank_name', $bank_name)->distinct()->orderBy('state','ASC')->get();
        $districts = Bank::select('district')
            ->where('bank_name', '=', $bank_name)
            ->where('state', '=', $State)
            ->distinct()->orderBy('district','ASC')->get();
            
        return view('pages.district', compact('banks', 'BankName', 'states', 'districts', 'State'));
    }


    /**
     * Display the Branch name.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showBranch($BankName, $State, $District) 
    {
        
        $BankName = strtoupper(str_replace("-", " ", $BankName));
        $bank_name = strtoupper($BankName);
        $State = strtoupper($State);
        $District = strtoupper($District);
        $banks = Bank::select('bank_name')->distinct()->orderBy('bank_name','ASC')->get();
        $states = Bank::select('state')->where('bank_name', $bank_name)->distinct()->orderBy('state','ASC')->get();
        $districts = Bank::select('district')
            ->where('bank_name', '=', $bank_name)
            ->where('state', '=', $State)
            ->distinct()->orderBy('district','ASC')->get();

            $branches = Bank::select('branch')
            ->where('bank_name', '=', $bank_name)
            ->where('state', '=', $State)
            ->where('district', '=', $District)
            ->distinct()->orderBy('branch','ASC')->get();
            
        return view('pages.branch', compact('banks', 'BankName', 'states', 'districts', 'State', 'District', 'branches'));
    }


    /**
     * Display the Branch name.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showIfsc($BankName, $State, $District, $Branch) 
    {
        
        $BankName = strtoupper(str_replace("-", " ", $BankName));
        $bank_name = strtoupper($BankName);
        $State = strtoupper($State);
        $District = strtoupper($District);
        $Branch = strtoupper(str_replace("_", " ", $Branch));
        $banks = Bank::select('bank_name')->distinct()->orderBy('bank_name','ASC')->get();
        $states = Bank::select('state')->where('bank_name', $bank_name)->distinct()->orderBy('state','ASC')->get();
        $districts = Bank::select('district')
            ->where('bank_name', '=', $bank_name)
            ->where('state', '=', $State)
            ->distinct()->orderBy('district','ASC')->get();

        $branches = Bank::select('branch')
        ->where('bank_name', '=', $bank_name)
        ->where('state', '=', $State)
        ->where('district', '=', $District)
        ->distinct()->orderBy('branch','ASC')->get();

        $ifscs = Bank::select('ifsc_code', 'address', 'contact', 'city', 'district')
            ->where('bank_name', '=', $bank_name)
            ->where('state', '=', $State)
            ->where('district', '=', $District)
            ->where('branch', '=', $Branch)
            ->distinct()->orderBy('ifsc_code','ASC')->get();
        
        return view('pages.ifsc', compact('banks', 'BankName', 'states', 'districts', 'State', 'District', 'branches', 'ifscs', 'Branch'));
    }
}
