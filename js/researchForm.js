$(function(){
    $('.research-input').on('focus', function(){
        $(this).css("border","1px solid #f63");
    });

    $('.research-input').on('blur', function(){
        $(this).css("border","1px solid transparent");
    });

    $(".other-specific").focus(function(){
        $(this).css("border-bottom","1px solid #f63");
    });
    $(".other-specific").blur(function(){
        $(this).css("border-bottom","1px solid #000");
    });

    $('.number-select').on('focus', function(){
        $(this).css("border-bottom","2px solid #f63");
    });
    $('.number-select').on('blur', function(){
        $(this).css("border-bottom","2px solid #fff");
    });

    $("#consumers-one").click(function(){
        $("#specific").attr("disabled", false).focus();
        $("#consumers-general").children().attr("disabled", true);
    });
    $("#consumers-two").click(function(){
        $("#specific").attr("disabled", true).css("border-bottom", "1px solid #c1b7b7");
        $("#consumers-general").children().attr("disabled", false);
    });
});

function check(){

    var brandName = $("#brand-name").val();
    var linkWebsite = $("#link-website").val();
    var industry = $("#industry").val();
    var otherIndustry = $("#other-industry").val();
    var keyProduct = $("#key-product").val();
    var keyService = $("#key-service").val();
    var lowest = $("#lowest").val();
    var highest = $("#highest").val();
    var specific = $("#specific").val();
    // var consumers = getValue();

    if(brandName == ""){
        alert("Brand name 不能为空！");
        $("#brand-name").focus();
        return false;
    }

    if(linkWebsite == ""){
        alert("link website 不能为空！");
        $("#link-website").focus();
        return false;
    }

    if(industry == "" && otherIndustry == ""){
        alert("Industry 不能为空！");
        $("#industry").focus();
        return false;
    }

    if(keyProduct == ""){
        alert("Key product 不能为空！");
        $("#key-product").focus();
        return false;
    }

    if(keyService == ""){
        alert("Key service 不能为空！");
        $("#key-service").focus();
        return false;
    }

    if(lowest == ""){
        alert("Lowest budget 不能为空！");
        $("#lowest").focus();
        return false;
    }

    if(highest == ""){
        alert("Highest budget 不能为空！");
        $("#highest").focus();
        return false;
    }

    for(var i=0;i<form.consumers.length;i++) {
        if(form.consumers[i].checked) {
            var consumers=form.consumers[i].value;
        }
    }
    if(consumers != "generalSex"){
        if(specific == ""){
            alert("Specific consumers 不能为空！");
            $("#specific").focus();
            return false;
        }
    }

    $("#form").submit();
}

function saveSubmit(){
    $("#form").submit();
}

function formReset(){
    // $("#form")[0].reset();
    document.getElementById("form").reset();
}


function getValue() {
    for(var i=0;i<form.consumers.length;i++) {
        if(form.consumers[i].checked) {
            var consumers=form.consumers[i].value;
        }
    }
    return consumers;
}





