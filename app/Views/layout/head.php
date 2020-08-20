<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  <title><?= $title ?></title>
  <style>
  body {
    margin-right: 0;
  }

  .u-caret {
    color: #005596;
  }

  #hiddenModal {
    display: none;
  }

  .x-btn {
    margin-top: -9%;
    margin-bottom: -7%;
    margin-right: auto;
    margin-left: auto;
    font-weight: bold;
    color: white;
    border: 2px solid #ffffff;
    font-family: Neris-SemiBold_0, Louis George Cafe_0;
    letter-spacing: 0.1em;
  }

  .x-btn:hover {
    -webkit-filter: brightness(1.3);
    filter: brightness(1.3);
  }

  .x-btn {
    background-color: #ff0000;
    background-image: url(/Content/images/homepage/button-2.png);
    background-position: center;
  }

  .x-btn:focus {
    background-color: #ff0000;
  }

  #disclaimer {
    width: 100%;
    position: relative;

    margin: auto;
    text-align: center;
    background-color: rgba(0, 85, 150, 0.9);
    color: white;
  }

  .u-subtitle p:after {
    position: absolute;
    right: 90px;
    top: 22px;
  }

  .u-subtitle p:before {
    position: absolute;
    left: 90px;
    top: 22px;
  }

  .u-subtitle p:after,
  .u-subtitle p:before {
    content: "";
    width: 30px;
    height: 2px;
    background-color: #ff0000;
    bottom: 6px;
  }

  .u-container-layout-box {
    background-image: url(/Content/images/homepage/bgbox_new.png);
    background-size: cover;
    background-repeat: no-repeat;
  }

  /*.fa-calendar {
            float: right;
            margin-right: 77px;
            margin-top: -31px;
            position: relative;
            z-index: 2;
            color: #005596;
        }*/

  .u-section-1 .u-btn-1 {
    font-family: Neris-SemiBold_0, Louis George Cafe_0;
    letter-spacing: 0.1em;
    font-size: 13px;
  }

  #success {
    background: #03a679;
    color: #f0f0f0;
  }

  #failure {
    background: #ff3939;
    color: #f0f0f0;
  }

  .notify {
    position: absolute;
    top: -155px;
    width: 100%;
    height: 0;
    box-sizing: border-box;
    color: white;
    text-align: center;
    background: rgba(255, 32, 28, .8);
    overflow: hidden;
    box-sizing: border-box;
    transition: height .2s;
    border-radius: 60px
  }

  #notifyType {
    display: block;
    margin-top: 15px;
  }

  .active {
    height: 50px;
  }



  .failure:before {
    color: #ffe578;
  }

  #syaratLink {
    color: #ffe578;
  }

  .pesanbtn {
    background-color: #d81f27 !important;
  }

  .datepicker table tr td,
  .datepicker table tr th {
    text-align: center;
    width: 30px;
    height: 30px;
    border-radius: 4px;
    border: none;
    color: #1d84b0;
    font-weight: bold;
  }

  .datepicker table tr td.disabled,
  .datepicker table tr td.disabled:hover {
    background: none;
    color: #777777;
    cursor: default;
    font-weight: 100;
  }

  .datepicker table tr td.today.disabled,
  .datepicker table tr td.today.disabled:active {
    background: #ffffff;
    color: #777777;
  }

  .datepicker table tr td.today.disabled:hover {
    background: #eeeeee;
    cursor: pointer;
  }

  #disc {
    display: inline-flex;
    justify-content: center;
    margin: auto;
    position: relative;
  }

  #tgl {
    color: #005596;
  }
  </style>

</head>

<body>