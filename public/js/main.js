$(function() {

    $(".email").on("blur", function() {
        // Check If The Input Value Is Less Than 4 Carracter
        if ($(this).val().length < 4) {
            // If So Change Border To Red Color
            $(this).css("border", "1px solid #F00");
            // And Show The Error Message
            $(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            // If Not Change Border To Green Color
            $(this).css("border", "1px solid #080");
            // And Hide The Error Message
            $(this).parent().find(".custom-alert").fadeOut(200);
        }

    });

    $(".password").on("blur", function() {
        // Check If The Input Value Is Less Than 4 Carracter
        if ($(this).val().length < 4) {
            // If So Change Border To Red Color
            $(this).css("border", "1px solid #F00");
            // And Show The Error Message
            $(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            // If Not Change Border To Green Color
            $(this).css("border", "1px solid #080");
            // And Hide The Error Message
            $(this).parent().find(".custom-alert").fadeOut(200);
        }

    });

});

$(function() {

    $(".nameart").on("blur", function() {
        // Check If The Input Value Is Less Than 4 Carracter
        if ($(this).val().length < 4) {
            // If So Change Border To Red Color
            $(this).css("border", "1px solid #F00");
            // And Show The Error Message
            $(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            // If Not Change Border To Green Color
            $(this).css("border", "1px solid #080");
            // And Hide The Error Message
            $(this).parent().find(".custom-alert").fadeOut(200);
        }

    });

    $(".art").on("blur", function() {
        // Check If The Input Value Is Less Than 4 Carracter
        if ($(this).val().length < 4) {
            // If So Change Border To Red Color
            $(this).css("border", "1px solid #F00");
            // And Show The Error Message
            $(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            // If Not Change Border To Green Color
            $(this).css("border", "1px solid #080");
            // And Hide The Error Message
            $(this).parent().find(".custom-alert").fadeOut(200);
        }

    });

});