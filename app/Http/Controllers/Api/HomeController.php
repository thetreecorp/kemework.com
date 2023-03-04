<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

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
}
