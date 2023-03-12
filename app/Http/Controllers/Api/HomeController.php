<?php

namespace App\Http\Controllers\Api;

use App\Models\FreelancerAccount;
use App\Models\ProjectCategory;
use App\Models\User;
use Exception;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Response;

class HomeController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $tasks = Project::with(
                'project_category',
                'client',
            )
                ->latest()->limit(10)->get();

            return $this->responseSuccess(
                $tasks,
                __('Recent Tasks fetched successfully.')
            );
        } catch (Exception $exception) {
            return $this->responseError([], $exception->getMessage(), $exception->getCode());
        }
    }


    public function all_category(){

        $data = ProjectCategory::all();
        return response::json ($data,'200');
    }

    public function area_frelancer($area_id){

        $data = User::where('user_type','handyman')->orwhere('user_type','finishing_company')->get();

        return response::json($data,'200');

    }

    public function slider(){
        if(get_setting('sliders') != null){
            foreach (explode(',', get_setting('sliders')) as $key => $value){
                $data[] = custom_asset($value);
            }
        }

       $data['slider_title'] = get_setting('slider_section_title');
       $data['slider_subtitle'] = get_setting('slider_section_subtitle');
        return response::json($data, '200');
    }

    public function letest_task(){
        $data = Project::all()->sortDesc();
        return response::json($data, '200');
    }
}
