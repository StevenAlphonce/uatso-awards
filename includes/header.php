<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UAUTSo | Awards</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    .mt20 {
      margin-top: 20px;
    }

    .title {
      font-size: 50px;
    }

    #candidate_list {
      margin-top: 20px;
    }

    #candidate_list ul {
      list-style-type: none;
    }

    #candidate_list ul li {
      margin: 0 30px 30px 0;
      vertical-align: top
    }

    .clist {
      margin-left: 20px;
    }

    .cname {
      font-size: 25px;
    }

    .votelist {
      font-size: 17px;
    }


    .bg-primary {
      background-color: #1ca5e8 !important;
    }

    .bg-second {
      background-color: #103fab !important;
    }

    .text-primary {
      color: #1ca5e8;
    }

    /* ===================================== Basic CSS ==================================== */
    * {
      margin: 0px;
      padding: 0px;
      list-style: none;
    }

    img {
      max-width: 100%;
    }

    a {
      text-decoration: none;
      outline: none;
      color: #444;
    }

    a:hover {
      color: #444;
    }

    ul {
      margin-bottom: 0;
      padding-left: 0;
    }

    a:hover,
    a:focus,
    input,
    textarea {
      text-decoration: none;
      outline: none;
    }

    .center {
      text-align: center;
    }

    .left {
      text-align: left;
    }

    .right {
      text-align: right;
    }

    .cp {
      cursor: pointer;
    }

    html,
    body {
      height: 100%;
      font-family: "Poppins";
    }

    p {
      margin-bottom: 0px;
      width: 100%;
    }

    .no-padding {
      padding: 0px;
    }

    .no-margin {
      margin: 0px;
    }

    .hid {
      display: none;
    }

    .top-mar {
      margin-top: 15px;
    }

    .h-100 {
      height: 100%;
    }

    ::placeholder {
      color: #747f8a !important;
      font-size: 13px;
      opacity: 0.5 !important;
    }

    .container-fluid {
      padding: 0px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #545454;
    }

    body {
      background-color: #f5f8fc !important;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-rendering: optimizeLegibility;
      color: #6A6A6A;
      overflow-x: hidden;
    }

    .section-title {
      padding: 30px;
      margin: 0px;
      margin-bottom: 20px;
    }

    @media screen and (max-width: 767px) {
      .section-title {
        padding: 5px;
      }
    }

    .section-title h2 {
      width: 100%;
      text-align: center;
      font-weight: 600;
      margin-bottom: 0px;
    }

    .section-title p {
      max-width: 850px;
      text-align: center;
      float: none;
      margin: auto;
      font-size: 0.9rem;
      margin-top: 6px;
    }

    .section-title span {
      float: right;
      font-style: italic;
    }

    .inner-title {
      padding: 20px;
      padding-left: 0px;
      margin: 0px;
      margin-bottom: 10px;
      padding-bottom: 0px;
      border-bottom: 1px solid #ccccccc4;
      display: block;
      padding-right: 0px;
    }

    .inner-title h2 {
      width: 100%;
      text-align: center;
      font-size: 1rem;
      font-weight: 600;
      text-align: left;
      border-bottom: 1px solid #863dd9;
      padding-bottom: 10px;
      margin-bottom: 0px;
      width: 300px;
    }

    .inner-title p {
      width: 100%;
      text-align: center;
    }

    .inner-title .btn {
      float: right;
      margin-top: -38px;
      font-weight: 600;
      font-size: 0.8rem;
    }

    .page-nav {
      background-size: 100%;
      padding: 68px;
      text-align: center;
      background-color: #eaeaea;
    }

    .page-nav ul {
      float: none;
      margin: auto;
    }

    @media screen and (max-width: 992px) {
      .page-nav {
        background-size: auto;
      }
    }

    @media screen and (max-width: 767px) {
      .page-nav {
        padding-top: 200px;
        padding-bottom: 40px;
      }
    }

    @media screen and (max-width: 356px) {
      .page-nav {
        padding-top: 200px;
        padding-bottom: 40px;
      }
    }

    .page-nav h2 {
      font-size: 28px;
      width: 100%;
      font-weight: 700;
      color: #444;
    }

    @media screen and (max-width: 600px) {
      .page-nav h2 {
        font-size: 26px;
      }
    }

    .page-nav ul li {
      float: left;
      margin-right: 10px;
      margin-top: 10px;
      font-size: 16px;
      font-size: 0.93rem;
      font-weight: 600;
      color: #444;
    }

    .page-nav ul li i {
      width: 30px;
      text-align: center;
      color: #444;
    }

    .page-nav ul li a {
      color: #444;
      font-size: 0.93rem;
      font-weight: 600;
    }

    .btn-success {
      background-color: #51be78;
      border-color: #51be78;
    }

    .btn-success:hover {
      background-color: #51be78 !important;
      border-color: #51be78 !important;
    }

    .btn-success:active {
      background-color: #51be78 !important;
      border-color: #51be78 !important;
    }

    .btn-success:focus {
      background-color: #51be78 !important;
      border-color: #51be78 !important;
      box-shadow: none !important;
    }

    .btn-primary {
      background-color: #1ca5e8;
      border-color: #1ca5e8;
    }

    .btn-primary:hover {
      background-color: #1ca5e8 !important;
      border-color: #1ca5e8 !important;
    }

    .btn-primary:active {
      background-color: #1ca5e8 !important;
      border-color: #1ca5e8 !important;
    }

    .btn-primary:focus {
      background-color: #1ca5e8 !important;
      border-color: #1ca5e8 !important;
      box-shadow: none !important;
    }

    .btn-outline-primary {
      border-color: #1ca5e8;
      color: #1ca5e8;
    }

    .btn-outline-primary:hover {
      background-color: #1ca5e8 !important;
      border-color: #1ca5e8 !important;
    }

    .btn-outline-primary:active {
      background-color: #1ca5e8 !important;
      border-color: #1ca5e8 !important;
    }

    .btn-outline-primary:focus {
      background-color: #1ca5e8 !important;
      border-color: #1ca5e8 !important;
      box-shadow: none !important;
    }

    .form-control:focus {
      box-shadow: none !important;
      border: 1px solid #CCC;
    }

    .btn-light {
      background-color: #FFF;
      color: #3F3F3F;
    }

    .collapse.show {
      display: block !important;
    }

    .form-control:focus {
      box-shadow: none;
      border: 1px solid #CCC;
    }

    .form-control {
      background-color: #F8F8F8;
      margin-bottom: 20px;
    }

    .form-control:focus {
      background-color: #FFF;
      border-color: #CCC;
    }

    .container {
      max-width: 1170px;
    }

    @media screen and (max-width: 575px) {
      .container {
        padding: 10px 15px;
      }
    }

    /* ===================================== Basic CSS ==================================== */
    .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }

    .fw-md {
      font-weight: 600;
    }

    .fw-sm {
      font-weight: 500;
    }

    .big-padding {
      padding: 50px;
    }

    @media screen and (max-width: 940px) {
      .big-padding {
        padding: 30px 10px;
      }
    }

    .bggray {
      background-color: #F7F5F4 !important;
    }

    .shadow-md {
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .shadow-xs {
      box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.13);
    }

    .truncate-2 {
      display: -webkit-box !important;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      height: 42px;
      overflow: hidden;
      line-height: 21px;
    }

    .truncate-4 {
      display: -webkit-box !important;
      -webkit-line-clamp: 4;
      -webkit-box-orient: vertical;
      height: 82px;
      overflow: hidden;
      line-height: 21px;
    }

    .scroll-to-fixed-fixed {
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    .truncate-6 {
      display: -webkit-box !important;
      -webkit-line-clamp: 7;
      -webkit-box-orient: vertical;
      height: 130px;
      overflow: hidden;
      line-height: 21px;
    }

    .rtable {
      max-width: 500px;
      float: none;
      margin: auto;
    }

    .rtable tr td {
      padding: 5px;
    }

    .fs-7 {
      font-size: 0.95rem;
    }

    .fs-8 {
      font-size: 0.9rem;
    }

    .fs-11 {
      font-size: 4rem;
    }

    .sticky {
      position: sticky;
    }

    .fw-bold {
      font-weight: 600 !important;
    }

    .bg-gray {
      background: rgba(217, 217, 217, 0.25);
    }

    .btn-xs {
      padding: 2px 8px;
      font-size: 0.875rem;
      border-radius: 0.2rem;
    }

    .btn-xs i {
      font-size: 16px;
    }

    @media screen and (max-width: 767px) {
      .bordernosm {
        border: 0px !important;
      }
    }

    .h400 {
      height: 400px;
      overflow: auto;
    }

    .sticky-top-90 {
      position: -webkit-sticky;
      position: sticky;
      top: 85px;
      z-index: 1020;
    }

    .fs-9 {
      font-size: 0.79rem;
    }

    .fs-55 {
      font-size: 1.1rem;
    }

    .mt-25 {
      margin-top: 11px;
    }

    .width-fit {
      width: fit-content;
    }

    .text-justify {
      text-align: justify;
    }

    .max-230 {
      max-width: 230px;
    }

    .max-230 {
      max-width: 260px;
    }

    .copy {
      padding: 20px;
      background-color: #7e7e7e;
      color: #FFF;
    }

    .copy a {
      color: #FFF;
    }

    .copy span {
      float: right;
    }

    .copy span i {
      margin-right: 20px;
    }

    @media screen and (max-width: 767px) {
      .mul {
        width: 100%;
      }

      .dfr {
        font-size: 2.5rem;
      }
    }

    .votcard img {
      width: 140px;
    }

    .scroll-to-fixed-fixed {
      background-color: #FFF;
    }

    .molist {
      padding-left: 20px;
    }

    .molist li {
      padding: 5px;
      font-size: 0.9rem;
      list-style: circle;
    }

    .max-130 {
      max-width: 130px;
    }
  </style>
</head>