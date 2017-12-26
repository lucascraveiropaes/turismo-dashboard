    <!--   Core JS Files   -->
    <script src="/public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/public/js/material.min.js" type="text/javascript"></script>
    <script src="/public/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Promise Library for SweetAlert2 working on IE -->
    <script src="/public/js/es6-promise-auto.min.js"></script>
    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="/public/js/bootstrap-notify.js"></script>
    <!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
    <script src="/public/js/nouislider.min.js"></script>

    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="/public/js/jquery.datatables.js"></script>
    <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
    <script src="/public/js/sweetalert2.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="/public/js/material-dashboard.js?v=1.2.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="/public/js/dashboard.js"></script>

    <?php
        if ( isset($page["formulario"]) ) {
            if($page["formulario"] == true) { ?>
                <!-- Sharrre Library -->
                <script src="/public/js/jquery.sharrre.js"></script>
                <script src="/public/js/file-upload.js"></script>
                <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
                <script src="/public/js/jquery.bootstrap-wizard.js"></script> 
                <!-- Plugin for Date Time Picker and Full Calendar Plugin-->
                <script src="/public/js/moment.min.js"></script>
                <!-- Library for adding dinamically elements -->
                <script src="/public/js/arrive.min.js" type="text/javascript"></script>
                <!-- Forms Validations Plugin -->
                <script src="/public/js/jquery.validate.min.js"></script>
                <!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
                <script src="/public/js/jquery.select-bootstrap.js"></script>
                <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
                <script src="/public/js/jasny-bootstrap.min.js"></script>
                <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
                <script src="/public/js/jquery.tagsinput.js"></script> <?php
            }
        }
    ?>

    <?php
        if ( isset($page["mapa"]) ) {
            if($page["mapa"] == true) { ?>
                <!-- Google Maps Plugin -->
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBU6rw5KT6CLRJViNdGxUvbpCY0ozgKr8w&callback=initMap"></script>
                <script src="/public/js/maps.js"></script> <?php
            }
        }
    ?>

    <?php
        if ( isset($page["editor"]) ) {
            if($page["editor"] == true) { ?>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.2/combined/css/gijgo.min.css" rel="stylesheet" type="text/css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.2/combined/js/gijgo.min.js" type="text/javascript"></script>

                <!-- Froala Editor Stylesheets -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="/public/editor/css/froala_editor.css">
                <link rel="stylesheet" href="/public/editor/css/froala_style.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/code_view.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/draggable.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/colors.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/emoticons.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/image_manager.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/image.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/line_breaker.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/table.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/char_counter.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/video.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/fullscreen.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/file.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/quick_insert.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/help.css">
                <link rel="stylesheet" href="/public/editor/css/third_party/spell_checker.css">
                <link rel="stylesheet" href="/public/editor/css/plugins/special_characters.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

                <!-- Froala Editor Scripts -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

                <script type="text/javascript" src="/public/editor/js/froala_editor.min.js" ></script>
                <script type="text/javascript" src="/public/editor/js/plugins/align.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/char_counter.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/code_beautifier.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/code_view.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/colors.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/draggable.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/emoticons.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/entities.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/file.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/font_size.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/font_family.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/fullscreen.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/image.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/image_manager.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/line_breaker.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/inline_style.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/link.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/lists.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/paragraph_format.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/paragraph_style.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/quick_insert.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/quote.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/table.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/save.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/url.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/video.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/help.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/print.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/special_characters.min.js"></script>
                <script type="text/javascript" src="/public/editor/js/plugins/word_paste.min.js"></script>

                <script>
                    $(function(){
                        $('#editor').froalaEditor({
                            height: 450
                        })
                    });
                </script><?php
            }
        }
    ?>
    