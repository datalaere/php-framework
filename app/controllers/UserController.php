<?php

namespace App\Controllers;

use PHP\MVC\Controller;
use PHP\HTTP\Response;

use App\Models\DefaultModel;

class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();

        if(!$this->c->get('Auth')->check()) {
            return Response::redirect('/');
        }
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
       $default = new DefaultModel();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        //
    }

}