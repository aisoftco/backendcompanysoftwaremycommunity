<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class CompanyController extends Controller
{

    function __construct(){

    }

    public function index(){
        $company = Company::all();
        return  view("Admin.Company.company", [ 'company' => $company] );

    }
}
