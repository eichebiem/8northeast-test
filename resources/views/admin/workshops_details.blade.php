@extends('layouts.admin-master')


@section('content')
<div class="pageheader">
     <h2><i class="fa fa-bug"></i> Training Workshops</h2>
     <div class="breadcrumb-wrapper">
          <span class="label">You are here:</span>
          <ol class="breadcrumb">
               <li><a href="index.html">8 NorthEast</a></li>
               <li><a href="/admin/training_workshops">Training Workshops</a></li>
               <li class="active">{{ $data->company_name }}</li>
          </ol>
     </div>
</div>

<div class="contentpanel">
     
     <div class="panel">
          <div class="panel-heading">
               <div class="panel-title">{{ $data->company_name }}</div> <br>
               <h5 class="bug-key-title">{{ $data->company_address }}</h5>
          </div><!-- panel-heading-->
          <div class="panel-body">
               <div class="btn-group mr10">
                    <button class="btn btn-primary" type="button"><i class="fa fa-pencil mr5"></i> Edit</button>

                    <form action="/admin/training_workshops/{{ $data->id }}" method="post">
                         @csrf
                         {{ method_field('DELETE') }}

                         <button class="btn btn-danger delete-row" type="submit"><i class="fa fa-trash-o mr5"></i> Delete</button>
                    </form>
                    
               </div>
               
               <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">
                         <i class="fa fa-arrow-circle-o-down mr5"></i> Export
                         <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                         <li><a href="#">Word</a></li>
                         <li><a href="#">Text</a></li>
                         <li><a href="#">Spreadsheet</a></li>
                         <li><a href="#">Print</a></li>
                    </ul>
               </div>
               
               <br /><br />
               
               <div class="row">
                    <div class="col-sm-12">
                         <h5 class="subtitle subtitle-lined">Details</h5>
                         <div class="row">
                         <div class="col-sm-6">
                              <div class="row">
                                   <strong><div class="col-xs-6">Email: </div></strong>
                                   <div class="col-xs-6">{{ $data->company_email }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Telephone: </div></strong>
                                   <div class="col-xs-6">{{ $data->company_tel }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Number of Participants: </div></strong>
                                   <div class="col-xs-6">{{ $data->participants }}</div>
                              </div>

                              <br>

                              <div class="row">
                                   <strong><div class="col-xs-6">Contact Person: </div></strong>
                                   <div class="col-xs-6">{{ $data->contact_person }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Contact Number: </div></strong>
                                   <div class="col-xs-6">{{ $data->contact_number }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Designation: </div></strong>
                                   <div class="col-xs-6">{{ $data->contact_designation }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Department: </div></strong>
                                   <div class="col-xs-6">{{ $data->contact_department }}</div>
                              </div>
                         </div><!-- col-sm-6 -->
                         <div class="col-sm-6">
                              <div class="row">
                              <strong><div class="col-xs-6">Course: </div></strong>
                                   <div class="col-xs-6">{{ $data->course }}</div>
                              </div>
                              <div class="row">
                              <strong><div class="col-xs-6">Ewan: </div></strong>
                                   <div class="col-xs-6">{{ $data->ewan }}</div>
                              </div>
                              <div class="row">
                              <strong><div class="col-xs-6">Days: </div></strong>
                                   <div class="col-xs-6">{{ $data->days }}</div>
                              </div>
                              
                         </div><!-- col-sm-6 -->
                         </div><!-- row -->
                         
                         <br /><br />
                         
                         <h5 class="subtitle subtitle-lined">Special Instructions</h5>
                         <p>{{ $data->special_instructions }}</p>
                         
                    </div>
               </div><!-- row -->
               
          </div><!-- panel-body -->
     </div><!-- panel -->
     
</div><!-- contentpanel -->

@endsection