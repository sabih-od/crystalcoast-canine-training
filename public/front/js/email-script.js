jQuery.validator.addMethod("checkEmail", function(e, a) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(e).toLowerCase())
}, " Email is invalid."), jQuery.validator.addMethod("phoneNumber", function(e, a) {
    return /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(e)
}, "should contain only number."), $(document).on("submit", "form", function(e) {
    if ($(this).hasClass("no-submit")) return e.preventDefault(), !1
});
$(".contactForms").validate({
    rules: {
        fname: {
            required: !0
        },
        lname: {
            required: !0
        },        
        email: {
            checkEmail: !0
        }
    },
    submitHandler: function(e) {
        var fname = $(e).find("[name='fname']").val(),
            lname = $(e).find("[name='lname']").val(),
            email = $(e).find("[name='email']").val(),            
            msg = $(e).find("[name='msg']").val();
        return $.ajax({
            type: "POST",
            url: "email.php?action=send",
            data: {
                fname: fname,
                lname: lname,
                email: email,                
                msg: msg
            },
            success: function(a) {

                if (a == 'success') {
                    $('.contactForms').trigger("reset");
                    $("#contactFormsResult").addClass("alert alert-success").html("Thank you! Your message has been successfully sent");
                    $("#contactFormsResult").fadeIn();
                    $("#contactFormsResult").delay(1500).fadeOut();
                }                
            }
        }), !1
    }
});
$(".schedule-form").validate({
    rules: {
        ownername: {
            required: !0
        },
        dogname: {
            required: !0
        },
        dogbreed: {
            required: !0
        },
        dogage: {
            number: !0,
            required: !0
        },
        email: {
            checkEmail: !0
        },
        phone: {
            number: !0,
            required: !0
        },        
    },
    submitHandler: function(e) {
        var ownername = $(e).find("[name='ownername']").val(),
            dogname = $(e).find("[name='dogname']").val(),
            dogbreed = $(e).find("[name='dogbreed']").val(),
            dogage = $(e).find("[name='dogage']").val(),            
            email = $(e).find("[name='email']").val(),
            phone = $(e).find("[name='phone']").val(),
            date = $(e).find("[name='date']").val(),
            time = $(e).find("[name='time']").val(),
            msg = $(e).find("[name='msg']").val();
        return $.ajax({
            type: "POST",
            url: "email.php?action=schedule",
            data: {
                ownername: ownername,
                dogname: dogname,
                dogbreed: dogbreed,
                dogage: dogage,
                email: email,
                phone: phone,
                date:date,
                time:time,
                msg:msg
            },
            success: function(a) {
                if (a == 'success') {
                    $('.schedule-form').trigger("reset");
                    $("#schedule-formResult").addClass("alert alert-success").html("Thank you! Your message has been successfully sent");
                    $("#schedule-formResult").fadeIn();
                    $("#schedule-formResult").delay(1500).fadeOut();
                }                
            }
        }), !1
    }
});
$(".msgForm").validate({
    rules: {
        name: {
            required: !0
        },
        phone: {
            number: !0,
            required: !0
        },
        email: {
            checkEmail: !0
        }
    },
    submitHandler: function(e) {
        var email = $(e).find("[name='email']").val();
            // msg = $(e).find("[name='msg']").val();
        return $.ajax({
            type: "POST",
            url: "email.php?action=watch",
            data: {
                email: email
            },
            success: function(a) {
                if (a == 'success') {
                    $('.msgForm').trigger("reset");
                    $("#signupFormResult14").addClass("alert alert-success").html("Thank you! Your message has been successfully sent");
                    $("#signupFormResult14").fadeIn();
                    $("#signupFormResult14").delay(1500).fadeOut();
                }                
            }
        }), !1
    }
});