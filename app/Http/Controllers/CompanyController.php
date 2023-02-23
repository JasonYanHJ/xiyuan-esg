<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getStockCompanyInfo()
    {
        return Company::all(['stock_code', 'name']);
    }

    public function getCompanyDetail()
    {
        return Company::where('stock_code', \request('stock_code'))->first();
    }
}
