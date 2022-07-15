<?php include(dirname(dirname(__FILE__))."/includes/head.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/vendors/css/forms/toggle/switchery.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/css/app.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/css/plugins/forms/validation/form-validation.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/css/plugins/pickers/daterange/daterange.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/app-assets/vendors/css/pickers/daterange/newDaterangepicker.css">
</head>
<style>
   div#myDiv {
    position: absolute;
    top: 80px;
    box-shadow: 5px 5px;
    width: 25%;
    right: 4px;
    text-align: center;
    font-size: 17px;
    font-weight: bold;
    background-color: #31ad3130 !important;
}
</style>
<body class="vertical-layout vertical-compact-menu 2-columns menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
<?php include(dirname(dirname(__FILE__))."/includes/header.php"); ?>
<?php  
                if(session()->getFlashdata('message'))
                {               
                  $flash = session()->getFlashdata('message');                
                  echo '<div id="myDiv" class="alert alert-'.$flash['msg_class'].'">'.$flash['msg'].'</div>';              
                }?>
<?php include(dirname(dirname(__FILE__))."/includes/sidebar.php"); ?>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Create New Subscriber</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo base_url('admin/home'); ?>">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?php echo base_url('user'); ?>">All Subscribers</a>
              </li>
              <li class="breadcrumb-item active">
                Create New 
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right text-md-right col-md-6 col-12">
        <div class="btn-group">
          <a href="<?php echo base_url('user'); ?>">
            <button class="btn btn-round btn-info" type="button">
              <i class="ft-list"></i> All Subscribers
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="basic-form-layouts">
        <div class="row match-height">
          <div class="col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                
                    <form class="form-sample" name="form1" method="POST" action="<?php echo base_url('Add-Subscriber') ?>" enctype="multipart/form-data">
                    <div class="form-body">
                      <h4 class="form-section"><i class="la la-eye"></i> About Subsriber</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>First Name<span class="required">*</span></h5>
                            <div class="controls">
                              <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo set_value('first_name') ?>" placeholder="Enter your First Name" required data-validation-required-message="This field is required" data-validation-regex-regex="([\a-zA-Z ]+)" data-validation-regex-message="valid inputs are a-z, A-Z">
                              <?php if($validation->getError('first_name')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('first_name'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Surname<span class="required">*</span>
                            </h5>
                            <div class="controls">
                              <input type="text" id="surname" name="surname" placeholder="Enter surname"value="<?php echo set_value('surname') ?>" class="form-control" data-validation-required-message="This field is required" data-validation-regex-regex="([\a-zA-Z ]+)" data-validation-regex-message="valid inputs are a-z, A-Z">
                              <?php if($validation->getError('surname')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('surname'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Email<span class="required">*</span>
                            </h5>
                            <div class="controls">
                              <input type="email" id="email" name="email" placeholder="Enter Email" value="<?php echo set_value('email') ?>" class="form-control" data-validation-required-message="This field is required">
                              <?php if($validation->getError('email')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('email'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Subscriber Panel Title<span class="required">*</span>
                            </h5>
                            <div class="controls">
                              <input type="" id="title" name="title" placeholder="Enter title" value="<?php echo set_value('title') ?>" class="form-control" data-validation-required-message="This field is required">
                              <?php if($validation->getError('title')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('title'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Contact Number<span class="required">*</span>
                            </h5>
                            <div class="controls">
                              <input type="number" id="phone" name="contact_number" placeholder="Enter Contact Number" value="<?php echo set_value('contact_number') ?>" class="form-control" required data-validation-required-message="This field is required" minlength="10" maxlength="10">
                              <?php if($validation->getError('contact_number')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('contact_number'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>DOB<span class="required">*</span>
                            </h5>
                            <div class="controls">
                            <input type="text" id="dob" class="form-control singledate"  name="dob"  value="<?php echo set_value('dob') ?>"placeholder="mm/dd/yyyy "required data-validation-required-message="This field is required">
                            <?php if($validation->getError('dob')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('dob'); 
                                            }
                              ?><span class="age-error" style="color:red"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>City/Town<span class="required">*</span></h5>
                            <div class="controls">
                              <input type="text" id="city" name="city" value="<?php echo set_value('city') ?>" placeholder="Enter City" class="form-control" required data-validation-regex-regex="([\a-zA-Z ]+)" data-validation-regex-message="valid inputs are a-z" data-validation-required-message="This field is required">
                              <?php if($validation->getError('city')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('city'); 
                                            }
                              ?>
                            </div>
                          </div>
                         </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Post Code<span class="required">*</span></h5>
                            <div class="controls">
                              <input type="text" id="postal_code" name="postcode"  value="<?php echo set_value('postcode') ?>"placeholder="Postal Code" class="form-control" required data-validation-regex-regex="([A-Z0-9]+)" data-validation-regex-message="valid input are 0-9,A-z" data-validation-required-message="This field is required" >
                              <?php if($validation->getError('postcode')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('postcode'); 
                                            }
                              ?>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>State<span class="required">*</span></h5>
                            <div class="controls">
                              <input type="text" class="form-control" name="state" value="<?php echo set_value('state') ?>" id="" pattern=".*\S+.*" data-validation-regex-regex="([\a-zA-Z ]+)" placeholder="Enter State" required data-validation-required-message="This field is required" data-validation-regex-message="valid inputs are a-z, A-Z">
                              <?php if($validation->getError('state')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('state'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>House no<span class="required">*</span></h5>
                            <div class="controls">
                              <input type="text" class="form-control" name="house_no" value="<?php echo set_value('house_no') ?>" id="" data-validation-regex-regex="([\0-9]+)" pattern=".*\S+.*" placeholder="Enter House no." required data-validation-required-message="This field is required" data-validation-regex-message="valid inputs are 0-9">
                              <?php if($validation->getError('house_no')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('house_no'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <h5>Country<span class="required">*</span></h5>
                            <div class="controls">
                              <input type="text" class="form-control" name="country" value="<?php echo set_value('country') ?>" id="" pattern=".*\S+.*" data-validation-regex-regex="([\a-zA-Z ]+)" placeholder="Enter Country" required data-validation-required-message="This field is required" data-validation-regex-message="valid inputs are a-z, A-Z">
                              <?php if($validation->getError('country')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('country'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Comapny Name<span class="required">*</span></h5>
                            <div class="controls">
                              <input type="text" class="form-control" name="company_name"  value="<?php echo set_value('company_name') ?>"id="" data-validation-regex-regex="([\a-zA-Z ]+)"  placeholder="Enter Company Name" required data-validation-required-message="This field is required" data-validation-regex-message="valid inputs are a-z, A-Z">
                              <?php if($validation->getError('company_name')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('company_name'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Gender<span class="required">*</span></h5>
                              <select class="form-control" name="gender" required>
                                <option  disabled="" value="">Select Gender</option>
                                  <option value="0" <?php echo set_value('gender')== '0'?"Selected" : "";?>>Male</option>
                                  <option value="1"  <?php echo set_value('gender')== '1'?"Selected" : "";?>>Female</option>
                                </select>
                              <?php if($validation->getError('gender')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('gender'); 
                                            }
                              ?>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Membership<span class="required">*</span></h5>
                            <div class="controls">
                              <div class="custom-control custom-radio membership">
                                <input type="radio"  class="membership" name="membership" value="0" <?php echo set_value('membership')== '0'?"checked" : "";?> >
                                <label for="Free">Free</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input type="radio"  class="membership" name="membership" value="1" <?php echo set_value('membership')== '1'?"checked" : "";?> >
                                <label for="Professional">Professional</label>
                              </div>
                              <?php if($validation->getError('membership')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('membership'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row feeDiv"  >
                        <div class="col-md-6">
                          <div class="form-group">
                            <h5>Paid Fee<span class="required">*</span></h5>
                            <input type="number" class="form-control fee_paid" name="paid_fee"  value="<?php echo set_value('paid_fee') ?>"id="" min="0">
                              <?php if($validation->getError('paid_fee')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('paid_fee'); 
                                            }
                              ?>
                          </div>
                        </div>
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <h5>Currency<span class="required">*</span></h5>
                            <div class="controls">
                            <select class="form-control currency" name="currency">
                                <option  disabled="" value="">Select Gender</option>
                                  <option value="USD"  <?php echo set_value('currency')== 'USD'?"Selected" : "";?>>USD</option>
                                  <option value="GBP"  <?php echo set_value('currency')== 'GBP'?"Selected" : "";?>>GBP</option>
                                  <option value="EUR"  <?php echo set_value('currency')== 'EUR'?"Selected" : "";?>>EUR</option>
                                  <option value="CAD"  <?php echo set_value('currency')== 'CAD'?"Selected" : "";?>>CAD</option>
                                  <option value="AUD"  <?php echo set_value('currency')== 'AUD'?"Selected" : "";?>>AUD</option>
                                  <option value="NZD"  <?php echo set_value('currency')== 'NZD'?"Selected" : "";?>>NZD</option>
                                </select>
                              <?php if($validation->getError('currency')) {?>
                                            <span style="color:red" class="val_error_code">
                                            <?= $error = $validation->getError('currency'); 
                                            }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <h5>Profile Image (Only jpg, jpeg, png, gif images are allowed)</h5>
                              <div class="controls">
                                <input type="file" class="form-control" id="profile_image" name="profileImage" required />
                                <span class="text-danger image-error"></span>
                              </div>
                            </div>
                          </div>
                      
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <h5>Logo (Only jpg, jpeg, png, gif images are allowed)</h5>
                              <div class="controls">
                                <input type="file" class="form-control" id="logo" name="logo" required />
                                <span class="text-danger image-error1"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="form-actions right">
                        <button type="reset" name="reset_form" id="reset_image" value="reset" class="btn btn-warning">
                        <i class="ft-refresh-ccw"></i> Reset
                        </button>
                        <button type="submit" name="submit" id="create_instructor" value="submit" class="btn btn-primary submit">
                        <i class="la la-check-square-o"></i> Create
                        </button>
                        <button type="button" onclick="goBack()" name="reset_form" value="reset" class="btn btn-danger">
                        <i class="ft-x"></i> Cancel
                        </button>
                      </div>
                    </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?php include(dirname(dirname(__FILE__))."/includes/footer.php"); ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/vendors/js/pickers/daterange/cdn_daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/js/scripts/forms/validation/form-validation.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/public/app-assets/js/autocomplete.js" type="text/javascript"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtUZEucyyJ-ceAAzcu63KRbem-Zi-W7ZA&libraries=places&callback=initAutocomplete" async defer></script>
<script type="text/javascript">
$(document).ready(function () {
  $('.feeDiv').hide();
  $(".membership").change(function(){
    var membership=$(this).val();
    if(membership==1)
    {
     $('.feeDiv').show();
     $('.fee_paid').attr("required",true)
     $('.currency').attr("required",true)
    }   
  });



  // check on image extension.
  $("#profile_image").bind('change', function()
  {
    var file = $("#profile_image").val();    //alert(file);
    var ext = file.split(".");
    ext = ext[ext.length-1].toLowerCase();      
    var arrayExtensions = ["jpg" , "jpeg", "png", "gif"];

    if (arrayExtensions.lastIndexOf(ext) == -1) {
      $("#profile_image").val("");
      $('#profile_image').closest('.form-group').addClass('error');
      $('#profile_image').closest('.form-group').removeClass('validate');
      $("#profile_image").attr("aria-invalid", "true");
      $(".image-error").html('<ul><li>This Extension type is not Allowed here.Please Choose "jpg" , "jpeg", "png", "gif".</li></ul>');
    }else{
      $(".image-error").html('');
    }
  });
  $("#logo").bind('change', function()
  {
    var file = $("#logo").val();    //alert(file);
    var ext = file.split(".");
    ext = ext[ext.length-1].toLowerCase();      
    var arrayExtensions = ["jpg" , "jpeg", "png", "gif"];

    if (arrayExtensions.lastIndexOf(ext) == -1) {
      $("#logo").val("");
      $('#logo').closest('.form-group').addClass('error');
      $('#logo').closest('.form-group').removeClass('validate');
      $("#logo").attr("aria-invalid", "true");
      $(".image-error1").html('<ul><li>This Extension type is not Allowed here.Please Choose "jpg" , "jpeg", "png", "gif".</li></ul>');
    }else{
      $(".image-error1").html('');
    }
  });
});
$(document).ready(function() {
        window.setTimeout("fadeMyDiv();", 1000); //call fade in 3 seconds
      }
      )

      function fadeMyDiv() {
        $("#myDiv").slideUp('slow');
      }
</script>
<script type="text/javascript">
$(document).ready(function()
{
  $('.singledate').daterangepicker(
  {
    singleDatePicker: true,
    showDropdowns: true,
    maxDate: new Date()
  });



});
</script>
<script type="text/javascript">
$("#profile_image").change(function(){
  readURL(this);
});
$("#reset_image").click(function(){
  $('#newImage').attr('src', '');
});
$("#dob").change(function(){
      var dob = $(this).val();
      var now = new Date();
      var past = new Date(dob);
      var nowYear = now.getFullYear();
      var pastYear = past.getFullYear();
      var age = nowYear - pastYear;
      if(age < '18'){
        $('.age-error').html("Age must be greater than or equal to 18.")
        $('.submit').attr('disabled',true);
      }else{
        $('.age-error').html("");
        $(".age").val(age);
        $('.submit').attr('disabled',false);

      }
      
      
    });
</script>
</body>
</html>