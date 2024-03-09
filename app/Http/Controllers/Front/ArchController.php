<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArchRequest;
use App\Models\Architecture;
use App\Models\ArchitectureRequest;
use App\Services\ArchService;
use Illuminate\Http\Request;

class ArchController extends Controller
{

    protected $archService;

    public function __construct(ArchService $archService)
    {
        $this->archService = $archService;
    }

    public function index()
    {
        $architectures = $this->archService->getAllArchitectures();
        $categoryArchs = $this->archService->getAllCategoryArch();
        $aboutArch = $this->archService->getAboutArch();    

        return view('site.architecture', compact('architectures', 'categoryArchs', 'aboutArch'));
    }

    public function details($id)
    {
        $architecture = $this->archService->getArchitectureDetails($id);
        $relatedArchitectures = $this->archService->getAllRelatedArchitecturesExceptSelf($architecture->categoryArch_id, $id);

        return view('site.arch-details', compact('architecture', 'relatedArchitectures'));
    }

    public function storeArchitecture(StoreArchRequest $request)
    {
        $inputs = $request->all();

        if(ArchitectureRequest::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }

    public function architectureSearch(Request $request)
    {
        if ($request->ajax()) {
            $output = '';

            if ($request->categoryId != '') {
                $architectures = Architecture::where('categoryArch_id', $request->categoryId)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } else {
                $architectures = Architecture::get();
            }

            if ($architectures->count() > 0) {
                foreach ($architectures as $architecture) {
                    $output .=
                        '<div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                    <a href="' . route("architecture.details", $architecture->id) . '" class="w-100">
                                        <img src="' . asset($architecture->images[0]) . '" alt="">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="' . route('architecture.details', $architecture->id) . '"
                                               class="fs-5">' . $architecture->title_ar . '</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }
                return Response($output);
            } else {
                return response('no data', 404);
            }
        }
    } // end search
}
