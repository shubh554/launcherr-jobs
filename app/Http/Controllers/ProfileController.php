<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\EmployerProfile;
use Cloudinary\Cloudinary;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        $employerProfile = Auth::user()->employerProfile;
        
        return view('profile',['user'=>$user->toArray(),'employerProfile'=>$employerProfile]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'sometimes|string|max:255',
            'city' => 'sometimes|string|max:255',
            'state' => 'sometimes|string|max:255',
            'country' => 'sometimes|string|max:255',
            'company_name' => 'sometimes|string|max:255',
            'company_website' => 'sometimes|url|max:255',
            'about' => 'sometimes|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $userId = $user->id;

        $cloudinary = new Cloudinary();
        
        $uploadedFileUrl = $cloudinary->uploadApi()->upload($request->file('image')->getRealPath());

        $imageUrl = $uploadedFileUrl['secure_url'];

        EmployerProfile::updateOrCreate(
            ['user_id' => $userId], 
            [
                'address' => $validatedData['address'],
                'city' => $validatedData['city'],
                'state' => $validatedData['state'],
                'country' => $validatedData['country'],
                'company_name' => $validatedData['company_name'],
                'company_website' => $validatedData['company_website'],
                'about' => $validatedData['about'],
                'image' => $imageUrl,
            ]);

        return redirect()->route('profile')->with('success', 'Profile Updated successfully!');


    }
}
