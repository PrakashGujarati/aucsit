@extends('layouts.app')

@section('title')
Case
@endsection

@section('page-title')
Case
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
                                <form action="{{route('store.case')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <h3 class="card-title">Patient Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Patient <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select class="form-control" name="patient_id" required data-validation-required-message="This field is required">
                                                            <option value="">--Select Patient--</option>
                                                            <option value="1">Patient 1</option>
                                                            <option value="2">Patient 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="control-label">File No</label>
                                                    <input type="text" name="file_no" class="form-control" placeholder="File No">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="control-label">First Name</label>
                                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Middle Name</label>
                                                    <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input class="form-control" name="dob" type="datetime-local" value="2020-06-06T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" name="age" class="form-control" placeholder="Age">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select" name="sex">
                                                        <option value="">--Select Sex--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Mobile no</label>
                                                    <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No">
                                                </div>
                                            </div>  
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Phone no</label>
                                                    <input type="text" name="phone_no" class="form-control" placeholder="Phone No">
                                                </div>
                                            </div>  
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Registered on</label>
                                                    
                                                    <input class="form-control" name="registered_on" type="datetime-local" value="2020-06-06T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div> 
                                        </div>
                                        <h3 class="card-title">Address Info</h3>
                                        <hr>
                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Address Line 1</label>
                                                    <textarea class="form-control" name="line_1" placeholder="Address Line 1"></textarea>
                                                </div>
                                            </div>  
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Address Line 2</label>
                                                    <textarea class="form-control" name="line_2" placeholder="Address Line 2"></textarea>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Address Line 3</label>
                                                    <textarea class="form-control" name="line_3" placeholder="Address Line 3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">City</label>
                                                    <select class="form-control custom-select" name="city">
                                                        <option value="Rajkot">Rajkot</option>
                                                        <option value="Ahemdabad">Ahemdabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">State</label>
                                                    <select class="form-control custom-select" name="state">
                                                        <option value="">--Select State--</option>
                                                        <option value="Gujarat">Gujarat</option>
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
                                                     <input type="text" name="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Family</label>
                                                    <textarea class="form-control" name="family" placeholder="Family"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Guardian</label>
                                                   <input type="text" name="guardian" class="form-control" placeholder="Guardian">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Blood Group</label>
                                                   <input type="text" name="blood_grp" class="form-control" placeholder="Blood Group">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Referred By</label>
                                                   <input type="text" name="referred_by" class="form-control" placeholder="Referred By">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Patient Image</label>
                                                   <input type="file" name="patient_image" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        
                                       
                                  
                                        <!--/row-->
                                  
                                    </div>
                                    <div class="form-actions">
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