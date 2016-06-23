<?php

try{
    $test = (route('admin::sitemap.index.all'));
    //$test = (route('admin::media.index'));

}
catch (Exception $e){echo "et".($e->getMessage());
    return $e->getMessage();
}


?>
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Shortcut buttons-->
        <!--================================-->
        <div id="mainnav-shortcut">
            <ul class="list-unstyled">
                <li class="col-xs-4" data-content="Additional Sidebar">
                    <a id="demo-toggle-aside" class="shortcut-grid" href="#">
                        <i class="psi-sidebar-window"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Notification">
                    <a id="demo-alert" class="shortcut-grid" href="#">
                        <i class="psi-speech-bubble-comic-2"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Page Alerts">
                    <a id="demo-page-alert" class="shortcut-grid" href="#">
                        <i class="psi-warning-window"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!--================================-->
        <!--End shortcut buttons-->


        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>
                        <?php
                        use Illuminate\Support\Facades\Route;$liMainElement = "";
                        $ulSubElement = "class=\"collapse\"";
                        if (starts_with(Route::currentRouteName(),"admin::dashboard")){
                            $liMainElement = "class=\"active-link active\"";
                            $ulSubElement = "class=\"collapse in\"";
                        }?>
                        <!--Menu list item-->
                        <li <?php echo($liMainElement);?>>
                            <a href="{{route('admin::dashboard')}}">
                                <i class="psi-home xhide"></i>
                                <i class="fa fa-home hidden"></i>
                                    <span class="menu-title">
                                        <strong>Dashboard</strong>
                                        <span class="label label-success pull-right">Top</span>
                                    </span>
                            </a>
                        </li>

                        <?php
                        $liMainElement = "";
                        $ulSubElement = "class=\"collapse\"";
                        $ulLiSubElement = "";
                        $currentRouteName = Route::currentRouteName();
                        //$currentRouteAction = Route::currentRouteAction();
                        //dc(Route::currentRouteAction());
                        if (starts_with($currentRouteName,"admin::sitemap")

                        ){
                            $liMainElement = "class=\"active-x active-sub\"";
                            $ulSubElement = "class=\"collapse in\"";
                            $ulLiSubElement = "class=\"active-link\"";
                        }?>
                                <!--User list item-->
                        <li <?php echo($liMainElement);?>>
                            <a href="#">
                                <i class="ti-files"></i>
                                <i class="fa fa-files-o hidden"></i>
                                    <span class="menu-title">
                                        <strong>Pagina's</strong>
                                    </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul <?php echo($ulSubElement);?>>
                                <li <?php if (starts_with($currentRouteName,"admin::sitemap.index")){echo($ulLiSubElement);}?>><a href="{{route('admin::sitemap.index.all')}}">Alle pagina's</a></li>
                                <li <?php if (starts_with($currentRouteName,"admin::sitemap.news")){echo($ulLiSubElement);}?>><a href="{{route('admin::sitemap.news.index')}}">Nieuws overzicht</a></li>
                                <li <?php if (starts_with($currentRouteName,"admin::sitemap.locaties")){echo($ulLiSubElement);}?>><a href="{{route('admin::sitemap.locaties.index')}}">Locatie overzicht</a></li>
                            </ul>
                        </li>

<?php
                        $liMainElement = "";
                        $ulSubElement = "class=\"collapse\"";
                        $ulLiSubElement = "";
                        $currentRouteName = Route::currentRouteName();
                        //$currentRouteAction = Route::currentRouteAction();
                        //dc(Route::currentRouteAction());
                        if (starts_with($currentRouteName,"admin::media")

                        ){
                            $liMainElement = "class=\"active-x active-sub\"";
                            $ulSubElement = "class=\"collapse in\"";
                            $ulLiSubElement = "class=\"active-link\"";
                        }?>
                                <!--User list item-->
                        <li <?php echo($liMainElement);?>>
                            <a href="#">
                                <i class="ion-image hidden"></i>
                                <i class="ti-gallery hidden"></i>
                                <i class="fa fa-picture-o xhidden" aria-hidden="true"></i>
                                    <span class="menu-title">
                                        <strong>Media</strong>
                                    </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul <?php echo($ulSubElement);?>>
                                <li <?php if (starts_with($currentRouteName,"admin::media")){echo($ulLiSubElement);}?>><a href="{{route('admin::media.index')}}">Overzicht</a></li>
                            </ul>
                        </li>

                        <?php
                        $liMainElement = "";
                        $ulSubElement = "class=\"collapse\"";
                        $ulLiSubElement = "";
                        $currentRouteName = Route::currentRouteName();
                        if (starts_with($currentRouteName,"admin::user")){
                            $liMainElement = "class=\"active-x active-sub\"";
                            $ulSubElement = "class=\"collapse in\"";
                            $ulLiSubElement = "class=\"active-link\"";
                        }?>
                        <!--User list item-->
                        <li <?php echo($liMainElement);?>>
                            <a href="#">
                                <i class="pli-male shidden"></i>
                                <i class="fa fa-users hidden"></i>
                                <i class="ti-user hidden"></i>
                                    <span class="menu-title">
                                        <strong>Gebruikers beheer</strong>
                                    </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul <?php echo($ulSubElement);?>>
                                <li <?php if (starts_with($currentRouteName,"admin::user.index")){echo($ulLiSubElement);}?>><a href="{{route('admin::user.index')}}">Alle gebruikers</a></li>
                                <li <?php if (starts_with($currentRouteName,"admin::user.create")){echo($ulLiSubElement);}?>><a href="{{route('admin::user.create')}}">Gebruiker toevoegen</a></li>
                            </ul>
                        </li>


                        <li class="list-divider"></li>

                        <?php
                        $liMainElement = "";
                        $ulSubElement = "class=\"collapse\"";
                        $ulLiSubElement = "";
                        $currentRouteName = Route::currentRouteName();

                        $currentRouteAction = Route::currentRouteAction();

                        if (starts_with($currentRouteAction,"WI\Core\Entities")

                        ){
                            $liMainElement = "class=\"active-x active-sub\"";
                            $ulSubElement = "class=\"collapse in\"";
                            $ulLiSubElement = "class=\"active-link\"";
                        }?>
                                <!--User list item-->
                        <li <?php echo($liMainElement);?>>
                            <a href="#">
                                <i class="psi-gear-2"></i>
                                    <span class="menu-title">
                                        <strong>Systeem</strong>
                                    </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul <?php echo($ulSubElement);?>>
                                <li <?php if (starts_with($currentRouteName,"admin::template")){echo($ulLiSubElement);}?>><a href="{{route('admin::template.index')}}">Templates</a></li>
                                <li <?php if (starts_with($currentRouteName,"admin::component")){echo($ulLiSubElement);}?>><a href="{{route('admin::component.index')}}">Components</a></li>
                                <li <?php if (starts_with($currentRouteName,"admin::reference")){echo($ulLiSubElement);}?>><a href="{{route('admin::reference.index')}}">References</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!--Widget-->
                    <!--================================-->
                    <div class="mainnav-widget">

                        <!-- Show the button on collapsed navigation -->
                        <div class="show-small">
                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                <i class="fa fa-desktop"></i>
                            </a>
                        </div>

                        <!-- Hide the content on collapsed navigation -->
                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                            <ul class="list-group">
                                <li class="list-header pad-no pad-ver">Server Status</li>
                                <li class="mar-btm">
                                    <span class="label label-primary pull-right">15%</span>
                                    <p>CPU Usage</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                            <span class="sr-only">15%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <span class="label label-purple pull-right">75%</span>
                                    <p>Bandwidth</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                            <span class="sr-only">75%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End widget-->

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>