@extends('layouts.app')

@section('title')
Edit Case
@endsection

@section('page-title')
Edit Case
@endsection

@section('content')
<div class="card-group">
    <div class="card">
        <div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Case</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('update.case')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <h3 class="card-title">Patient Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="hidden_id" value="{{$case->id}}">
                                                    <h5>Patient <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select class="form-control" name="patient_id" required data-validation-required-message="This field is required">
                                                            <option value="">--Select Patient--</option>
                                                            <option value="1" @if($case->patient_id == 1) selected @endif>Patient 1</option>
                                                            <option value="2" @if($case->patient_id == 2) selected @endif>Patient 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="control-label">File No</label>
                                                    <input type="text" name="file_no" value="{{$case->file_no}}" class="form-control" placeholder="File No">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title</label>
                                                    <input type="text" name="title" value="{{$case->title}}" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="control-label">First Name</label>
                                                    <input type="text" name="first_name" value="{{$case->first_name}}" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Middle Name</label>
                                                    <input type="text" name="middle_name" value="{{$case->middle_name}}" class="form-control" placeholder="Middle Name">
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="last_name" value="{{$case->last_name}}" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    @php
                                                        $date=str_replace(' ','T',$case->dob);
                                                    @endphp
                                                    <input class="form-control" name="dob" type="datetime-local" value="{{$date}}" id="example-datetime-local-input">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" name="age" value="{{$case->age}}" class="form-control" placeholder="Age">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select" name="sex">
                                                        <option value="">--Select Sex--</option>
                                                        <option value="Male" @if($case->sex == 'Male') selected @endif>Male</option>
                                                        <option value="Female" @if($case->sex == 'Female') selected @endif>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Mobile no</label>
                                                    <input type="text" name="mobile_no" value="{{$case->mobile_no}}" class="form-control" placeholder="Mobile No">
                                                </div>
                                            </div>  
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Phone no</label>
                                                    <input type="text" name="phone_no" value="{{$case->phone_no}}" class="form-control" placeholder="Phone No">
                                                </div>
                                            </div>  
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Registered on</label>
                                                     @php
                                                        $dateReg=str_replace(' ','T',$case->registered_on);

                                                    @endphp
                                                    <input class="form-control" name="registered_on" type="datetime-local" value="{{$dateReg}}" id="example-datetime-local-input">
                                                </div>
                                            </div> 
                                        </div>
                                        <h3 class="card-title">Address Info</h3>
                                        <hr>
                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Address Line 1</label>
                                                    <textarea class="form-control"  name="line_1" placeholder="Address Line 1">{{$case->line_1}}</textarea>
                                                </div>
                                            </div>  
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Address Line 2</label>
                                                    <textarea class="form-control" name="line_2" placeholder="Address Line 2">{{$case->line_2}}</textarea>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Address Line 3</label>
                                                    <textarea class="form-control" name="line_3" placeholder="Address Line 3">{{$case->line_3}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">City</label>
                                                    <select class="form-control custom-select" name="city">
                                                        <option value="Rajkot" @if($case->city == 'Rajkot') selected @endif>Rajkot</option>
                                                        <option value="Ahemdabad" @if($case->city == 'Ahemdabad') selected @endif>Ahemdabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">State</label>
                                                    <select class="form-control custom-select" name="state">
                                                        <option value="">--Select State--</option>
                                                        <option value="Gujarat" @if($case->state == 'Gujarat') selected @endif>Gujarat</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Other Info</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Email</label>
                                                     <input type="text" name="email" value="{{$case->email}}" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Family</label>
                                                    <textarea class="form-control"  name="family" placeholder="Family">{{$case->family}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Guardian</label>
                                                   <input type="text" name="guardian" value="{{$case->guardian}}" class="form-control" placeholder="Guardian">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Blood Group</label>
                                                   <input type="text" value="{{$case->blood_grp}}" name="blood_grp" class="form-control" placeholder="Blood Group">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Referred By</label>
                                                   <input type="text" value="{{$case->referred_by}}" name="referred_by" class="form-control" placeholder="Referred By">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Patient Image</label>
                                                   <input type="file" name="patient_image" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="{{asset('images/'.$case->patient_image)}}" height="100" width="100">
                                            </div>
                                        </div>
                                        
                                       
                                  
                                        <!--/row-->
                                  
                                    </div>
                                    
                                    <div class="form-actions" style="margin-top: 10px;">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
 <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>
@endsection