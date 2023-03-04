<div class="modal fade" id="quickLogin" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
            <div class="flex bg-[#fda706] w-full justify-center py-4 rounded-md"><img class="justify-center h-[40px] w-[150px]" src="{{asset('kemedar/assets/images/logo.png') }}" alt="Kemdar site"></div>
            <div class="flex min-h-full items-center justify-center py-[30px] px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-md space-y-8" id="formLogin" style="display: none">
                      <div><h2 class="mt-6 text-center text-[16px] font-bold tracking-tight text-gray-900">Sign in to your account</h2></div>
                      <form id="loginForm" role="form">
                          {!! csrf_field() !!}

                          @if (isset($errors) && $errors->any() && old('quickLoginForm')=='1')
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
                              <ul class="list list-check">
                                @foreach($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                              </ul>
                            </div>
                          @endif

                                  <div class="-space-y-px ">
                                    <div class="mb-[15px]">
                          <?php
                              $loginValue = (session()->has('login')) ? session('login') : old('login');
                              //$loginField = getLoginField($loginValue);
                              $loginField = 'phone';
                              /*if ($loginField == 'phone') {
                                $loginValue = phoneFormat($loginValue, old('country', config('country.code')));
                              }*/
                          ?>
                        <?php $loginError = (isset($errors) && $errors->has('login')) ? ' is-invalid' : ''; ?>
                            <label for="email-address" class="sr-only">Email or Phone</label>
                            <input id="login" name="login" type="text" value="{{ $loginValue }}" autocomplete="email" required class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white" placeholder="Email or Phone">
                          </div>
                          <div>
                            <?php $passwordError = (isset($errors) && $errors->has('password')) ? ' is-invalid' : ''; ?>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white" placeholder="Password">
                          </div>
                        </div>

                        <div class="flex items-center justify-between mt-3">
                          <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                          </div>

                          <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                          </div>
                        </div>

                        <div class="mt-4">
                            <button class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                              <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <!-- Heroicon name: mini/lock-closed -->
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                </svg>
                              </span>
                              {{ translate('Sign in') }}
                            </button>
                        </div>  
                          <div class="flex w-full justify-center mt-3">{{ translate('New here?') }}<a class="linkRegister" href="#">{{ translate('Create a account') }}</a></div>
                        </form> 
					          

                    </div>  
                     <!--end form Login -->  

                     <div class="w-full max-w-md space-y-8" id="formRegister" style="display: none">
                   
                      <form id="register-form" class="" action="" method="post">

                        <h4 class="font-semibold text-[18px]">{{translate('Create your account')}}</h4>
                        <p>{{translate('Enter your personal details to create account')}}</p>
                        <div class="form-group">
                            <label class="col-form-label pt-0 font-semibold">{{translate('Your Name')}}</label>
                            <div class="row">
                                <div class="col-6">
                                    <input name="first_name"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white"
                                        type="text" required placeholder="First name" />
                                </div>
                                <div class="col-6">
                                    <input name="last_name"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white"
                                        type="text" required placeholder="Last name" />
                                </div>
                                
                            </div>
                        </div>
                        <div class="py-3">
                            <label class="my-2 font-semibold">{{translate('Password')}}</label>
    
                            <input
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white my-2"
                                type="password" minlength="6" required name="password"
                                placeholder="Please Enter Your Password" />
                            
                            
                        </div>
                        <div class="py-3">
                            <label class="my-2 font-semibold">{{translate('Phone Number')}}</label>
    
                            <input name="phone"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white my-2"
                                type="text" required
                                placeholder="Please Enter Your Phone" />
                            <div class="checkbox p-0">
                                <input id="use_email" type="checkbox"
                                    class="form-check-input" />
                                <label class="disply-inline" for="checkbox2">{{translate('I want to use my Email')}}</label>
                            </div>
                            <div class="email-register">
                                <label class="my-2 font-semibold">{{translate('Email')}}</label>
                                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white my-2"
                                    type="email" placeholder="Please Enter Your Email" />
                            </div>
                            
                        </div>
                        <div class="text-center mt-5 mb-5">
                            <h2 class="signup-heading">{{translate('Choose Your Role Here!')}}</h2>
                        </div>

                     
                        <div class="rounded-md my-2" id="accordion">
                            <div class="bg-[#EDEDED] hover:text-white py-[15px] px-[10px] rounded cursor-pointer hover:bg-[#FFC50B]">
                                <div class="flex items-center justify-between">
                                    <div class="flex-1">
                                      <button class="accordion-button" type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                        <strong>Common user</strong> (Buyer, property seller, investor, community member)
                                      </button>
                                    </div>
                              
                                </div>
                            </div>
                            <div class="p-2 rounded mx-[30px] d-block collapse" id="flush-collapseOne" data-parent="#accordion">
                                <div class="mb-[20px] text-ash">
                                    <div id="com_user-signup_options" class="com_user-signup_options"><p> I will mainly use kemedar in <small>(you can select as many as you can)</small></p>
                                      <div class="form-group mb-0">
                                          <div class="checkbox p-0">
                                              <input id="checkbox2" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox2">Search, buy or rent properties</label>
                                          </div>
                                      </div>
                                      <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input id="checkbox3" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox3">Add, promote and sell my properties</label></div></div><div class="form-group mb-0"><div class="checkbox p-0"><input id="checkbox4" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox4">Find handymen and carry out finishing tasks on my properties</label></div></div><div class="form-group mb-0"><div class="checkbox p-0"><input id="checkbox5" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox5">Search and buy products for my home and construction</label></div></div><div class="form-group mb-0"><div class="checkbox p-0"><input id="checkbox6" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox6">Know the most updated news in the real estate market</label></div></div><div class="form-group mb-0"><div class="checkbox p-0"><input id="checkbox7" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox7">Learn profession and courses in the real estate industry to be handyman or professional realtor</label></div></div><div class="form-group mb-0"><div class="checkbox p-0"><input id="checkbox8" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox">Build my community in the real estate industry and communicate with people of the same interest</label></div></div><div class="form-group mb-0"><div class="checkbox p-0"><input id="checkbox9" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"><label class="text-muted disply-inline" for="checkbox9">Invest my money buying shares in property using your kemedar Reits system</label></div></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[#EDEDED] hover:text-white py-[15px] px-[10px] rounded cursor-pointer hover:bg-[#FFC50B]">
                              <div class="flex items-center justify-between">
                                  <div class="flex-1">
                                    <button class="accordion-button" type="button" data-toggle="collapse" data-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                                      <strong>Professional user</strong> (handyman, marketer, freelancer, affiliate)
                                    </button>
                                  </div>        
                              </div>
                              </div>
                              <div class="p-2 rounded mx-[30px] d-block collapse" id="flush-collapseTwo" data-parent="#accordion">
                                  <div class="mb-[20px] text-ash">
                                      <div id="com_user-signup_options" class="com_user-signup_options"><p> I will mainly use kemedar in <small>(you can select as many as you can)</small></p>
                                        <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox10">All stated in common user +</label></div>
                                       </div>
                                       <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input  class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox11">Promote my services to your visitors to communicate and get orders from them</label></div>
                                       </div>
                                       <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox12">Use my profile on kemedar as my website page</label></div>
                                       </div>
                                       <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input  class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox13">Find good products and properties to do marketing by the affiliate system</label></div>
                                       </div>
                                       <h5>I am :</h5>
                                       <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input  class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox14">Handyman technician</label></div>
                                       </div>
                                       <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input  class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox15">Marketer</label></div>
                                       </div>
                                       <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input  class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox16">Affiliate</label></div>
                                       </div>
                                       <div class="form-group mb-0">
                                          <div class="checkbox p-0"><input class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox17">Freelancer</label></div>
                                       </div>
                                  </div>
                              </div>


                        </div>


                        <div class="role-list">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                               
                                <div class="accordion-item">
                                  <h2 data-role="{{strtolower('Business users')}}" class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Business users</strong> (Brokers, Real estate Agents, Real estate developers, finishing companies)
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>I will mainly use kemedar in <small>(you can select as many as you can)</small></p>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox18">all stated in common user +</label></div>
                                        </div>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox19">Promote my company properties, project, and services to your visitors</label></div>
                                        </div>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox20">Managing my real estate business using your business tools</label></div>
                                        </div>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox21">Using my profile page as my website page</label></div>
                                        </div>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox22">Communicate with service providers, freelancers, marketer and affiliates to help me in my business and marketing operations</label></div>
                                        </div>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox23">Advertise my company on your website pages</label></div>
                                        </div>
                                        <h5>I am :</h5>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox24">Real estate Agent</label></div>
                                        </div>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox25">Real estate developer</label></div>
                                        </div>
                                        <div class="form-group mb-0">
                                           <div class="checkbox p-0"><input class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox26">Finishing Company</label></div>
                                        </div>
                                    
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 data-role="{{strtolower('Product Seller')}}" class="accordion-header" id="flush-heading-4">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-4" aria-expanded="false" aria-controls="flush-collapse-4">
                                        <strong>Product Seller</strong> (Through kemetro Ecommerce system)
                                      </button>
                                    </h2>
                                    <div id="flush-collapse-4" class="accordion-collapse collapse" aria-labelledby="flush-heading-4" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>I will mainly use kemedar in <small>(you can select as many as you can)</small></p>
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0"><input class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox27">Create my own online shop on your ecommerce portal system for real estate home construction, finishing, and furnishing products</label></div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0"><input class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox28">Promote my products and get orders from your visitors</label></div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0"><input  class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox29">Allow me to accept all payment methods that you can offer for your visitors including online and offline payments</label></div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0"><input  class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox30">Communicate with service providers, feelancers, marketer and affiliate to help me in my business and marketing operations</label></div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0"><input  class="disply-inline form-check-input role-ckb" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox31">Using my store page on kemetro as my website page</label></div>
                                            </div>
                                      
                                      </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 data-role="{{strtolower('Product Shipper')}}" class="accordion-header" id="flush-heading-5">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-5" aria-expanded="false" aria-controls="flush-collapse-5">
                                        <strong>Product Shipper</strong> (Through kemetro Ecommerce system)
                                      </button>
                                    </h2>
                                    <div id="flush-collapse-5" class="accordion-collapse collapse" aria-labelledby="flush-heading-5" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>I will mainly use kemedar in <small>(you can select as many as you can)</small></p>
                                            <div class="checkbox p-0">
                                                <input  class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]">
                                                <label class="text-muted disply-inline" for="checkbox32">Offer shipping and delivery service for kemetro products to the buyers of kemetro</label>
                                            </div>
                                      
                                      </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 data-role="{{strtolower('Instructor or trainer')}}" class="accordion-header" id="flush-heading-6">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-6" aria-expanded="false" aria-controls="flush-collapse-6">
                                        <strong>Instructor or trainer</strong> (through Kemecademy training & education system)
                                      </button>
                                    </h2>
                                    <div id="flush-collapse-6" class="accordion-collapse collapse" aria-labelledby="flush-heading-6" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>I will mainly use kemedar in <small>(you can select as many as you can)</small></p>
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0"><input  class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox33">Give courses, lectures or training to the learners of your users</label></div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="checkbox p-0"><input  class="form-check-input role-ckb disply-inline" type="checkbox" name="permission[]"><label class="text-muted disply-inline" for="checkbox34">Manage all my teaching and training activities, lessons, classes</label></div>
                                            </div>
                                      
                                      </div>
                                    </div>
                                </div>
                               
                                
                                
                            </div>
                        </div>
                        
    
                        <div class="form-group mt-4 mb-4">
                            <div class="checkbox p-0">
                                <input id="checkbox-agree"
                                    class="form-check-input"
                                    type="checkbox" name="agree-ckb" />
                                <label class="text-muted disply-inline" for="checkbox1">Agree with<a
                                        class="ms-2" href="#">Privacy Policy</a></label>
                            </div>
                            <div id="loading-ajax"></div>
                            <button id="submit-register" class="w-full bg-[#FFC50B] text-white my-2 p-2 rounded-md" type="submit">
                                Create Account
                            </button>
                            <input id="from_domain" type="hidden" value="kemedar.com" >
                            <input id="role_selected" name="role" type="hidden" value="" >
                        </div>
                        <h6 class="text-muted mt-4 text-center or">Or signup with</h6>
                        <div class="social mt-4 custom-pd-social">
                            <div class="flex gap-1">
                                <a class="btn btn-light" href="{{ url('login/linkedin') }}"
                                    target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    LinkedIn
                                </a>
                                <a class="btn btn-light" href="{{ url('login/twitter') }}"
                                    target="_blank">
                                    <i class="fab fa-twitter text-primary"></i>
                                    twitter
                                </a>
                                <a class="btn btn-light" href="{{ url('login/facebook') }}" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    facebook
                                </a>
                                <a class="btn btn-light" href="{{ url('login/google') }}" target="_blank">
                                    <i class="fab fa-google text-danger"></i>
                                    Google
                                </a>
                            </div>
                            
                        </div>
                        <p class="my-4 text-center text-ash">
                            Already have an account?<a class="" data-dismiss="modal" href="#quickLogin" data-target="#quickLogin" data-bs-toggle="modal">Sign in</a>
                        </p>
                    </form>
                    </div>


                    
            </div> 
    </div>
  </div>
</div>

