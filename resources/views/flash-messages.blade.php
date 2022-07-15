@if ($message = Session::get('success'))
<div  id="myDiv" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
</div>
@endif 
    
@if ($message = Session::get('error'))
<div id="myDiv" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
</div>
@endif
     
@if ($message = Session::get('warning'))
<div  id="myDiv" class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
</div>
@endif
     
@if ($message = Session::get('info'))
<div  id="myDiv" class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
</div>
@endif
    
@if ($errors->any())
<div id="myDiv" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please check the form below for errors</strong>
</div>
@endif