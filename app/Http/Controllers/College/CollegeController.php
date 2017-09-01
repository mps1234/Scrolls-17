<?php

namespace App\Http\Controllers\College;

use App\College;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;


class CollegeController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::all();
        return $this->showAll($colleges, 200);
        
    }

    public function store(Request $request)
    {
        $rules = [
            'college_name' => 'required|unique:colleges|max:255',
        ];

        $this->validate($request, $rules);
        $newCollege = College::create($request->all());
        return $this->showOne($newCollege, 201);
    }

  
}
