<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Amie;
use compact;
use Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()

    {
       $users = User::all()->except(Auth::id()); 
       $id = Auth::id();
       $news = News::all();
       $pub = News::with('publications')->orderBy('id', 'DESC')->get();
       return view('accueil', compact(['users', 'id','news','pub']));
    }

    public function store( $user ){

        $amie = new Amie;

        $amie->users_id = Auth::user()->id;
        $amie->amie_id= $user;
        $amie->save();

        $amies = Amie::all();
        $users = User::all()->except(Auth::id());
        $id=Auth::id();
        $news = News::all(); 
        return redirect(route('accueil'));



    }
     public function edit( $id ){

        
        $users = User::all()->except(Auth::id()); 
        $id = User::findOrFail($id);
        $news = News::all();
        
       return view('edit', compact(['id','users','news']));



    }
    public function update( Request $request, $id ){

        $this->validate($request, [

        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:6|confirmed',
        'date' => 'required|date',
        'sexe' => 'required|string|max:255',
        'avatar' => 'required|max:255',
        ]);
        $id = User::findOrFail($id);
        $path = request('avatar')->store('avatars','public'); 

        $id->update([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'date' => $request['date'],
            'sexe' => $request['sexe'],
            'avatars' => $path,
        ]); 

        session()->flash('message', 'votre profil a été bien modifié avec succé');
         $users = User::all()->except(Auth::id());
         $news = News::all();
        return redirect(route('accueil'));
    }
     public function destroy( $id ){

        $amie = User::findOrFail($id);
        $news = News::where('users_id', '=', $id);

        $amie->delete();
        $news->delete();
        
        $amies = Amie::all();

        $users = User::all()->except(Auth::id()); 
        $id=Auth::id(); 
        return redirect(route('accueil'));
    }

    public function publier(Request $request){

        $this->validate($request, [
        'title' => 'required|string|max:255',
        'file' => 'required|image',        
        ]);

        $news = new News;
        $news->users_id = auth()->user()->id;
        $news->title = request('title');
        $news->file= request('file')->store('photo', 'public');    
        $news->save();
        
        return redirect(route('accueil'));
    }

    public function groupe($id){

        $users = User::all()->except(Auth::id());

        return view('groupe',compact('users'));
    }
}



?>