@extends('layouts.admin-master')

@section('content')

<div class="pageheader">
     <h2><i class="fa fa-home"></i> Dashboard </h2>
     <div class="breadcrumb-wrapper">
     <span class="label">You are here:</span>
     <ol class="breadcrumb">
     <li><a href="index.html">Bracket</a></li>
     <li class="active">Dashboard</li>
     </ol>
     </div>
</div>

<div class="contentpanel">
     
     <div class="row">
     
     <div class="col-sm-6 col-md-3">
     <div class="panel panel-dark panel-stat">
          <div class="panel-heading">
          
          <div class="stat">
               <div class="row">
               <div class="col-xs-4">
               <img src="/img/admin/is-user.png" alt="" />
               </div>
               <div class="col-xs-8">
               <small class="stat-label">Training Workshops</small>
               <h1> {{ $unread_workshop }} </h1>

               <div class="mb15"></div>

               <a href="/admin/training_workshops" class="btn btn-warning">View List</a>
               </div>
               </div><!-- row -->

          </div><!-- stat -->
          
          </div><!-- panel-heading -->
     </div><!-- panel -->
     </div><!-- col-sm-6 -->
     
     <div class="col-sm-6 col-md-3">
     <div class="panel panel-danger panel-stat">
          <div class="panel-heading">
          
          <div class="stat">
               <div class="row">
               <div class="col-xs-4">
               <img src="/img/admin/is-user.png" alt="" />
               </div>
               <div class="col-xs-8">
               <small class="stat-label">Business Services</small>
               <h1>99</h1>

               <div class="mb15"></div>

               <a href="" class="btn btn-warning">View List</a>
               </div>
               </div><!-- row -->
               
          </div><!-- stat -->
          
          </div><!-- panel-heading -->
     </div><!-- panel -->
     </div><!-- col-sm-6 -->
     
     <div class="col-sm-6 col-md-3">
     <div class="panel panel-primary panel-stat">
          <div class="panel-heading">
          
          <div class="stat">
               <div class="row">
               <div class="col-xs-4">
               <img src="/img/admin/is-document.png" alt="" />
               </div>
               <div class="col-xs-8">
               <small class="stat-label">Statistical Analysis</small>
               <h1> {{ $unread_stat }} </h1>

               <div class="mb15"></div>

               <a href="/admin/statistical_analysis" class="btn btn-warning">View List</a>
               </div>
               </div><!-- row -->
               
          </div><!-- stat -->
          
          </div><!-- panel-heading -->
     </div><!-- panel -->
     </div><!-- col-sm-6 -->
     
     <div class="col-sm-6 col-md-3">
     <div class="panel panel-dark panel-stat">
          <div class="panel-heading">
          
          <div class="stat">
               <div class="row">
               <div class="col-xs-4">
               <img src="/img/admin/is-user.png" alt="" />
               </div>
               <div class="col-xs-8">
               <small class="stat-label">Example</small>
               <h1>655</h1>
               </div>
               </div><!-- row -->
               
          </div><!-- stat -->
          
          </div><!-- panel-heading -->
     </div><!-- panel -->
     </div><!-- col-sm-6 -->
     </div><!-- row -->

     <div class="row">
     <div class="col-sm-6 col-md-4">
     <div class="panel panel-default widget-photoday">
          <div class="panel-body">
          <a href="" class="photoday"><img src="/img/admin/photos/photo1.png" alt="" /></a>
          <div class="photo-details">
               <h4 class="photo-title">Strawhat In The Beach</h4>
               <small class="text-muted"><i class="fa fa-map-marker"></i> San Franciso, California, USA</small>
               <small>By: <a href="">ThemePixels</a></small>
          </div><!-- photo-details -->
          <ul class="photo-meta">
               <li><span><i class="fa fa-eye"></i> 32,102</span></li>
               <li><a href="#"><i class="fa fa-heart"></i> 1,003</a></li>
               <li><a href="#"><i class="fa fa-comments"></i> 52</a></li>
          </ul>
          </div><!-- panel-body -->
     </div><!-- panel -->
     </div><!-- col-sm-6 -->
     
     <div class="col-sm-6 col-md-4">
     <div class="panel panel-default panel-alt widget-messaging">
     <div class="panel-heading">
          <div class="panel-btns">
               <a href="" class="panel-edit"><i class="fa fa-edit"></i></a>
          </div><!-- panel-btns -->
          <h3 class="panel-title">Messaging</h3>
          </div>
          <div class="panel-body">
          <ul>
               <li>
               <small class="pull-right">Dec 10</small>
               <h4 class="sender">Jennier Lawrence</h4>
               <small>Lorem ipsum dolor sit amet...</small>
               </li>
               <li>
               <small class="pull-right">Dec 10</small>
               <h4 class="sender">Jennier Lawrence</h4>
               <small>Lorem ipsum dolor sit amet...</small>
               </li>
               <li>
               <small class="pull-right">Dec 10</small>
               <h4 class="sender">Jennier Lawrence</h4>
               <small>Lorem ipsum dolor sit amet...</small>
               </li>
               <li>
               <small class="pull-right">Dec 10</small>
               <h4 class="sender">Jennier Lawrence</h4>
               <small>Lorem ipsum dolor sit amet...</small>
               </li>
               <li>
               <small class="pull-right">Dec 9</small>
               <h4 class="sender">Marsha Mellow</h4>
               <small>Lorem ipsum dolor sit amet...</small>
               </li>
          </ul>
          </div><!-- panel-body -->
     </div><!-- panel -->
     </div><!-- col-sm-6 -->
     
     <div class="col-sm-6 col-md-4">
     
     <div class="row">
          <div class="col-xs-6">
          <div class="panel panel-warning panel-alt widget-today">
               <div class="panel-heading text-center">
               <i class="fa fa-calendar-o"></i>
               </div>
               <div class="panel-body text-center">
               <h3 class="today">Fri, Dec 13</h3>
               </div><!-- panel-body -->
          </div><!-- panel -->
          </div>
          
          <div class="col-xs-6">
          <div class="panel panel-danger panel-alt widget-time">
               <div class="panel-heading text-center">
               <i class="glyphicon glyphicon-time"></i>
               </div>
               <div class="panel-body text-center">
               <h3 class="today">4:50AM PST</h3>
               </div><!-- panel-body -->
          </div><!-- panel -->
          </div>
     </div>
     </div><!-- col-sm-6 -->
     
     </div>
     
     <div class="row">
     <div class="col-sm-8 col-md-9">
     <div class="panel panel-default">
          <div class="panel-body">
          <div class="row">
               <div class="col-sm-8">
               <h5 class="subtitle mb5">Network Performance</h5>
               <p class="mb15">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
               <div id="basicflot" style="width: 100%; height: 300px; margin-bottom: 20px"></div>
               </div><!-- col-sm-8 -->
               <div class="col-sm-4">
               <h5 class="subtitle mb5">Server Status</h5>
               <p class="mb15">Summary of the status of your server.</p>
               
               <span class="sublabel">CPU Usage (40.05 - 32 cpus)</span>
               <div class="progress progress-sm">
               <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-primary"></div>
               </div><!-- progress -->
               
               <span class="sublabel">Memory Usage (32.2%)</span>
               <div class="progress progress-sm">
               <div style="width: 32%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
               </div><!-- progress -->
               
               <span class="sublabel">Disk Usage (82.2%)</span>
               <div class="progress progress-sm">
               <div style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger"></div>
               </div><!-- progress -->
               
               <span class="sublabel">Databases (63/100)</span>
               <div class="progress progress-sm">
               <div style="width: 63%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning"></div>
               </div><!-- progress -->
               
               <span class="sublabel">Domains (2/10)</span>
               <div class="progress progress-sm">
               <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
               </div><!-- progress -->
               
               <span class="sublabel">Email Account (13/50)</span>
               <div class="progress progress-sm">
               <div style="width: 26%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
               </div><!-- progress -->
               
               
               </div><!-- col-sm-4 -->
          </div><!-- row -->
          </div><!-- panel-body -->
     </div><!-- panel -->
     </div><!-- col-sm-9 -->
     
     <div class="col-sm-4 col-md-3">
     
     <div class="panel panel-default">
          <div class="panel-body">
          <h5 class="subtitle mb5">Most Browser Used</h5>
          <p class="mb15">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
          <div id="donut-chart2" class="ex-donut-chart"></div>
          </div><!-- panel-body -->
     </div><!-- panel -->
     
     </div><!-- col-sm-3 -->
     
     </div><!-- row -->
     
     <div class="row">
     
     <div class="col-sm-7">
     
     <div class="table-responsive">
          <table class="table table-bordered mb30">
          <thead>
          <tr>
               <th>#</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Username</th>
          </tr>
          </thead>
          <tbody>
          <tr>
               <td>1</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
          </tr>
          <tr>
               <td>2</td>
               <td>Jacob</td>
               <td>Thornton</td>
               <td>@fat</td>
          </tr>
          <tr>
               <td>3</td>
               <td>Larry</td>
               <td>the Bird</td>
               <td>@twitter</td>
          </tr>
          <tr>
               <td>4</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
          </tr>
          <tr>
               <td>5</td>
               <td>Jacob</td>
               <td>Thornton</td>
               <td>@fat</td>
          </tr>
          <tr>
               <td>6</td>
               <td>Larry</td>
               <td>the Bird</td>
               <td>@twitter</td>
          </tr>
          <tr>
               <td>7</td>
               <td>Larry</td>
               <td>the Bird</td>
               <td>@twitter</td>
          </tr>
          </tbody>
     </table>
     </div><!-- table-responsive -->
     
     </div><!-- col-sm-7 -->
     
     <div class="col-sm-5">
     
     <div class="panel panel-success">
          <div class="panel-heading padding5">
          <div id="line-chart" class="ex-line-chart"></div>
          </div>
          <div class="panel-body">
          <div class="tinystat pull-left">
               <div id="sparkline" class="chart mt5"></div>
               <div class="datainfo">
               <span class="text-muted">Average Sales</span>
               <h4>$630,201</h4>
               </div>
          </div><!-- tinystat -->
          <div class="tinystat pull-right">
               <div id="sparkline2" class="chart mt5"></div>
               <div class="datainfo">
               <span class="text-muted">Total Sales</span>
               <h4>$139,201</h4>
               </div>
          </div><!-- tinystat -->
          </div>
     </div><!-- panel -->
     
     </div><!-- col-sm-6 -->
     </div><!-- row -->
     
     
     
</div><!-- contentpanel -->

@endsection