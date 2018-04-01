<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/img/admin/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

  <link href="/css/admin/style.default.css" rel="stylesheet">
  <link href="/css/admin/jquery.datatables.css" rel="stylesheet">
  <link href="/css/admin/morris.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/js/admin/html5shiv.js"></script>
  <script src="/js/admin/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> bracket <span>]</span></h1>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="/img/admin/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>John Doe</h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href=""><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href=""><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      @include('layouts.admin-navigation')
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
    @include('layouts.admin-headerbar')

    @yield('content')
    
  </div><!-- mainpanel -->
  
</section>

<script src="/js/admin/jquery-1.11.1.min.js"></script>
<script src="/js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/admin/jquery-ui-1.10.3.min.js"></script>
<script src="/js/admin/bootstrap.min.js"></script>
<script src="/js/admin/modernizr.min.js"></script>
<script src="/js/admin/jquery.sparkline.min.js"></script>
<script src="/js/admin/toggles.min.js"></script>
<script src="/js/admin/retina.min.js"></script>
<script src="/js/admin/jquery.cookies.js"></script>


<script>
  jQuery(document).ready(function() {
    
    "use strict";
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Select2
    jQuery('select').select2({
        minimumResultsForSearch: -1
    });
    
    jQuery('select').removeClass('form-control');
    
    // Delete row in a table
    jQuery('.delete-row').click(function(e){
      var c = confirm("Continue delete?");
      if(c)
        $e.trigger('submit');
        // jQuery(this).closest('tr').fadeOut(function(){
        //   jQuery(this).remove();
        // });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>


<script src="/js/admin/flot/jquery.flot.min.js"></script>
<script src="/js/admin/flot/jquery.flot.resize.min.js"></script>
<script src="/js/admin/flot/jquery.flot.spline.min.js"></script>
<script src="/js/admin/morris.min.js"></script>
<script src="/js/admin/raphael-2.1.0.min.js"></script>

<script src="/js/admin/custom.js"></script>
<script src="/js/admin/dashboard.js"></script>

<!-- for training workshop page -->
<script src="/js/admin/jquery.datatables.min.js"></script>
<script src="/js/admin/select2.min.js"></script>

<script src="/js/admin/chosen.jquery.min.js"></script>

</body>
</html>
