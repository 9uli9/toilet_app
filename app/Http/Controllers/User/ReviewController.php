<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Toilet; 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Display a listing of the reviews
    public function index()
    {
        $reviews = Review::latest()->paginate(10);
        return view('user.reviews.index', compact('reviews'));
    }

    // public function create()
    // {
    //     $toilets = Toilet::all();
    //     return view('user.reviews.create')->with('toilets', $toilets);
    // }
    
    public function create($toilet)
{
    $toilet = Toilet::findOrFail($toilet); // Find the specific toilet
    return view('user.reviews.create', compact('toilet'));
}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);
    
        $review = new Review([
            'title' => $request->title,
            'description' => $request->description,
            'rating' => $request->rating,
            'toilet_id' => $request->toilet_id,
            'user_id' => Auth::id(),
        ]);
    
        $review->save();
    
        return redirect()->route('user.toilets.show', $request->toilet_id)->with('success', 'Review added successfully.');
    }
    

    public function show($id)
    {
        $review = Review::findOrFail($id)->load('toilet');
        return view('user.reviews.show', compact('review'));
    }
    

    public function edit(Review $review)
    {
        return view('user.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        $review->update($validatedData);
        
        return redirect()->route('user.reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('user.reviews.index')->with('success', 'Review deleted successfully.');
    }
}
