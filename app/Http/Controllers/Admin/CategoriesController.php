<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use     App\Models\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.categories.index');
    }
    public function store(Request $request)
    {
       
    }
    public function update(Request $request,$categoryId)
    {
        
    }
    public function delete(Request $request,$categoryId)
    {
        
    }
}
