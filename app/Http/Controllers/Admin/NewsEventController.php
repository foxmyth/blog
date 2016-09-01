<?php namespace Blog\Http\Controllers\Admin;

use Blog\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Blog\Http\Requests;

use Blog\NewsEvent as NewsEvent;

class NewsEventController extends Controller {
    protected $model;

    public function __construct() {
        $this->model = new NewsEvent;
    }

    public function __destruct() {
        parent::__destruct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = $this->model->listOrderByStartTimeDesc();

        return view('newsevents.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = $this->model->findOrFail($id);
        
        return view('newsevents.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $event = $this->model->findOrFail($id);
        // $event->fill($request->except('_token'));
        // $event->save();
        
        $this->model->where('id', $id)->update($request->except(['_token', '_method']));

        return redirect("admin/newsevents/{$id}/edit")
            ->withSuccess('News and Events has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
