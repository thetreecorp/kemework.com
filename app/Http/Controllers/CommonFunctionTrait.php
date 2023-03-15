<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Upload;
use DB;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

trait CommonFunctionTrait
{
	/**
	 * Decode public key from SSO
	 *
	 * @param array $tocken
	 
	 * @return boolean
	 */
    public function __construct()
    {
		$this->key = 'WbUVSk7i3ZLhF1fYjqPPKQZGKdACOsmXQ87Xk06pMj9ZPpZ6WVHtSRbTHeziuyMp';
    }

    protected function checkeTokenAccess($token)
	{	

		$oritoken = $this->deEncryptToken($token);
		//dd($token);
		$tokenPayload = JWT::decode($oritoken, new Key($this->key, 'HS256'));
		
			/*if($tokenPayload->role != 'common user'){
				return false;
			}*/

			//print_r($tokenPayload);
			//die('eeee');
            $user = User::query()->where('user_uid' , $tokenPayload->user_uid)->first();
            if($user){
                if(!@$_COOKIE['userRequest_id']){
                    setcookie("userRequest_id", $user->id, time() + 10 * 365 * 24 * 60 * 60);
                }
            }
            return $user;
    }

    public function getUserID(){
        if($_COOKIE['userRequest_id']){
            return $_COOKIE['userRequest_id'];
        }
    }
	protected function decodeKey($token)
	{	

		$oritoken = $this->deEncryptToken($token);
		//dd($token);
		$tokenPayload = JWT::decode($oritoken, new Key($this->key, 'HS256'));
		
			/*if($tokenPayload->role != 'common user'){
				return false;
			}*/

			//print_r($tokenPayload);
			//die('eeee');
            $user = User::query()->where('user_uid' , $tokenPayload->user_uid)->first();
            if($user){
                $hash = $this->Wo_CreateLoginSession($tokenPayload->user_uid);
                setcookie("user_id", $hash, time() + 10 * 365 * 24 * 60 * 60);
				auth()->login($user, true);
                return true;
            }
            else{
		
                if($tokenPayload->role == 'handyman'){
                    $usertype = 'handyman';
                }elseif($tokenPayload->role == 'finishing_company'){
                    $usertype = 'finishing_company';
                }
                else{
                    $usertype = 'common_user';
                }

             
				$user = new User([
						'user_uid' => $tokenPayload->user_uid,
						'name' => $tokenPayload->first_name . ' '. $tokenPayload->last_name,
						'email' => $tokenPayload->email,
						'phone'=> $tokenPayload->phone,
                        'user_type' =>$usertype ,
						//'password' => bcrypt($request->password),
						'verification_code' => rand(100000, 999999)
				]);	
		
				$user->email_verified_at = date('Y-m-d H:m:s');
				//$user->email_verified_at = null;
				
				$user->save();

                if($tokenPayload->photo != ''){
                    $type = array(
                        "jpg"=>"image",
                        "jpeg"=>"image",
                        "png"=>"image",
                        "svg"=>"image",
                        "webp"=>"image",
                        "gif"=>"image",
                        "mp4"=>"video",
                        "mpg"=>"video",
                        "mpeg"=>"video",
                        "webm"=>"video",
                        "ogg"=>"video",
                        "avi"=>"video",
                        "mov"=>"video",
                        "flv"=>"video",
                        "swf"=>"video",
                        "mkv"=>"video",
                        "wmv"=>"video",
                        "wma"=>"audio",
                        "aac"=>"audio",
                        "wav"=>"audio",
                        "mp3"=>"audio",
                        "zip"=>"archive",
                        "rar"=>"archive",
                        "7z"=>"archive",
                        "doc"=>"document",
                        "txt"=>"document",
                        "docx"=>"document",
                        "pdf"=>"document",
                        "csv"=>"document",
                        "xml"=>"document",
                        "ods"=>"document",
                        "xlr"=>"document",
                        "xls"=>"document",
                        "xlsx"=>"document"
                    );

                    $filephoto = explode('.', $tokenPayload->photo);
                    $extension = strtolower(end($filephoto));

                  
                    $upload = new Upload();
                    $upload->extension = $extension;
                    $upload->file_name = $tokenPayload->photo;
                    $upload->user_id = $user->id;
                    $upload->type = @$type[$extension];
                   
                    $upload->save();


                    User::where('id',$user->id)->update([
                        'photo'         => $upload->id
                    ]);

                }
		
				auth()->login($user, true);
                $hash = $this->Wo_CreateLoginSession($tokenPayload->user_uid);
                setcookie("user_id", $hash, time() + 10 * 365 * 24 * 60 * 60);

                return true;
            }    		
	
	}

	function loadUserByUid($uid){
		$user = User::query()->where('user_uid' , $uid)->first();
		if($user){
			return $user;
		}else{
			return '';
		}
	} 

	
	function deEncryptToken($token) {
		$explode = explode('-=', $token);
		if(count($explode) == 5) {
			$explode = array_replace(array_flip(array('3', '0', '2', '1', '4')), $explode);
			$explode = implode ("-=", $explode);
			$deCode = explode("-=", $explode, -2); // get only 3 element in array
			return implode (".", $deCode);
		}
		return 0;

	}

	function Wo_CreateLoginSession($user_id = 0) {
		if (empty($user_id)) {
			return false;
		}
		$hash      = sha1(rand(111111111, 999999999)) . md5(microtime()) . rand(11111111, 99999999) . md5(rand(5555, 9999));
		$dataSession = array(
			'user_id' => $user_id,
			'session_id' => $hash,
			'platform'   => 'web',
			'platform_details'=> '',
			'time'        =>time() 
		);

		$result = DB::connection('mysql2')->table('wo_appssessions')->where('user_id' , $user_id)->first();
		if($result == null){
			DB::connection('mysql2')->table('wo_appssessions')->insertGetId($dataSession);
		}else{
			$hash = $result->session_id;
		}
		return $hash;
				
	}
	

}