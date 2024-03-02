<?php

namespace App\Services;

use App\Models\AboutArch;
use App\Models\Architecture;
use App\Models\CategoryArch;
use Illuminate\Support\Facades\Log;

class ArchService
{
    /**
     * Get all architectures.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function getAllArchitectures()
    {
        try {
            return Architecture::all();
        } catch (\Exception $e) {
            Log::error('Error retrieving Architectures: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get all category architectures.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function getAllCategoryArch()
    {
        try {
            return CategoryArch::all();
        } catch (\Exception $e) {
            Log::error('Error retrieving Category Architectures: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get details of a specific architecture.
     *
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model|array|null
     */
    public function getArchitectureDetails($id)
    {
        try {
            return Architecture::findOrFail($id);
        } catch (\Exception $e) {
            Log::error('Error retrieving architecture details: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get all related architectures except the specified one.
     *
     * @param int $categoryId
     * @param int $architectureId
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function getAllRelatedArchitecturesExceptSelf($categoryId, $architectureId)
    {
        try {
            return Architecture::where('categoryArch_id', $categoryId)
                ->where('id', '!=', $architectureId)
                ->get();
        } catch (\Exception $e) {
            Log::error('Error retrieving related architectures: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get details about the architecture.
     *
     * @return \Illuminate\Database\Eloquent\Model|array|null
     */
    public function getAboutArch()
    {
        try {
            return AboutArch::first();
        } catch (\Exception $e) {
            Log::error('Error retrieving About Architectures: ' . $e->getMessage());
            return null;
        }
    }
}
