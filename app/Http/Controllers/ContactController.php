<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contato = Contact::all();
        return view('Contacts.index', compact('contato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contacts.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Contact $contato)
    {
        
        $this ->validateContact($request);
        $contato = new Contact();
        $contato->name = $request->input('name');
        $contato->email = $request->input('email');
        $contato->phone = $request->input('phone');
        //dd($request->all());
        //dd($request->input('name'));
        $contato->save();

       // DB::insert('insert into contacts(name, email, phone) values(?,?,?)', [$contato_nome, $contato_email, $contato_phone]);
        
        return redirect('/Contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contato, $id)
    {
        $contato = Contact::find($id);
        return view('Contacts.show', compact('contato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contato, $id)
    {
        $contato = Contact::find($id);

        // if(!$contato = $this->repository->find($id))
        // return redirect()->back();
        //return $contato;
        return View('Contacts.edit', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contato, $id)
    {
        $contato = Contact::find($id);
        $contato->name = $request->input('name');
        $contato->email = $request->input('email');
        $contato->phone = $request->input('phone');
      
        $contato->update($request->all());

        return redirect('/Contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,Contact $contato, $id)
    {
        $contato = Contact::findOrFail($id);
        $contato->delete();
        
        return redirect('/Contacts');
    }

    private function validateContact(Request $request){

        $request->validate([

            'name' => 'required|min:3|max:100|unique:contacts,name',
            'email' => 'required|email|unique:contacts,email'
        ]);
        
       
    }

    // public function message(){

    //     return [
    //        'name.required' => 'Nome obrigatório' 
    //     ];


    // }

}
