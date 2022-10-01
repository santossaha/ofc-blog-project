
@extends('layouts.app')
@section('content')
<style type="text/css">
    
    /*Variables*/
    body{
        /* font-family: $font */
        color: #f5f6fa;
    }
    .background{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#0C0E10, #446182);
    }
    .background    .ground {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 25vh;
            background: #0C0E10;
            height: 0vh;
    }
    .container{
        position: relative;
        margin: 0 auto;
        width: 85%;
        height: 70vh;
        padding-bottom: 25vh;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
            flex-direction: column;
            padding-bottom: 0vh;
    }
    .left-section, .right-section{
        position: relative;
    }
    .left-section{
        width: 40%;
        width: 100%;
        height: 40%;
        position: absolute;
        top: 0;
    }
    .inner-content{
        position: relative;
        padding: 1rem 0;
    }
    .heading{
        text-align: center;
        font-size: 9em;
        line-height: 1.3em;
        margin: 2rem 0 0.5rem 0;
        padding: 0;
        text-shadow: 0 0 1rem #fefefe;
            font-size: 7em;
            line-height: 1.15;
            margin: 0;
    }
    .subheading{
        text-align: center; 
        max-width: 480px;
        font-size: 1.5em;
        line-height: 1.15em;
        padding: 0 1rem; 
        margin: 0 auto;
        font-size: 1.3em;
        line-height: 1.15;
        max-width: 100%;
    }
    .right-section
    {
        width: 50%;
        width: 100%;
        height: 60%;
        position: absolute;
        bottom: 0;
    }
    .svgimg{
        position: absolute;
        bottom: 0;
        padding-top: 10vh;
        padding-left: 1vh;
        max-width: 100%;
        max-height: 100%;
    }
    
    /* CSS */
    .button {
      align-items: center;
      appearance: none;
      background-color: #FCFCFD;
      border-radius: 4px;
      border-width: 0;
      box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
      box-sizing: border-box;
      color: #36395A;
      cursor: pointer;
      display: inline-flex;
      font-family: "JetBrains Mono",monospace;
      height: 48px;
      justify-content: center;
      line-height: 1;
      list-style: none;
      overflow: hidden;
      padding-left: 16px;
      padding-right: 16px;
      position: relative;
      text-align: left;
      text-decoration: none;
      transition: box-shadow .15s,transform .15s;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      white-space: nowrap;
      will-change: box-shadow,transform;
      font-size: 18px;
    }
    
    .button:focus {
      box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
    }
    
    .button:hover {
      box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
      transform: translateY(-2px);
    }
    
    .button:active {
      box-shadow: #D6D6E7 0 3px 7px inset;
      transform: translateY(2px);
    }
</style>
    
<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
        <div class="kt-login__container">
            <div class="kt-login__logo">
                <a href="#">
                    <h1> <i class="flaticon2-user"></i></h1>
                </a>
            </div>
            <div class="kt-login__signin">
                <div class="container">
                    <div class="left-section">
                        <div class="inner-content">
                            <h1 class="heading">404</h1>
                            <p class="subheading">Page Not Found.</p>

                        </div>
                    </div>
                    <div class="right-section">
                        <div class="inner-content" style="text-align:center;">
                            <button class="button" role="button">Back</button>
                            <!-- <button type="submit" class="btn btn-brand btn-pill kt-login__btn-primary">Request</button>
                            <button id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection