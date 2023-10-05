<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ApiController extends Controller
{
    public function getcontact()
    {
        $contact= contact::all();
        return response()->json($contact);
    }

    public function createcontact(Request $request)
    {
        $contact= contact::create($request->all());
        return response()->json($contact, 201);
    }

    public function updatecontact(Request $request, $id)
    {
        $contact = contact::findOrFail($id);
        $contact->update($request->all());
        return response()->json($contact, 200);
    }

    public function deletecontact($id)
    {
        contact::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
