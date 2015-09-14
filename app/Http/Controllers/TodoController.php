<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Routing\Controller;
use App\Todo;
use Input;
use View;



class TodoController extends Controller
{



    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Todo::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Todo::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'author' => Input::get('author')
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Return the specified resource using JSON
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Response::json(Todo::find($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Todo::destroy($id);

        return Response::json(array('success' => true));
    }

}