<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Nifty - Responsive admin template.</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{{config('wi.dashboard.theme_path')}}/js/jquery-2.2.1.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{config('wi.dashboard.theme_path')}}/js/bootstrap.min.js"></script>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{config('wi.dashboard.theme_path')}}/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{config('wi.dashboard.theme_path')}}/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMO ] -->
    <link href="{{config('wi.dashboard.theme_path')}}/css/demo/nifty-demo-icons.min.css" rel="stylesheet">

    <!--Themify Icons [ DEMO ] -->
    <link href="{{config('wi.dashboard.theme_path')}}/vendor/themify-icons/themify-icons.css" rel="stylesheet">

    <!--Ion Icons [ DEMO ] -->
    <link href="{{config('wi.dashboard.theme_path')}}/vendor//ionicons/css/ionicons.css" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{config('wi.dashboard.theme_path')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">



    <!--Animate.css [ OPTIONAL ]-->
    <link href="{{config('wi.dashboard.theme_path')}}/vendor/animate-css/animate.min.css" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]
        <link href="{{config('wi.dashboard.theme_path')}}/vendor/morris-js/morris.min.css" rel="stylesheet">
    -->

    <!--Switchery [ OPTIONAL ]
        <link href="{{config('wi.dashboard.theme_path')}}/vendor/switchery/switchery.min.css" rel="stylesheet">
    -->

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{config('wi.dashboard.theme_path')}}/vendor/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">


    <!--Demo script [ DEMONSTRATION ]-->
    <link href="{{config('wi.dashboard.theme_path')}}/css/demo/nifty-demo.min.css" rel="stylesheet">

<!--
    <link href="{{config('wi.dashboard.theme_path')}}/vendor/fooTable/css/footable.core.css" rel="stylesheet">
-->


    @yield('css.head')


<!--TODO: css-->
<style>
    .form-control{
        height:auto;
    }
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_asc:after{
        opacity: 0.8;
        color: #5fa2dd;
    }

    table.dataTable .label-online {
        background-color: #91c957;
    }

    table.dataTable .label-pending_review {
        background-color: #f76549;
    }
    table.dataTable .label-concept {
        background-color: #e3e8ee;
        color: #5F5454 !important;

    }

    .bootstrap-select .btn:focus {
        outline: 0!important;
    }


    /*NESTED TAB*/

    .nav-tabs-nested > li {
        float: left;
        margin-bottom: -1px;
    }
    .nav > li {
        display: block;
        position: relative;
    }

    .nav-tabs-nested {
        border-bottom: 1px solid #ddd;
    }
    .nav-tabs-nested > li {
        float: left;
        margin-bottom: -1px;
        uit-background:#ebeef0;
    }
    .nav-tabs-nested > li > a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
    }
    .nav-tabs-nested > li > a:hover {
        border-color: #eee #eee #ddd;
    }
    .nav-tabs-nested > li.active > a,
    .nav-tabs-nested > li.active > a:hover,
    .nav-tabs-nested > li.active > a:focus {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    }



    .tab-base-nestd {
        margin-bottom: 35px;
        margin-bottom: 0px;
    }
    .tab-stacked-left .tab-pane > .panelx,
    .tab-base-nestd .tab-content {
        background-color: #ffffff;
        box-shadow: 0 2px 0 rgba(0, 0, 0, 0.05);
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px;
        padding: 15px;



        box-shadow: none;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        padding: 0px;
    }
    .tab-stacked-left .tab-pane > .panelx{
        margin-bottom: 0px;
    }
    .tab-base-nestd .tab-content .tab-footer {
        background-color: #f4f5f7;
        color: #5f5f5f;
        border-color: #eef0f2;
        position: relative;
        margin: 0 -15px -15px -15px;
        padding: 10px 15px;
    }
    .tab-base-nestd .nav-tabs-nested {
        uit-border: 0;
    }
    .tab-base-nestd .nav-tabs-nested > li:not(.active) > a {
        background-color: rgba(255, 255, 255, 0.35);
        opacity: .7;
        -webkit-transition: opacity, 0.3s;
        transition: opacity, 0.3s;
        xborder:1px solid red !important;
    }
    .tab-base-nestd .nav-tabs-nested > li:not(.active) > a:hover {
        opacity: .9;
        background-color: rgba(255, 255, 255, 0.55);
        border-color: #54abd9;
        border-bottom-color: transparent;
        -webkit-transition: opacity, 0.3s;
        transition: opacity, 0.3s;
    }
    .tab-base-nestd .nav-tabs-nested > .active > a,
    .tab-base-nestd .nav-tabs-nested > .active a:hover,
    .tab-base-nestd .nav-tabs-nested > .active > a:focus {
        uit-border-color: transparent;
    }
    .tab-base-nestd .nav-tabs-nested.tabs-right {
        text-align: right;
    }
    .tab-base-nestd .nav-tabs-nested.tabs-right > li {
        float: none;
        display: inline-block;
        margin-right: -2px;
    }
    .tab-footer:after {
        content: '';
        display: table;
        clear: both;
    }
    .nav-tabs-nested li a {
        border-radius: 0 0 0 0;
    }
    .nav-tabs-nested.tab-right {
        text-align: right;
    }
    .nav-tabs-nested.tab-right > li {
        display: inline-block;
        text-align: left;
        float: none;
    }
    .nav-tabs-nested.tab-right > li > a {
        margin-right: 0;
    }
    .nav-tabs-nested .label,
    .nav-tabs-nested .badge {
        margin-left: 4px;
    }




    .xtab-stacked-left .nav-tabs,
    .xtab-stacked-right .nav-tabs,
    .tab-stacked-left .tab-base-nestd .tab-content,
    .xtab-stacked-right .tab-base-nestd .tab-content {
        display: block;
        xvertical-align: top;
    }

    .nav-tabs-nested{
        margin-bottom:1em;
    }
    .tab-stacked-left > .nav-tabs{
        padding-top:6em;
    }

    .banner-pane{
        background: #ebeef0;
        padding: 3px;
    }

    .tab-base-nestd .container{
        width:auto;
    }




    .nifty-ready .effect #navbar,
    .nifty-ready .effect #content-container,
    .nifty-ready .effect #mainnav-container,
    .nifty-ready .effect #aside-container,
    .nifty-ready .effect #footer,
    .nifty-ready .effect .navbar-brand,
    .nifty-ready .effect .navbar-content,
    .nifty-ready .effect .navbar-header::before,
    .xxxnifty-ready .effect #appxx{
        transition-property: width,padding,left,right;
        transition-duration: .35s;
    }

    #appxx{
        xwidth: 100%;
    }

    @media (min-width: 768px){
        #container.aside-in #content-container,
        #container.aside-in:not(.mainnav-in) #footer {
            padding-right: 320px;
        }


        #container #aside-container {
            width:320px;
            right: -320px;
        }


        #container.aside-in #aside-container {
            left: auto;
            right: 0;
        }

    }



    .form-checkbox.form-icon.form-silver:after, .form-radio.form-icon.form-silver:after {
        color: silver;
    }

    .v-cloak,
    [v-cloak] {     visibility: hidden;
    }



</style>
    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]
    <link href="{{config('wi.dashboard.theme_path')}}/vendor/pace/pace.min.css" rel="stylesheet">
    <script src="{{config('wi.dashboard.theme_path')}}/vendor/pace/pace.min.js"></script>
-->


    <!--

    REQUIRED
    You must include this in your project.

    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.

    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.

    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.

    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    -->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>

<div id="container" class="effect mainnav-lg aside-in aside-uit-fixed aside-uit-bright">

    <!--NAVBAR-->
    @include('dashboard::partials.header')
    <!--END NAVBAR-->

    <div class="boxed">

        <!--MAIN NAVIGATION-->
        @include('dashboard::partials.main-nav-chart')
        <!--END MAIN NAVIGATION-->



        <!--CONTENT CONTAINER-->
           @yield('content')

        <!--END CONTENT CONTAINER-->








    </div>



    <!-- FOOTER -->
        @include('dashboard::partials.footer')
    <!-- END FOOTER -->


    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->




<!-- SETTINGS - DEMO PURPOSE ONLY -->
<!--===================================================-->
<div id="demo-set" class="demo-set">
    <div class="demo-set-body bg-light">
        <div id="demo-set-alert"></div>
        <div class="nano" style="height:520px">
            <div class="nano-content">
                <div class="panel mar-no">
                    <!--Panel heading-->
                    <div class="panel-heading bg-dark">
                        <div class="panel-control pull-left">
                            <ul class="nav nav-tabs text-lg">
                                <li class="active"><a data-toggle="tab" href="#demo-settings-box-1" aria-expanded="true">Basic Layout</a></li>
                                <li class=""><a data-toggle="tab" href="#demo-settings-box-2" aria-expanded="false">Sidebars</a></li>
                                <li class=""><a data-toggle="tab" href="#demo-settings-box-3" aria-expanded="false">Header &amp; Footer</a></li>
                                <li class=""><a data-toggle="tab" href="#demo-settings-box-4" aria-expanded="false">Color Schemes</a></li>
                            </ul>
                        </div>
                        <h3 class="panel-title">&nbsp;</h3>
                    </div>

                    <!--Panel body-->
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="demo-settings-box-1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <img src="{{config('wi.dashboard.theme_path')}}/img/settings/animation.png">
                                    </div>
                                    <div class="col-xs-8">
                                        <table class="table mar-no">
                                            <thead>
                                            <tr>
                                                <th colspan="2"><p class="text-lg text-semibold text-primary">Animations</p></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><p>Enable Animations</p></td>
                                                <td class="text-right">
                                                    <div id="demo-anim">
                                                        <label class="form-checkbox form-icon active">
                                                            <input type="checkbox" checked="">
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Transition effects</p>
                                                </td>
                                                <td class="text-right">
                                                    <select id="demo-ease">
                                                        <option value="effect" selected>ease (Default)</option>
                                                        <option value="easeInQuart">easeInQuart</option>
                                                        <option value="easeOutQuart">easeOutQuart</option>
                                                        <option value="easeInBack">easeInBack</option>
                                                        <option value="easeOutBack">easeOutBack</option>
                                                        <option value="easeInOutBack">easeInOutBack</option>
                                                        <option value="steps">Steps</option>
                                                        <option value="jumping">Jumping</option>
                                                        <option value="rubber">Rubber</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <img src="{{config('wi.dashboard.theme_path')}}/img/settings/box-layout.png">
                                    </div>
                                    <div class="col-xs-8">
                                        <table class="table mar-no">
                                            <thead>
                                            <tr>
                                                <th colspan="2"><p class="text-lg text-semibold text-primary">Layout</p></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><p>Boxed Layout</p></td>
                                                <td class="text-right">
                                                    <label id="demo-box-lay" class="form-checkbox form-icon active">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="demo-settings-box-2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <img src="{{config('wi.dashboard.theme_path')}}/img/settings/navigation.png">
                                    </div>
                                    <div class="col-xs-8">
                                        <table class="table mar-no">
                                            <thead>
                                            <tr>
                                                <th colspan="2"><p class="text-lg text-semibold text-primary">Navigation</p></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><p>Fixed</p></td>
                                                <td class="text-right">
                                                    <label id="demo-nav-fixed" class="form-checkbox form-icon mar-btm">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p>Collapsed</p></td>
                                                <td class="text-right">
                                                    <label id="demo-nav-coll" class="form-checkbox form-icon mar-btm">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p>Off-Canvas Mode</p></td>
                                                <td class="text-right">
                                                    <select id="demo-nav-offcanvas">
                                                        <option value="none" selected disabled="disabled">-- Select Mode --</option>
                                                        <option value="push">Push</option>
                                                        <option value="slide">Slide in on top</option>
                                                        <option value="reveal">Reveal</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <img src="{{config('wi.dashboard.theme_path')}}/img/settings/aside.png">
                                    </div>
                                    <div class="col-xs-8">
                                        <table class="table mar-no">
                                            <thead>
                                            <tr>
                                                <th colspan="2"><p class="text-lg text-semibold text-primary">Aside</p></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><p>Visible</p></td>
                                                <td class="text-right">
                                                    <label id="demo-asd-vis" class="form-checkbox form-icon">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p>Fixed</p></td>
                                                <td class="text-right">
                                                    <label id="demo-asd-fixed" class="form-checkbox form-icon">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p>Aside on the left side</p></td>
                                                <td class="text-right">
                                                    <label id="demo-asd-align" class="form-checkbox form-icon">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p>Bright Mode</p></td>
                                                <td class="text-right">
                                                    <label id="demo-asd-themes" class="form-checkbox form-icon">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="demo-settings-box-3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <img src="{{config('wi.dashboard.theme_path')}}/img/settings/header_and_footer.png">
                                    </div>
                                    <div class="col-xs-8">
                                        <table class="table mar-no">
                                            <thead>
                                            <tr>
                                                <th colspan="2"><p class="text-lg text-semibold text-primary">Header &amp; Footer</p></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><p>Fixed Header</p></td>
                                                <td class="text-right">
                                                    <label id="demo-navbar-fixed" class="form-checkbox form-icon">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p>Fixed Footer</p></td>
                                                <td class="text-right">
                                                    <label id="demo-footer-fixed" class="form-checkbox form-icon">
                                                        <input type="checkbox">
                                                    </label>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="demo-settings-box-4" class="tab-pane fade">
                                <div id="demo-theme">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <img src="{{config('wi.dashboard.theme_path')}}/img/settings/scheme_a.png">
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="demo-theme-btn">
                                                <a href="#" class="demo-theme demo-a-light add-tooltip" data-theme="theme-light" data-type="a" data-title="(A). Light">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-navy add-tooltip" data-theme="theme-navy" data-type="a" data-title="(A). Navy Blue">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-ocean add-tooltip" data-theme="theme-ocean" data-type="a" data-title="(A). Ocean">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-lime add-tooltip" data-theme="theme-lime" data-type="a" data-title="(A). Lime">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-purple add-tooltip" data-theme="theme-purple" data-type="a" data-title="(A). Purple">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-dust add-tooltip" data-theme="theme-dust" data-type="a" data-title="(A). Dust">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-mint add-tooltip" data-theme="theme-mint" data-type="a" data-title="(A). Mint">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-yellow add-tooltip" data-theme="theme-yellow" data-type="a" data-title="(A). Yellow">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-well-red add-tooltip" data-theme="theme-well-red" data-type="a" data-title="(A). Well Red">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-coffee add-tooltip" data-theme="theme-coffee" data-type="a" data-title="(A). Coffee">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="a" data-title="(A). Prickly pear">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-a-dark add-tooltip" data-theme="theme-dark" data-type="a" data-title="(A). Dark">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <img src="{{config('wi.dashboard.theme_path')}}/img/settings/scheme_b.png">
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="demo-theme-btn">
                                                <a href="#" class="demo-theme demo-b-light add-tooltip" data-theme="theme-light" data-type="b" data-title="(B). Light">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-navy add-tooltip" data-theme="theme-navy" data-type="b" data-title="(B). Navy Blue">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-ocean add-tooltip" data-theme="theme-ocean" data-type="b" data-title="(B). Ocean">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-lime add-tooltip" data-theme="theme-lime" data-type="b" data-title="(B). Lime">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-purple add-tooltip" data-theme="theme-purple" data-type="b" data-title="(B). Purple">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-dust add-tooltip" data-theme="theme-dust" data-type="b" data-title="(B). Dust">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-mint add-tooltip" data-theme="theme-mint" data-type="b" data-title="(B). Mint">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-yellow add-tooltip" data-theme="theme-yellow" data-type="b" data-title="(B). Yellow">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-well-red add-tooltip" data-theme="theme-well-red" data-type="b" data-title="(B). Well red">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-coffee add-tooltip" data-theme="theme-coffee" data-type="b" data-title="(B). Coofee">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="b" data-title="(B). Prickly pear">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-b-dark add-tooltip" data-theme="theme-dark" data-type="b" data-title="(B). Dark">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <img src="{{config('wi.dashboard.theme_path')}}/img/settings/scheme_c.png">
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="demo-theme-btn">
                                                <a href="#" class="demo-theme demo-c-light add-tooltip" data-theme="theme-light" data-type="c" data-title="(C). Light">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-navy add-tooltip" data-theme="theme-navy" data-type="c" data-title="(C). Navy Blue">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-ocean add-tooltip" data-theme="theme-ocean" data-type="c" data-title="(C). Ocean">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-lime add-tooltip" data-theme="theme-lime" data-type="c" data-title="(C). Lime">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-purple add-tooltip" data-theme="theme-purple" data-type="c" data-title="(C). Purple">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-dust add-tooltip" data-theme="theme-dust" data-type="c" data-title="(C). Dust">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-mint add-tooltip" data-theme="theme-mint" data-type="c" data-title="(C). Mint">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-yellow add-tooltip" data-theme="theme-yellow" data-type="c" data-title="(C). Yellow">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-well-red add-tooltip" data-theme="theme-well-red" data-type="c" data-title="(C). Well Red">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-coffee add-tooltip" data-theme="theme-coffee" data-type="c" data-title="(C). Coffee">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="c" data-title="(C). Prickly pear">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                                <a href="#" class="demo-theme demo-c-dark add-tooltip" data-theme="theme-dark" data-type="c" data-title="(C). Dark">
                                                    <div class="demo-theme-brand"></div>
                                                    <div class="demo-theme-head"></div>
                                                    <div class="demo-theme-nav"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pad-top pad-hor bord-top clearfix">
            <div class="pull-right">
                <button id="demo-reset-settings" class="btn btn-primary mar-btm">Reset Settings</button>
            </div>
            <p class="text-lg text-semibold">Theme Options</p>
            <p class="text-muted text-sm">* All settings will be saved automatically.</p>
        </div>
    </div>
    <button id="demo-set-btn" class="btn btn-sm"><i class="fa fa-cog fa-2x"></i></button>
</div>
<!--===================================================-->
<!-- END SETTINGS -->


<!--JAVASCRIPT-->
<!--=================================================-->

<!--Fast Click [ OPTIONAL ]-->
<script src="{{config('wi.dashboard.theme_path')}}/vendor/fast-click/fastclick.min.js"></script>

<!--Nifty Admin [ RECOMMENDED ]-->
<script src="{{config('wi.dashboard.theme_path')}}/js/nifty.min.js"></script>


<!--Switchery [ OPTIONAL ] checkbox-->
<script src="{{config('wi.dashboard.theme_path')}}/vendor/switchery/switchery.min.js"></script>

<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{config('wi.dashboard.theme_path')}}/vendor/bootstrap-select/bootstrap-select.min.js"></script>

<!--Demo script [ DEMONSTRATION ]-->
<script src="{{config('wi.dashboard.theme_path')}}/js/demo/nifty-demo.min.js"></script>


@yield('scripts.footer')


<!--

REQUIRED
You must include this in your project.

RECOMMENDED
This category must be included but you may modify which plugins or components which should be included in your project.

OPTIONAL
Optional plugins. You may choose whether to include it in your project or not.

DEMONSTRATION
This is to be removed, used for demonstration purposes only. This category must not be included in your project.

SAMPLE
Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


Detailed information and more samples can be found in the document.

-->


</body>
</html>