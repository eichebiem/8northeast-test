@extends('layouts.admin-master')

@section('content')

<div class="pageheader">
     <h2><i class="fa fa-table"></i> Training Workshops </h2>
     <div class="breadcrumb-wrapper">
          <span class="label">You are here:</span>
          <ol class="breadcrumb">
               <li><a href="index.html">8 NorthEast</a></li>
               <li class="active">Training Workshops</li>
          </ol>
     </div>
</div>

<div class="contentpanel">

     <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
               
               <thead>
                    <tr>
                         <th>#</th>
                         <th>Company Name</th>
                         <th>Company Address</th>
                         <th>Contact Person</th>
                         <th>Contact Number</th>
                         <th></th>
                    </tr>
               </thead>

               <tbody>
                    @foreach($workshops as $data)
                    <tr>
                         <td> {{ $data->id }}</td>
                         <td> {{ $data->company_name }} </td>
                         <td> {{ $data->company_address }} </td>
                         <td> {{ $data->contact_person }} </td>
                         <td> {{ $data->contact_number }} </td>
                         <td>
                         
                         <a href="/admin/training_workshops/{{ $data->id }}" class="btn btn-primary btn-sm"><i class="fa fa-folder-open"></i></a>
                         <a href="" class="btn btn-danger btn-sm delete-row"><i class="fa fa-trash-o"></i></a>
                         </td>
                    </tr>
                    @endforeach

               </tbody>
          </table>
     </div><!-- table-responsive -->

     {{ $workshops->links() }}
     
</div><!-- contentpanel -->

@endsection