<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\ApiResponseTrait;
use App\Http\Controllers\CommonFunctionTrait;
use Closure;

class VerifyAPIAccess
{
	use CommonFunctionTrait , ApiResponseTrait;
	
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	
		try{

			if($request->hasHeader('X-AppApiToken')){
			
				$token = $request->header('X-AppApiToken');
				
				if(!$this->decodeKey($token)){
					
					$message = 'You don\'t have access to this API.';
					return $this->respondUnAuthorized($message);
				}
			}
			else{
				$message = 'You don\'t have access to this API.';
					return $this->respondUnAuthorized($message);
			}
		} catch (\Throwable $e) {
			return $this->respondInternalError($e->getMessage());
	
		} 
		
		return $next($request);
	}
}
