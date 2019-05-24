<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-GOLD</title>
  <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
      background-color: #fff;
      margin: 40px;
      font: 13px/20px normal Helvetica, Arial, sans-serif;
      color: #4F5155;
    }

    a {
      color: #003399;
      background-color: transparent;
      font-weight: normal;
    }

    h1 {
      color: #444;
      background-color: transparent;
      border-bottom: 1px solid #D0D0D0;
      font-size: 19px;
      font-weight: normal;
      margin: 0 0 14px 0;
      padding: 14px 15px 10px 15px;
    }

    code {
      font-family: Consolas, Monaco, Courier New, Courier, monospace;
      font-size: 12px;
      background-color: #f9f9f9;
      border: 1px solid #D0D0D0;
      color: #002166;
      display: block;
      margin: 14px 0 14px 0;
      padding: 12px 10px 12px 10px;
    }

    #body {
      margin: 0 15px 0 15px;
    }

    p.footer {
      text-align: center;
      font-size: 11px;
      border-top: 1px solid #D0D0D0;
      line-height: 32px;
      padding: 0 10px 0 10px;
      margin: 20px 0 0 0;
    }

    #container {
      margin: 10px;
      border: 1px solid #D0D0D0;
      box-shadow: 0 0 8px #D0D0D0;
    }
    h1.gal{
      border-bottom: 0px solid #D0D0D0;
      font-size: 20px;
      font-weight: normal;
    }
    h1.home{
      border-bottom: 0px solid #D0D0D0;
      font-size: 20px;
      font-weight: normal;
    }
    h1.bio{
      border-bottom: 0px solid #D0D0D0;
      font-size: 20px;
      font-weight: normal;
    }
    td{
      font-family: tahoma;
      font-size: 18px;
    }
  </style>
</head>
<body>

  <div id="container">
    <h1>E GOLD</h1>
    <div id="body">
      <a href="<?php echo base_url('Kategori')?>">Data Kategori Emas</a>
      <a href="<?php echo base_url('Emas')?>">Data Emas</a>
      <a href="<?php echo base_url('Pelanggan')?>">Data Pelanggan</a>
      <a href="<?php echo base_url('Penjualan')?>">Transaksi Penjualan</a>
      <div style="text-align: center;">
        <h1 class="home">Home</h1>
        <img src="<?php echo base_url('assets/images/boku1.jpg'); ?>" width="100" height="100">
        
      </div>
    </div>
    <p class="footer">All Right Reserved. &copy Kelompok Satu</p>
    <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>
  </body>
  </html>
