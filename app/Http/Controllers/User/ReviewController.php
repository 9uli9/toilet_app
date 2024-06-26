<?php
// In the User review controller im trying to alow the admin to create,show,update and delete data about the review. 
// Data is being saved in the database and in a csv file.
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Toilet; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Display a listing of the reviews
    public function index()
    {
        $reviews = Review::paginate(10);
        $toilets = Toilet::all();
        return view('user.reviews.index', compact('reviews', 'toilets')); 
        }

        public function create()
        {
    $toilets = Toilet::all();
    return view('user.reviews.create', compact('toilets'));
        }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'rating' => 'required|in:1/10,2/10,3/10,4/10,5/10,6/10,7/10,8/10,9/10,10/10',
            'toilet_id' => 'required|exists:toilets,id',
            'user_id' => 'required|exists:users,id',
        ];

        $messages = [
            'rating.in' => 'Incorrect rating',
            'toilet_id.exists' => 'The selected toilet is invalid.',
            'user_id.exists' => 'The selected user is invalid.',
        ];

        $request->validate($rules, $messages);

        $review = new Review([
            'title' => $request->title,
            'description' => $request->description,
            'rating' => $request->rating, 
            'toilet_id' => $request->toilet_id,
            'user_id' => Auth::id(),
        ]);

        if ($request->hasFile('review_image')) {
            $review_image = $request->file('review_image');
            $filename = date('Y-m-d-His') . '_' . $request->title . '.' . $review_image->getClientOriginalExtension();
            $review_image->storeAs('public/images', $filename);
            $review->review_image = $filename;
        } else {
            // Set a default image filename if no file is uploaded
            $review->review_image = 'review_image.png';
        }

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

        if ($request->hasFile('review_image')) {
            // Save new image
            $newReviewImage = $request->file('review_image');
            $filename = date('Y-m-d-His') . '_' . $review->title . '.' . $newReviewImage->getClientOriginalExtension();
            $newReviewImage->storeAs('public/images', $filename);
    
            // Update review image filename
            $review->review_image = $filename;
        }

        $review->update($validatedData);
        
        return redirect()->route('user.reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('user.reviews.index')->with('success', 'Review deleted successfully.');
    }
}
