<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\DB;

class ChecklistController extends Controller
{
    //
	
	public function index()
    {
		$getAll = DB::table('products')->get();
		
		return new PostResource(true, 'Get All Checklist', $getAll);
	}
}
