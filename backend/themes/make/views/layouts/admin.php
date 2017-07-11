<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\themes\make\AppAssetMake;
use backend\modules\security\models\Usuario;
use yii\helpers\Html;

AppAssetMake::register($this);
$condition = array('id_usuario' => Yii::$app->getUser()->identity->id_usuario);
$user = Usuario::findOne($condition);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= $this->title ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="favicon.ico"/>
        <script>
            var urlhome = '<?php echo Yii::$app->homeUrl ?>';
            var _csrf = '<?php echo Yii::$app->getRequest()->csrfToken ?>';
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="fixed-topbar fixed-sidebar theme-sdtl color-default">
    <?php $this->beginBody() ?>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
        your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar">
            <div class="logopanel">
                <h1>
                    <a href="dashboard.html"></a>
                </h1>
            </div>
            <div class="sidebar-inner">
                <div class="sidebar-top">
                    <form action="search-result.html" method="post" class="searchform" id="search-results">
                        <input type="text" class="form-control" name="keyword" placeholder="Search...">
                    </form>
                    <div class="userlogged clearfix">
                        <!--                    <i class="icon icons-faces-users-01"></i>-->
                        <img src="<?php echo Yii::$app->homeUrl ?>/image/users/<?php echo $user->foto ?>"
                             class="pull-left" width="65px" alt="user image"
                             style="border-radius:50%;margin-bottom: 10px;margin-right: 10px;">

                        <div class="user-details">
                            <h4><?= $user->username ?></h4>

                            <div class="dropdown user-login">
                                <button class="btn btn-xs dropdown-toggle btn-rounded" type="button"
                                        data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
                                        data-delay="300">
                                    <i class="online"></i><span>Available</span><i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
                                    <li><a href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
                                    <li><a href="#"><i class="away"></i><span>Away</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-title">
                    Navigation
                    <div class="pull-right menu-settings">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true" data-delay="300">
                            <i class="icon-settings"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
                            <li><a href="#" id="remove-menu" class="remove-menu">Remove elements</a></li>
                            <li><a href="#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="nav nav-sidebar">
                    <li class=" nav-active active"><a href="dashboard.html"><i class="icon-home"></i><span
                                data-translate="dashboard">Dashboard</span></a></li>
                    <li class="nav-parent">
                        <a href="#"><i class="icon-puzzle"></i><span data-translate="nomencladores"></span> <span
                                class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a target="_blank" href="<?php echo Yii::$app->homeUrl ?>nomenclature/season"><span
                                        data-translate="item_menu_touristic_season"></span></a></li>
                            <li><a target="_blank" href="<?php echo Yii::$app->homeUrl ?>nomenclature/coin_type"><span
                                        data-translate="item_menu_coint_type"></span></a></li>
                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>nomenclature/availability_state"><span
                                        data-translate="item_menu_availability_state"></span></a></li>
                        </ul>


                    <li class="nav-parent">
                        <a href="#"><i class="icons-education-science-18"></i><span data-translate="menu_house"></span> <span
                                class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a target="_blank" href="<?php echo Yii::$app->homeUrl ?>housing/housing"><span
                                        data-translate="item_menu_house_house"></span></a></li>
                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>housing/housing_characteristics"><span
                                        data-translate="item_menu_housing_characteristics"></span></a></li>

                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>housing/housing_service"><span
                                        data-translate="item_menu_housing_service"></span></a></li>

                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>housing/housing_state_rent"><span
                                        data-translate="item_menu_housing_state_rent"></span></a></li>

                            <li><a target="_blank" href="<?php echo Yii::$app->homeUrl ?>housing/housing_type"><span
                                        data-translate="item_menu_housing_type"></span></a></li>
                        </ul>
                    </li>


                    <li class="nav-parent">
                        <a href="#"><i class="fa fa-flag"></i><span
                                data-translate="menu_localization"></span> <span
                                class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>localization/reference_point"><span
                                        data-translate="item_menu_reference_point"></span></a></li>
                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>localization/province"><span
                                        data-translate="item_menu_province"></span></a></li>
                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>localization/town"><span
                                        data-translate="item_menu_town"></span></a></li>
                        </ul>
                    </li>


                    <li class="nav-parent">
                        <a href="#"><i class="fa fa-lock"></i><span
                                data-translate="menu_security"></span> <span
                                class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>security/usuario"><span
                                        data-translate="item_menu_user"></span></a></li>
                            <li><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>security/role"><span
                                        data-translate="item_menu_role"></span></a></li>
                            <li class="nav-parent"><a target="_blank"
                                   href="<?php echo Yii::$app->homeUrl ?>security/permission"><span
                                        data-translate="item_menu_permission"></span></a>
                             <!--   <ul class="children collapse">
                                    <li class="nav-parent">
                                    <a target="_blank"
                                       href="<?php /*echo Yii::$app->homeUrl */?>security/permission"><span
                                            data-translate="item_menu_permission_role"></span></a>
                                    </li>
                                </ul>-->

                            </li>
                        </ul>
                    </li>
                </ul>
                <!--   <li class="nav-parent">
                   <a href=""><i class="icon-screen-desktop"></i><span data-translate="ui elements">UI Elements</span><span class="fa arrow"></span></a>
                   <ul class="children collapse">
                       <li><a href="ui-buttons.html" data-translate="buttons"> Buttons</a></li>
                       <li><a href="ui-components.html" data-translate="components"> Components</a></li>
                       <li><a href="ui-tabs.html" data-translate="tabs"> Tabs</a></li>
                       <li><a href="ui-animations.html" data-translate="animations css3"> Animations CSS3</a></li>
                       <li><a href="ui-icons.html" data-translate="icons"> Icons</a></li>
                       <li><a href="ui-portlets.html" data-translate="portlets"> Portlets</a></li>
                       <li><a href="ui-nestable-list.html" data-translate="nestable list"> Nestable List</a></li>
                       <li><a href="ui-tree-view.html" data-translate="tree view"> Tree View</a></li>
                       <li><a href="ui-modals.html" data-translate="modals"> Modals</a></li>
                       <li><a href="ui-notifications.html" data-translate="notifications"> Notifications</a></li>
                       <li><a href="ui-typography.html" data-translate="typography"> Typography</a></li>
                       <li><a href="ui-helper.html" data-translate="helper"> Helper Classes</a></li>
                   </ul>
               </li>
               <li class="nav-parent">
                   <a href=""><i class="icon-note"></i><span data-translate="forms">Forms </span><span class="fa arrow"></span></a>
                   <ul class="children collapse">
                       <li><a href="forms.html"> Forms Elements</a></li>
                       <li><a href="forms-validation.html"> Forms Validation</a></li>
                       <li><a href="forms-plugins.html"> Advanced Plugins</a></li>
                       <li><a href="forms-wizard.html"> <span class="pull-right badge badge-danger">low</span> <span data-translate="form-wizard">Form Wizard</span></a></li>
                       <li><a href="forms-sliders.html" data-translate="sliders"> Sliders</a></li>
                       <li><a href="forms-editors.html" data-translate="text editors"> Text Editors</a></li>
                       <li><a href="forms-input-masks.html" data-translate="input masks"> Input Masks</a></li>
                   </ul>
               </li>-->

                <!-- SIDEBAR WIDGET FOLDERS -->
                <div class="sidebar-footer clearfix">
                    <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top"
                       data-original-title="Settings">
                        <i class="icon-settings"></i></a>
                    <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top"
                       data-original-title="Fullscreen">
                        <i class="icon-size-fullscreen"></i></a>
                    <a class="pull-left btn-effect buttonlogout" style="cursor: hand" data-modal="modal-1"
                       data-rel="tooltip" data-placement="top" data-original-title="Logout">
                        <i class="icon-power"></i></a>
                </div>
            </div>
        </div>
        <!-- END SIDEBAR -->
        <div class="main-content">
            <!-- BEGIN TOPBAR -->
            <div class="topbar">
                <div class="header-left">
                    <div class="topnav">
                        <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
                        <ul class="nav nav-icons">
                            <li><a href="#" class="toggle-sidebar-top"><span class="icon-user-following"></span></a>
                            </li>
                            <li><a href="mailbox.html"><span class="octicon octicon-mail-read"></span></a></li>
                            <li><a href="#"><span class="octicon octicon-flame"></span></a></li>
                            <li><a href="builder-page.html"><span class="octicon octicon-rocket"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="header-menu nav navbar-nav">
                        <!-- BEGIN USER DROPDOWN -->
                        <li class="dropdown" id="language-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-globe"></i>
                                <span data-translate="Language">Language</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" data-lang="en"><img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/flags/usa.png"
                                            alt="flag-english"> <span>English</span></a>
                                </li>
                                <li>
                                    <a href="#" data-lang="es"><img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/flags/spanish.png"
                                            alt="flag-english"> <span>Español</span></a>
                                </li>
                                <li>
                                    <a href="#" data-lang="fr"><img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/flags/french.png"
                                            alt="flag-english"> <span>Français</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER DROPDOWN -->
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown" id="notifications-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-danger badge-header">6</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header clearfix">
                                    <p class="pull-left">12 Pending Notifications</p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list withScroll" data-height="220">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                                                Steve have rated your photo
                                                <span class="dropdown-time">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                                                John added you to his favs
                                                <span class="dropdown-time">15 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file-text p-r-10 f-18"></i>
                                                New document available
                                                <span class="dropdown-time">22 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                                New picture added
                                                <span class="dropdown-time">40 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                                                Meeting in 1 hour
                                                <span class="dropdown-time">1 hour</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-bell p-r-10 f-18"></i>
                                                Server 5 overloaded
                                                <span class="dropdown-time">2 hours</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                                                Bill comment your post
                                                <span class="dropdown-time">3 hours</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                                New picture added
                                                <span class="dropdown-time">2 days</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer clearfix">
                                    <a href="#" class="pull-left">See all notifications</a>
                                    <a href="#" class="pull-right">
                                        <i class="icon-settings"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN MESSAGES DROPDOWN -->
                        <li class="dropdown" id="messages-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-paper-plane"></i>
                <span class="badge badge-primary badge-header">
                8
                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header clearfix">
                                    <p class="pull-left">
                                        You have 8 Messages
                                    </p>
                                </li>
                                <li class="dropdown-body">
                                    <ul class="dropdown-menu-list withScroll" data-height="220">
                                        <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img
                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar3.png"
                            alt="avatar 3">
                        </span>

                                            <div class="clearfix">
                                                <div>
                                                    <strong>Alexa Johnson</strong>
                                                    <small class="pull-right text-muted">
                                                        <span class="glyphicon glyphicon-time p-r-5"></span>12 mins ago
                                                    </small>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img
                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar4.png"
                            alt="avatar 4">
                        </span>

                                            <div class="clearfix">
                                                <div>
                                                    <strong>John Smith</strong>
                                                    <small class="pull-right text-muted">
                                                        <span class="glyphicon glyphicon-time p-r-5"></span>47 mins ago
                                                    </small>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img
                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar5.png"
                            alt="avatar 5">
                        </span>

                                            <div class="clearfix">
                                                <div>
                                                    <strong>Bobby Brown</strong>
                                                    <small class="pull-right text-muted">
                                                        <span class="glyphicon glyphicon-time p-r-5"></span>1 hour ago
                                                    </small>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img
                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar6.png"
                            alt="avatar 6">
                        </span>

                                            <div class="clearfix">
                                                <div>
                                                    <strong>James Miller</strong>
                                                    <small class="pull-right text-muted">
                                                        <span class="glyphicon glyphicon-time p-r-5"></span>2 days ago
                                                    </small>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer clearfix">
                                    <a href="mailbox.html" class="pull-left">See all messages</a>
                                    <a href="#" class="pull-right">
                                        <i class="icon-settings"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END MESSAGES DROPDOWN -->
                        <!-- BEGIN USER DROPDOWN -->
                        <li class="dropdown" id="user-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img src="<?php echo Yii::$app->homeUrl ?>/image/users/<?php echo $user->foto ?>"
                                     alt="user image">
                                <span class="username">Hi, <?= $user->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-calendar"></i><span>My Calendar</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-settings"></i><span>Account Settings</span></a>
                                </li>
                                <li>
                                    <a class="buttonlogout"><i class="icon-logout"></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER DROPDOWN -->
                        <!-- CHAT BAR ICON -->
                        <li id="quickview-toggle"><a href="#"><i class="icon-bubbles"></i></a></li>
                    </ul>
                </div>
                <!-- header-right -->
            </div>
            <!-- END TOPBAR -->
            <!-- BEGIN PAGE CONTENT -->
            <div class="page-content page-thin">
                <div>
                    <?php echo $content ?>
                </div>
                <div class="footer">
                    <div class="copyright">
                        <p class="pull-left sm-pull-reset">
                            <span>Copyright <span class="copyright">©</span> 2016 </span>
                            <span>THEMES LAB</span>.
                            <span>All rights reserved. </span>
                        </p>

                        <p class="pull-right sm-pull-reset">
                            <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of
                                    use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END MAIN CONTENT -->
        <!-- BEGIN BUILDER -->
        <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->
    <div id="quickview-sidebar">
        <div class="quickview-header">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#chat" data-toggle="tab">Chat</a></li>
                <li><a href="#notes" data-toggle="tab">Notes</a></li>
                <li><a href="#settings" data-toggle="tab" class="settings-tab">Settings</a></li>
            </ul>
        </div>
        <div class="quickview">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="chat">
                    <div class="chat-body current">
                        <div class="chat-search">
                            <form class="form-inverse" action="#" role="search">
                                <div class="append-icon">
                                    <input type="text" class="form-control" placeholder="Search contact...">
                                    <i class="icon-magnifier"></i>
                                </div>
                            </form>
                        </div>
                        <div class="chat-groups">
                            <div class="title">GROUP CHATS</div>
                            <ul>
                                <li><i class="turquoise"></i> Favorites</li>
                                <li><i class="turquoise"></i> Office Work</li>
                                <li><i class="turquoise"></i> Friends</li>
                            </ul>
                        </div>
                        <div class="chat-list">
                            <div class="title">FAVORITES</div>
                            <ul>
                                <li class="clearfix">
                                    <div class="user-img">
                                        <img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar13.png"
                                            alt="avatar"/>
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Bobby Brown</div>
                                        <div class="user-txt">On the road again...</div>
                                    </div>
                                    <div class="user-status">
                                        <i class="online"></i>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="user-img">
                                        <img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar5.png"
                                            alt="avatar"/>

                                        <div class="pull-right badge badge-danger">3</div>
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Alexa Johnson</div>
                                        <div class="user-txt">Still at the beach</div>
                                    </div>
                                    <div class="user-status">
                                        <i class="away"></i>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="user-img">
                                        <img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar10.png"
                                            alt="avatar"/>
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Bobby Brown</div>
                                        <div class="user-txt">On stage...</div>
                                    </div>
                                    <div class="user-status">
                                        <i class="busy"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-list">
                            <div class="title">FRIENDS</div>
                            <ul>
                                <li class="clearfix">
                                    <div class="user-img">
                                        <img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar7.png"
                                            alt="avatar"/>

                                        <div class="pull-right badge badge-danger">3</div>
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">James Miller</div>
                                        <div class="user-txt">At work...</div>
                                    </div>
                                    <div class="user-status">
                                        <i class="online"></i>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="user-img">
                                        <img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar11.png"
                                            alt="avatar"/>
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Fred Smith</div>
                                        <div class="user-txt">Waiting for tonight</div>
                                    </div>
                                    <div class="user-status">
                                        <i class="offline"></i>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="user-img">
                                        <img
                                            src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar8.png"
                                            alt="avatar"/>
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Ben Addams</div>
                                        <div class="user-txt">On my way to NYC</div>
                                    </div>
                                    <div class="user-status">
                                        <i class="offline"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-conversation">
                        <div class="conversation-header">
                            <div class="user clearfix">
                                <div class="chat-back">
                                    <i class="icon-action-undo"></i>
                                </div>
                                <div class="user-details">
                                    <div class="user-name">James Miller</div>
                                    <div class="user-txt">On the road again...</div>
                                </div>
                            </div>
                        </div>
                        <div class="conversation-body">
                            <ul>
                                <li class="img">
                                    <div class="chat-detail">
                                        <span class="chat-date">today, 10:38pm</span>

                                        <div class="conversation-img">
                                            <img
                                                src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar4.png"
                                                alt="avatar 4"/>
                                        </div>
                                        <div class="chat-bubble">
                                            <span>Hi you!</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="img">
                                    <div class="chat-detail">
                                        <span class="chat-date">today, 10:45pm</span>

                                        <div class="conversation-img">
                                            <img
                                                src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar4.png"
                                                alt="avatar 4"/>
                                        </div>
                                        <div class="chat-bubble">
                                            <span>Are you there?</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="img">
                                    <div class="chat-detail">
                                        <span class="chat-date">today, 10:51pm</span>

                                        <div class="conversation-img">
                                            <img
                                                src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar4.png"
                                                alt="avatar 4"/>
                                        </div>
                                        <div class="chat-bubble">
                                            <span>Send me a message when you come back.</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="conversation-message">
                            <input type="text" placeholder="Your message..."
                                   class="form-control form-white send-message"/>

                            <div class="item-footer clearfix">
                                <div class="footer-actions">
                                    <i class="icon-rounded-marker"></i>
                                    <i class="icon-rounded-camera"></i>
                                    <i class="icon-rounded-paperclip-oblique"></i>
                                    <i class="icon-rounded-alarm-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notes">
                    <div class="list-notes current withScroll">
                        <div class="notes ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="add-note">
                                        <i class="fa fa-plus"></i>ADD A NEW NOTE
                                    </div>
                                </div>
                            </div>
                            <div id="notes-list">
                                <div class="note-item media current fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Reset my account password</p>
                                        </div>
                                        <p class="note-desc hidden">Break security reasons.</p>

                                        <p>
                                            <small>Tuesday 6 May, 3:52 pm</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="note-item media fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Call John</p>
                                        </div>
                                        <p class="note-desc hidden">He have my laptop!</p>

                                        <p>
                                            <small>Thursday 8 May, 2:28 pm</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="note-item media fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Buy a car</p>
                                        </div>
                                        <p class="note-desc hidden">I'm done with the bus</p>

                                        <p>
                                            <small>Monday 12 May, 3:43 am</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="note-item media fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Don't forget my notes</p>
                                        </div>
                                        <p class="note-desc hidden">I have to read them...</p>

                                        <p>
                                            <small>Wednesday 5 May, 6:15 pm</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="note-item media current fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Reset my account password</p>
                                        </div>
                                        <p class="note-desc hidden">Break security reasons.</p>

                                        <p>
                                            <small>Tuesday 6 May, 3:52 pm</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="note-item media fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Call John</p>
                                        </div>
                                        <p class="note-desc hidden">He have my laptop!</p>

                                        <p>
                                            <small>Thursday 8 May, 2:28 pm</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="note-item media fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Buy a car</p>
                                        </div>
                                        <p class="note-desc hidden">I'm done with the bus</p>

                                        <p>
                                            <small>Monday 12 May, 3:43 am</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="note-item media fade in">
                                    <button class="close">×</button>
                                    <div>
                                        <div>
                                            <p class="note-name">Don't forget my notes</p>
                                        </div>
                                        <p class="note-desc hidden">I have to read them...</p>

                                        <p>
                                            <small>Wednesday 5 May, 6:15 pm</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-note note-hidden-sm">
                        <div class="note-header clearfix">
                            <div class="note-back">
                                <i class="icon-action-undo"></i>
                            </div>
                            <div class="note-edit">Edit Note</div>
                            <div class="note-subtitle">title on first line</div>
                        </div>
                        <div id="note-detail">
                            <div class="note-write">
                                <textarea class="form-control" placeholder="Type your note here"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="settings">
                    <div class="settings">
                        <div class="title">ACCOUNT SETTINGS</div>
                        <div class="setting">
                            <span> Show Personal Statut</span>
                            <label class="switch pull-right">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>

                            <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
                        </div>
                        <div class="setting">
                            <span> Show my Picture</span>
                            <label class="switch pull-right">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>

                            <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
                        </div>
                        <div class="setting">
                            <span> Show my Location</span>
                            <label class="switch pull-right">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>

                            <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
                        </div>
                        <div class="title">CHAT</div>
                        <div class="setting">
                            <span> Show User Image</span>
                            <label class="switch pull-right">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                        <div class="setting">
                            <span> Show Fullname</span>
                            <label class="switch pull-right">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                        <div class="setting">
                            <span> Show Location</span>
                            <label class="switch pull-right">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                        <div class="setting">
                            <span> Show Unread Count</span>
                            <label class="switch pull-right">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                        <div class="title">STATISTICS</div>
                        <div class="settings-chart">
                            <div class="clearfix">
                                <div class="chart-title">Stat 1</div>
                                <div class="chart-number">82%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary setting1" data-transitiongoal="82"></div>
                            </div>
                        </div>
                        <div class="settings-chart">
                            <div class="clearfix">
                                <div class="chart-title">Stat 2</div>
                                <div class="chart-number">43%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary setting2" data-transitiongoal="43"></div>
                            </div>
                        </div>
                        <div class="m-t-30" style="width:100%">
                            <canvas id="setting-chart" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->
    <div id="morphsearch" class="morphsearch">
        <form class="morphsearch-form">
            <input class="morphsearch-input" type="search" placeholder="Search..."/>
            <button class="morphsearch-submit" type="submit">Search</button>
        </form>
        <div class="morphsearch-content withScroll">
            <div class="dummy-column user-column">
                <h2>Users</h2>
                <a class="dummy-media-object" href="#">
                    <img
                        src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar1_big.png"
                        alt="Avatar 1"/>

                    <h3>John Smith</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img
                        src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar2_big.png"
                        alt="Avatar 2"/>

                    <h3>Bod Dylan</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img
                        src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar3_big.png"
                        alt="Avatar 3"/>

                    <h3>Jenny Finlan</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img
                        src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar4_big.png"
                        alt="Avatar 4"/>

                    <h3>Harold Fox</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img
                        src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar5_big.png"
                        alt="Avatar 5"/>

                    <h3>Martin Hendrix</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img
                        src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/avatars/avatar6_big.png"
                        alt="Avatar 6"/>

                    <h3>Paul Ferguson</h3>
                </a>
            </div>
            <div class="dummy-column">
                <h2>Articles</h2>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/1.jpg"
                         alt="1"/>

                    <h3>How to change webdesign?</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/2.jpg"
                         alt="2"/>

                    <h3>News From the sky</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/3.jpg"
                         alt="3"/>

                    <h3>Where is the cat?</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/4.jpg"
                         alt="4"/>

                    <h3>Just another funny story</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/5.jpg"
                         alt="5"/>

                    <h3>How many water we drink every day?</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/6.jpg"
                         alt="6"/>

                    <h3>Drag and drop tutorials</h3>
                </a>
            </div>
            <div class="dummy-column">
                <h2>Recent</h2>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/7.jpg"
                         alt="7"/>

                    <h3>Design Inspiration</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/8.jpg"
                         alt="8"/>

                    <h3>Animals drawing</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/9.jpg"
                         alt="9"/>

                    <h3>Cup of tea please</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/10.jpg"
                         alt="10"/>

                    <h3>New application arrive</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/11.jpg"
                         alt="11"/>

                    <h3>Notification prettify</h3>
                </a>
                <a class="dummy-media-object" href="#">
                    <img src="<?php echo Yii::$app->homeUrl . $this->theme->baseUrl ?>/assets/images/gallery/12.jpg"
                         alt="12"/>

                    <h3>My article is the last recent</h3>
                </a>
            </div>
        </div>
        <!-- /morphsearch-content -->
        <span class="morphsearch-close"></span>
    </div>
    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>

    <form method="post" id="form_logout" action="<?php echo Yii::$app->homeUrl ?>/site/logout">
        <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
               value="<?= Yii::$app->request->getCsrfToken() ?>"/>
    </form>
    <!-- END PAGE SCRIPT -->
    <?php $this->endBody() ?>
    <script>
        jQuery(document).ready(function () {
            $(".buttonlogout").click(function () {
                $("#form_logout").submit();
            })
        });

    </script>

    </body>

    <!-- END BODY -->
    </html>
<?php $this->endPage() ?>