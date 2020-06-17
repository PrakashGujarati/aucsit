@extends('layouts.app')

@section('title')
Patient Detail
@endsection
@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body p-b-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="text-center">
                                        <img src="http://localhost/hospitalapp/public/assets/assets/images/users/d1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 style='font-weight:bold'>Name</h5>
                                        <h5 style='font-weight:bold'>Gender</h5>
                                        <h5 style='font-weight:bold'>Phone</h5>
                                        <h5 style='font-weight:bold'>Email</h5>
                                        <h5 style='font-weight:bold'>Patient id</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Prakash Gujarati</h5>
                                        <h5>Male</h5>
                                        <h5>9601026377</h5>
                                        <h5>101</h5>
                                        <h5>05/06/2020</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 style='font-weight:bold'>BirthDate</h5>
                                        <h5 style='font-weight:bold'>Age</h5>
                                        <h5 style='font-weight:bold'>Blood Group</h5>                                        
                                        <h5 style='font-weight:bold'>Anniversary Date</h5>
                                        <h5 style='font-weight:bold'>Remark</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>08/04/1992</h5>
                                        <h5>28</h5>
                                        <h5>B-</h5>
                                        <h5></h5>
                                        <h5></h5>
                                    </div>
                                </div>
                                <hr class="mb-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Consultant</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Procedure</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Laboratory</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Images</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Timeline</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Charges</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Payment</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Bill</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    <div class="p-20">
                                        <h3>Best Clean Tab ever</h3>
                                        <h4>you can use it with the small code</h4>
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="profile2" role="tabpanel">2</div>
                                <div class="tab-pane p-20" id="messages2" role="tabpanel">3</div>
                            </div>
                        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
