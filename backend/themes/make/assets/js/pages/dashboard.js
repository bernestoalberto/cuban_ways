




$(function() {

    /**** MAP ****/


    var map;
    var minBulletSize = 3;
    var maxBulletSize = 70;
    var min = Infinity;
    var max = -Infinity;

    /* Notifications, demo purpose */
    notifContent = '<div class="alert alert-dark media fade in bd-0" id="message-alert"><div class="media-left"><img src="assets/images/profil_page/friend8.jpg" class="dis-block img-circle"></div><div class="media-body width-100p"><h4 class="alert-title f-14">New message received</h4><p class="f-12 alert-message pull-left">John send you a message 2 hours ago.</p><p class="pull-right"><a href="#" class="f-12">Read message</a></p></div></div>';
    setTimeout(function() {
        if (!$('#quickview-sidebar').hasClass('open') && !$('.page-content').hasClass('page-builder') && !$('.morphsearch').hasClass('open')) {}
    }, 3000);

    $(document).on("click", ".panel-header .panel-maximize", function (event) {
        var panel = $(this).parents(".panel:first");
        if (panel.hasClass("maximized")) {
            map.invalidateSize();
        }
        else {
            map.invalidateSize();
        }
    });

    $(document).on("click", "#switch-rtl", function (event) {
        map.zoomControl = generateZoomControl();
        map.validateData();
        $('#listdiv').mCustomScrollbar({
            scrollButtons: {
                enable: false
            },
            autoHideScrollbar: false,
            scrollInertia: 150,
            theme: "light-thin",
            set_height: 440,
            advanced: {
                updateOnContentResize: true
            }
        });
    });

    $(document).on("click", ".theme-color", function (event) {
        var color = $(this).data('color');
        map.zoomControl = generateZoomControl(color);
        map.validateData();
        $('#listdiv').mCustomScrollbar({
            scrollButtons: {
                enable: false
            },
            autoHideScrollbar: false,
            scrollInertia: 150,
            theme: "light-thin",
            set_height: 440,
            advanced: {
                updateOnContentResize: true
            }
        });
    });

});

function generateNotifDashboard(content) {
    var position = 'topRight';
    if ($('body').hasClass('rtl')) position = 'topLeft';
    var n = noty({
        text: content,
        type: 'success',
        layout: position,
        theme: 'made',
        animation: {
            open: 'animated bounceIn',
            close: 'animated bounceOut'
        },
        timeout: 4500,
        callback: {
            onShow: function () {
                $('#noty_topRight_layout_container, .noty_container_type_success').css('width', 350).css('bottom', 10);
            },
            onCloseClick: function () {
                setTimeout(function () {
                    $('#quickview-sidebar').addClass('open');
                }, 500)
            }
        }
    });
}
