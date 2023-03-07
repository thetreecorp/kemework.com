var item = `<div class="row-liciences-item row">
                <div class="col-sm-9">
                    <label>&nbsp;</label>
                    <input type="text" name="governemntal_liciences_permissions[]" class="form-control" placeholder="">
                </div>
                <div class="col-sm-3">
                    <label>&nbsp;</label>
                    <a href="javascript:void(0)"class="btn btn-danger remove-liciences"><i class="fa fa-minus"></i></a>
                </div>
            </div>`;

// append liciences
$(".governemntal_liciences_and_permissions").on("click", "#add-liciences", function ( event ) {
    $('#append-liciences-wrap').append(item);
    $('.select2').select2();
});

$(document).on('click', '.remove-liciences', function () {
    $(this).closest('.row-liciences-item').remove();
    $('.select2').select2();
})

var cultivated = `<div class="land-cultivated-row row">
                        <div class="form-group col-sm-5">
                            <label>&nbsp;</label>
                            <input class="form-control" name="land_cultivated_option[]" type="text">
                            
                        </div>
                        <div class="form-group col-sm-5">
                            <label>&nbsp;</label>
                            <select name="land_cultivated_unit[]" class="form-control select2">
                                <option value="meter">meter</option>
                                <option value="feet">feet</option>
                                <option value="feddan">feddan</option>
                                <option value="hectare">hectare</option>
                                <option value="acre">acre</option>
                            </select>
                            
                        </div>
                        <div class="col">
                            <label>&nbsp;</label>
                            <a href="javascript:void(0)" class="btn btn-danger remove-cultivated"><i class="fa fa-minus"></i></a>
                        </div>
                    
                    </div>`;
                    
// append liciences
$(".is_land_cultivated").on("click", "#add-cultivated", function ( event ) {
    $('#land-cultivated-append-wrap').append(cultivated);
    $('.select2').select2();
});

$(document).on('click', '.remove-cultivated', function () {
    $(this).closest('.land-cultivated-row').remove();
    $('.select2').select2();
});


var land_wheels = `<div class="wheels-row row">
                        <div class="form-group col-sm-5">
                            <label>&nbsp;</label>
                            <input class="form-control" name="land_wheels_option[]" type="text">
                            
                        </div>
                        <div class="form-group col-sm-5">
                            <label>&nbsp;</label>
                            <select name="land_wheels_unit[]" class="form-control select2">
                                <option value="meter">meter</option>
                                <option value="feet">feet</option>
                                <option value="feddan">feddan</option>
                                <option value="hectare">hectare</option>
                                <option value="acre">acre</option>
                            </select>
                            
                        </div>
                        <div class="col">
                            <label>&nbsp;</label>
                            <a href="javascript:void(0)" class="btn btn-danger remove-wheels"><i class="fa fa-minus"></i></a>
                        </div>
                    
                    </div>`;
                    
// append liciences
$(".has-wheels-row").on("click", "#add-wheels", function ( event ) {
    $('#wheels-append-wrap').append(land_wheels);
    $('.select2').select2();
});

$(document).on('click', '.remove-wheels', function () {
    $(this).closest('.wheels-row').remove();
    $('.select2').select2();
});



// tab

$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
    $('#tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
});

//$("input[name='project_name']").hide();
$("input[name='property_in_compound']").click(function() {
    if($(this).is(":checked")) {
        $("input[name='project_name']").show();
    } else {
        $("input[name='project_name']").hide();
    }
});
$("#contact_to_know_a_price").click(function() {
    if($(this).is(":checked")) {
        $(".contact_us_to_know").hide();
    } else {
        $(".contact_us_to_know").show();
    }
});

$(".credit-option").hide();

$("#credit_payments").click(function() {
    if($(this).is(":checked")) {
        $(".credit-option").show();
    } else {
        $(".credit-option").hide();
    }
});

// $(".add-row-wheels").hide();

$("#land_has_wheels").click(function() {
    if($(this).is(":checked")) {
        $(".add-row-wheels").show();
    } else {
        $(".add-row-wheels").hide();
    }
});

// $(".is_land_cultivated").hide();

$("#is_land_cultivated").click(function() {
    if($(this).is(":checked")) {
        $(".is_land_cultivated").show();
    } else {
        $(".is_land_cultivated").hide();
    }
});


$('.select-img-featured img').click(function(){
    var url = $(this).attr('data-src');
    $('.thumbnail').attr('src', url);
    $('input[name="featured_link"]').attr('value', url);
});

$("input:checkbox:not(.amenites-ckb, .no_change_value, .role-ckb, .form-check-input)").click(function() {

    $(this).val(this.checked ? 1 : 0);
    //console.log($("input[type=hidden][name=" + name + "]").val());
    if(this.value == 0)
        $(this).closest('form').append("<input type='hidden' name='" + this.name + "' value='0' />");
    else
        $("input[name=" + this.name + "][type=hidden]").remove();
})