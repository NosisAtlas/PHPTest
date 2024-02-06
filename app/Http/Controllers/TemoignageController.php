<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temoignages = Temoignage::where('statut', 'approuve')->get();
        $temoignagesAll = Temoignage::all();
        // dd($temoignages);
        return view('welcome', compact(['temoignages', 'temoignagesAll']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:60',
            'message' => 'required|string|max:300',
            'image' => 'nullable|file|max:1024|mimes:doc,docx,jpeg,png',
        ]);

        // Handle file upload if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName);
            // Move the uploaded file to the 'uploads' folder
            $file->move(public_path('uploads'), $fileName);
            $validatedData['image'] = $filePath;
        }
        else{
            $validatedData['image'] = null;
        }

        // dd($validatedData);
        Temoignage::create($validatedData);
        return redirect()->back()->with('success', 'Témoignage ajouté avec succès.');
    }


    /**
     * Approve the testimonial
     */
    public function approve($id)
    {
        // Update the status of the testimonial to "approuve"
        Temoignage::where('id', $id)->update(['statut' => 'approuve']);
        return redirect()->back()->with('success', 'Témoignage approuvé avec succès.');
    }


    /**
     * Reject the testimonial
     */
    public function reject($id)
    {
        // Update the status of the testimonial to "rejete"
        Temoignage::where('id', $id)->update(['statut' => 'rejete']);
        return redirect()->back()->with('success', 'Témoignage rejeté avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Delete the testimonial
        Temoignage::destroy($id);
        return redirect()->back()->with('success', 'Témoignage ajouté avec succès.');
    }
}
