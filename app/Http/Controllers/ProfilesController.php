<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //
    public function index($user) {

        $user = User ::findOrFail($user);
        return view('profiles.index', [
            'user'=> $user,
        ]);
    }

    public function edit(User $user) {
        return view('profiles.edit', [
            'user'=> $user,
        ]);
    }
     public function update(User $user) {
        
         $data = request() -> validate([
             'title'=>'required',
             'description'=>'required',
             'url'=>'url',
            'image' => '',
         ]) ;

         if(request('image')) {
            $imagePath = request('image')->store('profile','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();
         }
      
         $user->profile->update(array_merge(
            $data,
            ['image'=> $imagePath]
         ));
         
         return redirect("/profile/{$user->id}");
     }
}
