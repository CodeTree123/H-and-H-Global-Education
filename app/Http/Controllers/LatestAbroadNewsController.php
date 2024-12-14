<?php

namespace App\Http\Controllers;

use App\Models\LatestAbroadNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LatestAbroadNewsController extends Controller
{
    // Display a listing of the news
    public function index()
    {
        $news = LatestAbroadNews::latest()->paginate(10);
        return view('admin.hhAdmin.abroadNews.index', compact('news'));
    }

    // Show the form for creating new news
    public function create()
    {
        return view('admin.hhAdmin.abroadNews.create');
    }

    // Store the newly created news
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'news_date' => 'required|date',
        ]);

        // Handle image upload if it exists
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('latest_abroad_news', 'public');
        }

        LatestAbroadNews::create([
            'title' => $request->title,
            'image' => $imagePath,
            'news_date' => $request->news_date,
        ]);

        return redirect()->route('latest_abroad_news.index')->with('success', 'News created successfully!');
    }

    // Show the form for editing the specified news
    public function edit(LatestAbroadNews $latestAbroadNews)
    {
        return view('admin.hhAdmin.abroadNews.edit', compact('latestAbroadNews'));
    }

    // Update the specified news
    public function update(Request $request, LatestAbroadNews $latestAbroadNews)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'news_date' => 'required|date',
        ]);

        // If a new image is uploaded, delete the old one and store the new one
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($latestAbroadNews->image && Storage::disk('public')->exists($latestAbroadNews->image)) {
                Storage::disk('public')->delete($latestAbroadNews->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('latest_abroad_news', 'public');
            $latestAbroadNews->image = $imagePath;
        }

        // Update the other fields
        $latestAbroadNews->update($request->only('title', 'news_date', 'image'));

        return redirect()->route('latest_abroad_news.index')->with('success', 'News updated successfully!');
    }

    // Remove the specified news from the database
    public function destroy(LatestAbroadNews $latestAbroadNews)
    {
        // If the news has an image, delete it from storage
        if ($latestAbroadNews->image && Storage::disk('public')->exists($latestAbroadNews->image)) {
            Storage::disk('public')->delete($latestAbroadNews->image);
        }

        // Delete the news record from the database
        $latestAbroadNews->delete();

        return redirect()->route('latest_abroad_news.index')->with('success', 'News deleted successfully!');
    }
}
