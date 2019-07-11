<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(15);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event();
        return view('events.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        Event::create(['title'=>$request->title, 'description'=>$request->description, 'adresse' =>$request->adresse, 'price'=>$request->price, 'start_at'=>$request->start_at]);
        flash('Evénement  créer  avec succès!');
        Flashy::message('Welcome Aboard!', 'http://your-awesome-link.com');
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, $id)
    {        
        $event = Event::findOrFail($id); 
        $event->update(['title'=>$request->title, 'description'=>$request->description, 'adresse' =>$request->adresse, 'price'=>$request->price, 'start_at'=>$request->start_at]);
        flash('message', "Evénement # ".$id. " modifier  avec succès");
        return redirect()->route('events2.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        flash('message', "Evénement # ".$id. " supprimer  avec succès");
        return redirect()->route('home');
    }
}
