<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/app-assets/css/login_style.css')}}">
    <!-- font awesome links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/public/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/app-assets/vendors/css/forms/icheck/custom.css') }}">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/app-assets/css/core/menu/menu-types/vertical-compact-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/app-assets/css/core/colors/palette-gradient.css') }}">
  </head>
  <style>
  div#myDiv {
    position: absolute;
    top: 20px;
    box-shadow: 5px 5px;
    width: 26%;
    right: 9px;
    text-align: center;
    font-size: 17px;
    font-weight: bold;
}
  </style>
  <body>