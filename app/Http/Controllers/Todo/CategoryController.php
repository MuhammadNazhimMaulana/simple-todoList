<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->perPage = request()->perPage ?: 20;
        $this->currentPage = request()->currentPage ?: 1;
    }

    public function index()
    {

    }
}
