<?php

namespace App\Http\Controllers;
use App\register;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}



class registerController extends Controller
{
    public function create()
    {
        return view('register.create'); // Affiche le formulaire
    }

    public function store(Request $request)
    {
        $register= new register();
        $register->nom = $request->input('nom');
        $register->email = $request->input('email');
        $register->telephone = $request->input('telephone');
        $register->adresse = $request->input('adresse');
        $register->save();

        return redirect('/register/' . $register->id); // Redirige vers les détails du client
    }

    public function show($id)
    {
        $register = register::find($id);
        return view('register.show', ['register' => $register]); // Affiche les détails du client
    }
}
