<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function all()
    {
        return Person::all();
    }

    public function show($id)
    {
        return Person::find($id);
    }

    public function store(Request $request)
    {
        return Person::create($request->all());
    }

    public function update($id, Request $request)
    {
        $person = Person::find($id);
        $person->update($request->all());
        return $person;
    }

    public function delete($id)
    {
        $person = Person::find($id);
        $person->delete();
        return 204;
    }
}
