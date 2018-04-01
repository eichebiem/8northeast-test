@extends('layouts.admin-master')

@section('content')

<div class="pageheader">
     <h2><i class="fa fa-table"></i> Statistical Analysis </h2>
     <div class="breadcrumb-wrapper">
          <span class="label">You are here:</span>
          <ol class="breadcrumb">
               <li><a href="index.html">8 NorthEast</a></li>
               <li class="active">Statistical Analysis</li>
          </ol>
     </div>
</div>

<div class="contentpanel">

     <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
               
               <thead>
                    <tr>
                         <th>#</th>
                         <th>Client Name</th>
                         <th>Client Address</th>
                         <th>Client Email</th>
                         <th>Contact Number</th>
                         <th></th>
                    </tr>
               </thead>

               <tbody>
                    @foreach($stats as $data)
                    <tr>
                         <td> {{ $data->id }}</td>
                         <td> {{ $data->client_name }} </td>
                         <td> {{ $data->client_address }} </td>
                         <td> {{ $data->client_email }} </td>
                         <td> {{ $data->contact_number }} </td>
                         <td>
                         
                         <a href="/admin/statistical_analysis/{{ $data->id }}" class="btn btn-primary btn-sm"><i class="fa fa-folder-open"></i></a>
                         <a href="" class="btn btn-danger btn-sm delete-row"><i class="fa fa-trash-o"></i></a>
                         </td>
                    </tr>
                    @endforeach

               </tbody>
          </table>
     </div><!-- table-responsive -->

     {{ $stats->links() }}
     
</div><!-- contentpanel -->

@endsection