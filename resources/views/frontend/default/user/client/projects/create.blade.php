@extends('frontend.default.layouts.app')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.client.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Post A New Task') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Post A New Task') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">
                                        {{ translate('Task title') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="{{ translate('Enter Task title') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label mb-2">
                                        {{ translate('Task type') }}
                                        <span class="text-danger">*</span>
                                    </div class="aiz-radio-inline">
                                    @if ($client_package->fixed_limit > 0)
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="projectTypeFixed" name="projectType" class="custom-control-input" value="Fixed" checked>
                                            <label class="custom-control-label" for="projectTypeFixed">{{ translate('Fixed') }}</label>
                                        </div>
                                    @else
                                        <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                            {{ translate('Your fixed type task post limit is over.') }}
                                        </div>
                                    @endif
                                    @if ($client_package->long_term_limit > 0)
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="projectTypeLong" name="projectType" class="custom-control-input" value="Long Term">
                                            <label class="custom-control-label" for="projectTypeLong">{{ translate('Long term') }}</label>
                                        </div>
                                    @else
                                        <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                            {{ translate('Your long term task post limit is over.') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        {{ translate('Task budget') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" min="0" step="0.01" class="form-control" name="price" placeholder="{{ translate('Enter task budget') }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="form-label">
                                        {{ translate('Task Duration') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" min="0" step="0.01" class="form-control" name="duration" placeholder="{{ translate('Enter task duration') }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <select name="duration_type" style="border: none">
                                                        <option selected>Duration Type</option>
                                                        <option  value="Hours">Hours</option>
                                                        <option  value="Day">Day</option>
                                                         <option value="Week">Week</option>
                                                         <option  value="Month">Month</option>
                                                         <option  value="Year">Year</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                               
                                <div class="form-group">
                                   <div class="row">
                                        <div class="col">
                                            <label>
                                            {{ translate('From Date') }}
                                            <span class="text-danger">*</span>
                                            </label>

                                                    <div class="input-group">
                                            <input type="date" min="0" step="0.01" class="form-control" name="from_date">
                                            </div>
                                                
                                        </div>


                                        <div class="col">
                                            <label>
                                            {{ translate('To Date') }}
                                            <span class="text-danger">*</span>
                                            </label>

                                                    <div class="input-group">
                                            <input type="date" min="0" step="0.01" class="form-control" name="to_date">
                                            </div>
                                                
                                        </div>
                                   </div>
                                </div>

                                    <div class="form-group">
                                    <label>
                                        {{ translate('location') }}
                                        <span class="text-danger">*</span>
                                    </label>


                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col">
                                                <select id="country" name="country" class="form-control aiz-selectpicker"  data-live-search="true" required onchange="getCities()">
                                                        <option value="">Select Country</option>
                                                    @foreach ($country as $countrys)
                                                        <option value="{{ $countrys->id }}">{{ $countrys->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col" id="cityDiv"></div>
                                           
                                            
                                        </div>
                                        
                                    </div>


                                    <br>

                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <input type="text" min="0" step="0.01" class="form-control" name="postal_code" placeholder="{{ translate('postal code') }}">
                                                </div>
                                            </div>

                                            <div class="col">
                                             <div class="input-group">
                                                    <input type="text" min="0" step="0.01" class="form-control" name="street" placeholder="{{ translate('Street') }}">
                                                </div>
                                            </div>
                                           
                                            
                                        </div>
                                        
                                    </div>

                                    </div>


{{--                                    <select class="form-control aiz-selectpicker" id="category_id" name="category_id" data-live-search="true" required>--}}
{{--                                        @foreach ($categories as $category)--}}
{{--                                            <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}


<br>

                                <div class="form-group">
                                    <label>
                                        {{ translate('Task category') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control aiz-selectpicker" id="category_id" name="category_id" data-live-search="true" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >
                                        {{ translate('Task summary') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" rows="3" name="excerpt" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>
                                        {{ translate('Tags required') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select multiple class="form-control aiz-selectpicker" name="skills[]" required data-live-search="true" data-placeholder="Select required skills" data-selected-text-format="count">
                                        @foreach ($skills as $skill)
                                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group u-summernote-editor">
                                    <label>
                                        {{ translate('Task Details') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control aiz-text-editor" data-height="300" rows="3" name="description" required data-toolbar='[
                                        ["style", ["style"]],
                                        ["font", ["bold", "underline", "clear"]],
                                        ["fontsize", ["fontsize"]],
                                        ["para", ["ul", "ol", "paragraph"]]
                                    ]'>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="signinSrEmail">{{ translate('File attachment') }}</label>
                                    <div class="input-group" data-toggle="aizuploader" data-multiple="true">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="attachments" class="selected-files">
                                    </div>
                                    <div class="file-preview"></div>
                                </div>
                                <div class="text-right">
                                    @if ($client_package->fixed_limit > 0 || $client_package->fixed_limit > 0)
                                        <button type="submit" class="btn btn-primary transition-3d-hover mr-1 rounded-1">{{ translate('Post Task') }}</button>
                                    @else
                                        <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                            {{ translate('Upgrade your Package.') }}
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <script>
        function getCities(){
            var country_id=$('#country').val();
            $.ajax({
                url: "{{ route('getCity') }}",
                method: "GET",
                data: {
                    "country_id": country_id
                },
                datatype: "json",
                success: function(result) {
                    //alert(JSON.stringify(result));
                   $('#cityDiv').html(result);
                },
                beforeSend: function() {
                    $('#loading').show();
                },
                complete: function() {
                    $('#loading').hide();
                },error: function(response) {
                    //alert(JSON.stringify(response));
                }
            });
        }
       
    </script>
@endsection



