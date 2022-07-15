<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('/public/app-assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/app-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/public/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/public/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}" type="text/javascript"></script>
<script src="{{ asset('/public/app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/public/app-assets/js/core/app-menu.js" type="text/javascript') }}"></script>
<script src="{{ asset('/public/app-assets/js/core/app.js" type="text/javascript') }}"></script>
<script src="{{ asset('/public/app-assets/js/scripts/forms/form-login-register.js') }}" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
      $(document).ready(function() {
        window.setTimeout("fadeMyDiv();", 1500); //call fade in 3 seconds
      }
      )

      function fadeMyDiv() {
        $("#myDiv").fadeOut('slow');
      }
</script>
</body>
</html>