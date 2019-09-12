function price_label(amount) {
    return AppData.currency_code + " " + numeral(amount).format('0,0.00');
}

function currency_as_label(amount) {
    return AppData.currency_code + " " + numeral(amount * AppData.currency_rate).format('0,0.00');
}

function update_hash(content){
    if(history.pushState) {
        history.pushState(null, null, '#' + content);
    }
    else {
        location.hash = '#' + content;
    }
}

jQuery(document).ready(function () {

    jQuery("body").on('submit', '.add-to-cart-form', function (e) {
        e.preventDefault();

        var action = jQuery(this).attr('action');
        jQuery.ajax({
            url: action,
            type: "POST",
            processData: false,
            contentType: false,
            data: new FormData(this),
            dataType: 'json',
            success: function (data) {
                if (data.status == true) {
                    $("#header_cart_summary").replaceWith(data.header_cart_widget);
                    //$(".sidebar .sidebar-cart").html(data.sidebar_cart_widget);
                    //show_add_to_cart_success(data.msg);
                    $("#modalAddCartSuccess #data_content").html(data.msg);
                    $("#modalAddCartSuccess").modal('show');
                } else {
                    if(data.case == 'qty'){
                        $(".modalWarning #data_content").html(data.msg);
                        $(".modalWarning").modal('show');
                    }else{
                        $("#modalAddCartError #data_content").html(data.msg);
                        $("#modalAddCartError").modal('show');
                    }

                }
            },
            error: function () {
                $("#modalAddCartError #data_content").html("Error updating your cart. Please try again.");
                $("#modalAddCartError").modal('show');
            }
        });


    });

    jQuery("body").on('click', '.add-to-wishlist', function (e) {
        e.preventDefault();
        jQuery(this).prev('form').submit();

    });

    jQuery("body").on('submit', '.add-to-wishlist-form', function (e) {
        e.preventDefault();

        var this_item = $(this);

        var action = jQuery(this).attr('action');
        jQuery.ajax({
            url: action,
            type: "POST",
            processData: false,
            contentType: false,
            data: new FormData(this),
            dataType: 'json',
            success: function (data) {
                if (data.status == true) {
                    //show_add_to_wishlist_success(data.msg);
                    $("span#wishlist_count").text(data.wishlist_count);
                    this_item.closest(".with-love").addClass('active');
                    $("#modalAddWishlistSuccess #data_content").html(data.msg);
                    $("#modalAddWishlistSuccess").modal('show');
                } else {
                    $("#modalAddWishlistError #data_content").html(data.msg);
                    $("#modalAddWishlistError").modal('show');

                }
            },
            error: function () {
                $("#modalAddWishlistError #data_content").html("Error updating wishlist. Please try again.");
                $("#modalAddWishlistError").modal('show');
            }
        });


    });

    jQuery("body").on('click', '#btn_notify_me', function () {
        jQuery("form#notify_me").submit();

    });

    jQuery("body").on('submit', '#notify_me', function (e) {
        e.preventDefault();

        var action = jQuery(this).attr('action');
        jQuery.ajax({
            url: action,
            type: "POST",
            processData: false,
            contentType: false,
            data: new FormData(this),
            dataType: 'json',
            success: function (data) {
                if (data.status == true) {
                    $("#modalSuccess #data_content").html(data.msg);
                    $("#modalSuccess").modal('show');
                } else {
                    $("#modalError #data_content").html(data.msg);
                    $("#modalError").modal('show');
                }
            },
            error: function () {
                $("#modalError #data_content").html("Error while updating. Please try again.");
                $("#modalError").modal('show');
            }
        });


    });

    jQuery("body").on('submit', '.newsltter_signup_widget', function (e) {
        e.preventDefault();
        var form = jQuery(this);
        var action = jQuery(this).attr('action');
        jQuery.ajax({
            url: action,
            type: "POST",
            processData: false,
            contentType: false,
            data: new FormData(this),
            dataType: 'json',
            success: function (data) {
                if (data.status == true) {
                    $("#modalSuccess #data_content").html(data.msg);
                    $("#modalSuccess").modal('show');
                    $('.newsltter_signup_widget')[0].reset();
                    if ($("#form_newsltter_signup_popup").length == 1) {
                        $('#form_newsltter_signup_popup')[0].reset();
                    }

                    $('#newsltter_signup_popup .lw-close').trigger('click');

                } else {
                    $("#modalError #data_content").html(data.msg);
                    $("#modalError").modal('show');
                }
            },
            error: function () {
                $("#modalError #data_content").html("Error while updating. Please try again.");
                $("#modalError").modal('show');
            }
        });


    });

    jQuery(".insta-widget").on('click', 'a', function (e) {
        e.preventDefault();

        var action = jQuery(this).data('action');
        jQuery.ajax({
            url: action,
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                if(data.status == true){
                    $("#igramModalCenter").html(data.post_modal_view);
                    $("#igramModalCenter").modal('show');
                }else{

                }

            },
            error: function() {

            }
        });


    });
});

function show_add_to_cart_success(msg) {
    swal({
        title: "Success",
        text: msg,
        icon: "success",
        buttons: {
            cancel: {
                text: "Continue Shopping",
                value: null,
                visible: true,
                className: "",
                closeModal: true,
            },
            confirm: {
                text: "View Cart",
                value: true,
                visible: true,
                className: "btn-primary",
                closeModal: true
            }
        }

    }).then(function (willRedirect) {
        if (willRedirect) {
            window.location.href = AppData.cart_url;
        }
    });
}

function show_add_to_cart_error(msg) {
    swal({
        title: "Error",
        text: msg,
        icon: "error",
        buttons: {
            cancel: {
                text: "OK",
                value: null,
                visible: true,
                className: "btn-default",
                closeModal: true,
            }
        }

    })
}

function show_add_to_wishlist_success(msg){
    swal({
        title: "Success",
        text: msg,
        icon: "success",
        buttons: {
            cancel: {
                text: "Ok",
                value: null,
                visible: true,
                className: "",
                closeModal: true,
            },
            confirm: {
                text: "Go to Wish List",
                value: true,
                visible: true,
                className: "btn-primary",
                closeModal: true
            }
        }

    }).then(function (willRedirect) {
        if (willRedirect) {
            window.location.href = AppData.wishlist_url;
        }
    });
}

function show_add_to_wishlist_error(msg){
    swal({
        title: "Message",
        text: msg,
        icon: "error",
        buttons: {
            cancel: {
                text: "OK",
                value: null,
                visible: true,
                className: "btn-default",
                closeModal: true,
            }
        }

    })
}