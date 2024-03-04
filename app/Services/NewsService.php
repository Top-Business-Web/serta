<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Support\Facades\Log;

class NewsService
{

    /**
     * Get all news
     * 
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function getAllNews()
    {
        try {
            return News::all();
        } catch (\Exception $e) {
            Log::error('Error retrieving News: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get all news latest
     * 
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function getAllNewsLatest($id)
    {
        try {
            return News::where('id', '!=', $id)->latest()->limit(3)->get();
        } catch (\Exception $e) {
            Log::error('Error retrieving latest News: ' . $e->getMessage());
            return null;
        }
    }
    /**
     * Get details of specific news
     * 
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model|array|null 
     */

    public function getNewsDetails($id)
    {
        try {
            return News::findOrFail($id);
        } catch (\Exception $e) {
            Log::error('Error retrieving News detail: ' . $e->getMessage());
            return null;
        }
    }
}
