<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        try {
            $news = $this->newsService->getAllNews();

            return view('site.news', compact('news'));
        } catch (\Exception $e) {
            Log::error('Error retrieving News: ' . $e->getMessage());
            return null;
        }
    }

    public function details($id)
    {
        try {
            $news = $this->newsService->getNewsDetails($id);
            $latestNews = $this->newsService->getAllNewsLatest();

            return view('site.new-details', compact('news', 'latestNews'));
        } catch (\Exception $e) {
            Log::error('Error retrieving News: ' . $e->getMessage());
            return null;
        }
    }
}
