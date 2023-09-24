<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Permiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::with('permisos')->where('email', $request->email)->first();
        if ($user && $user->state=='ACTIVE') {
            if (Hash::check($request->password, $user->password)) {
                $user = User::with('permisos')->where('email', $request->email)->first();
                $token = $user->createToken('authToken')->plainTextToken;
                return response(['user' => $user, 'token' => $token]);
            } else {
                return response(['message' => 'Contraseña incorrecta'],500);
            }
        } else {
            return response(['message' => 'Usuario no encontrado'],500);
        }
    }
    public function me(Request $request)
    {
        $user=User::with('permisos')
                    ->where('id',$request->user()->id)
                    ->where('state','ACTIVE')
                    ->firstOrFail();
                return $user;
    }
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response(['message' => 'Sesión cerrada']);
    }
    public function index(){return User::with('permisos')->get();}
    public function listuser(){
        return User::where('state','ACTIVE')->get();
    }
    public function show(User $user){return $user;}
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $validated['password']=Hash::make($validated['password']);
        $user = User::create($validated);
        $permisos= array();
        foreach ($request->permisos as $permiso){
            if ($permiso['estado']==true)
                $permisos[]=$permiso['id'];
        }
        $permiso = Permiso::find($permisos);
        $user->permisos()->attach($permiso);
        return($user);
        //return response(['user' => $user]);
    }
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $user->update($validated);
        return response(['user' => $user]);
    }
    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|min:6',
        ]);
        $request['password']=Hash::make($request['password']);
        $user->update($request->all());
    }
    public function updatepermisos(Request $request,User $user){
        $permisos= array();
        foreach ($request->permisos as $permiso){
            if ($permiso['estado']==true)
                $permisos[]=$permiso['id'];
        }
        $permiso = Permiso::find($permisos);
        $user->permisos()->detach();
        $user->permisos()->attach($permiso);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return response(['message' => 'Usuario eliminado']);
    }

    public function cambioEstado(Request $request){
        $user=User::find($request->id);
        if($user->state=='ACTIVE')
            $user->state='INACTIVE';
        else
            $user->state='ACTIVE';
        $user->save();
    }
}
