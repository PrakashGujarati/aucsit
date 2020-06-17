@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('css')
<link href="{{asset('assets/assets/plugins/tablesaw-master/dist/tablesaw.css')}}" rel="stylesheet">
@endsection

@section('page-title')
Dashboard
@endsection

@section('content')
<div class="card-group">
    <div class="card">
        <div class="card-body">
        	<div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <div class="input-group-append">
                            <button class="btn btn-info searchBtn" type="button">Go!</button>
                        </div>
                    </div>
                </div>
        		<div class="col-md-2">

        			<a href="{{route('add.case')}}" class="btn btn-info" style="float: right;">Add Case</a>
        		</div>
        	</div>
			<div class="row">
				<div class="col-md-12">

					 <table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">File No</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Name</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">Email</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Mobile No:
                                            </th>
                                             <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Title
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Date of Birth
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Age
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Sex
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Phone no
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Registered on
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Address Line 1
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Address Line 2
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Address Line 3
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                City
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                State
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Family
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Guardian
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Blood Group
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Referred By
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                Patient image
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($cases) > 0)
											@foreach($cases as $case)
												<tr>
													<td>{{$case->file_no}}</td>
													<td>{{$case->first_name.' '.$case->middle_name.' '.$case->last_name}}</td>
													<td>{{$case->email}}</td>
													<td>{{$case->mobile_no}}</td>

													<td>{{$case->title}}</td>
													<td>{{$case->dob}}</td>
													<td>{{$case->age}}</td>
													<td>{{$case->sex}}</td>
													<td>{{$case->phone_no}}</td>
													<td>{{$case->registered_on}}</td>
													<td>{{$case->line_1}}</td>
													<td>{{$case->line_2}}</td>
													<td>{{$case->line_3}}</td>
													<td>{{$case->city}}</td>
													<td>{{$case->state}}</td>
													<td>{{$case->family}}</td>
													<td>{{$case->guardian}}</td>
													<td>{{$case->blood_grp}}</td>
													<td>{{$case->referred_by}}</td>
													<td><img src="{{asset('images/'.$case->patient_image)}}" height="100" width="100"></td>

													<td>
														<a href="{{route('edit.case',$case->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

														<a href="{{route('delete.case',$case->id)}}" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
													</td>
												</tr>
											@endforeach
										@endif
                                    </tbody>
                                </table>

				
					{{$cases->links()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/assets/plugins/tablesaw-master/dist/tablesaw.js')}}"></script>
<script src="{{asset('assets/assets/plugins/tablesaw-master/dist/tablesaw-init.js')}}"></script>
<script type="text/javascript">
    $(document).on('click','.searchBtn',function(){
        
    });
</script>
@endsection