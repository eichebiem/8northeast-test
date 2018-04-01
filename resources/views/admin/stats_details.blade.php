@extends('layouts.admin-master')


@section('content')
<div class="pageheader">
     <h2><i class="fa fa-bug"></i> Statistical Analysis</h2>
     <div class="breadcrumb-wrapper">
          <span class="label">You are here:</span>
          <ol class="breadcrumb">
               <li><a href="index.html">8 NorthEast</a></li>
               <li><a href="/admin/statistical_analysis">Statistical Analysis</a></li>
               <li class="active">{{ $data->client_name }}</li>
          </ol>
     </div>
</div>

<div class="contentpanel">
     
     <div class="panel">
          <div class="panel-heading">
               <div class="panel-title">{{ $data->client_name }}</div> <br>
               <h5 class="bug-key-title">{{ $data->client_address }}</h5>
          </div><!-- panel-heading-->
          <div class="panel-body">
               <div class="btn-group mr10">
                    <button class="btn btn-primary" type="button"><i class="fa fa-pencil mr5"></i> Edit</button>

                    <form action="/admin/statistical_analysis/{{ $data->id }}" method="post">
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
                                   <div class="col-xs-6">{{ $data->client_email }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Contact Number: </div></strong>
                                   <div class="col-xs-6">{{ $data->contact_number }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Telephone: </div></strong>
                                   <div class="col-xs-6">{{ $data->client_tel }}</div>
                              </div>

                              <br>

                              <div class="row">
                                   <strong><div class="col-xs-6">Research Title: </div></strong>
                                   <div class="col-xs-6">{{ $data->research_title }}</div>
                              </div>
                              <div class="row">
                                   <strong><div class="col-xs-6">Statistical procedure/s: </div></strong>
                                   <div class="col-xs-6">{{ $data->stats_procedure }}</div>
                              </div>
                         </div><!-- col-sm-6 -->

                         <div class="col-sm-6">
                              <div class="row">
                              <strong><div class="col-xs-6">Company Name: </div></strong>
                                   <div class="col-xs-6">{{ $data->company_name }}</div>
                              </div>
                              <div class="row">
                              <strong><div class="col-xs-6">Company Address: </div></strong>
                                   <div class="col-xs-6">{{ $data->company_address }}</div>
                              </div>
                              <div class="row">
                              <strong><div class="col-xs-6">Research Class: </div></strong>
                                   <div class="col-xs-6">{{ $data->research_class }}</div>
                              </div>
                              
                         </div><!-- col-sm-6 -->
                         </div><!-- row -->
                         
                    </div>
               </div><!-- row -->
               
          </div><!-- panel-body -->
     </div><!-- panel -->
     
</div><!-- contentpanel -->

@endsection