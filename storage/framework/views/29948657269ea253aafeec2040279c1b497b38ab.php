<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description"
          content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('media/favicons/favicon.png')); ?>">
    <link rel="icon" sizes="192x192" type="image/png" href="<?php echo e(asset('media/favicons/favicon-192x192.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('media/favicons/apple-touch-icon-180x180.png')); ?>">

    <!-- Fonts and Styles -->
    <?php echo $__env->yieldContent('css_before'); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
    <link rel="stylesheet" href="<?php echo e(mix('css/dashmix.css')); ?>">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" href="<?php echo e(mix('css/themes/xwork.css')); ?>"> -->
    <?php echo $__env->yieldContent('css_after'); ?>

<!-- Scripts -->
    
</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


Footer

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container">

    <!-- END Side Overlay -->

    <!-- Sidebar -->

    <!-- END Sidebar -->

    <!-- Header -->

    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <?php echo $__env->yieldContent('content'); ?>

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">

        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<!-- Dashmix Core JS -->
<script src="<?php echo e(mix('js/dashmix.app.js')); ?>"></script>

<!-- Laravel Scaffolding JS -->
<script src="<?php echo e(mix('js/laravel.app.js')); ?>"></script>


<?php echo $__env->yieldContent('js_after'); ?>
</body>
</html>
