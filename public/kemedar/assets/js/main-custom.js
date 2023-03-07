
$(document).ready(function() {
    $('.dropdown-toggle').dropdown();
    $('.select2').select2();
$('.select2-multi').select2({
    multiple: true,
});
$('.select2.max3').select2({
    maximumSelectionLength: 3
});
$('.summernote').summernote({
    height: "250"
});
});

$(document).on('select2:select','.select_load_option', function(e) {    
    var type = $(this).find(":selected").data("type");
    if(type == 'city') {
       // $('#city-load').html('');
        $('#district-load').html('');
        $('#area-load').html('');
    }
    if(type == 'district') {
        $('#area-load').html('');
        $('#district-load').html('');
    }
    if(type == 'area') {
        $('#area-load').html('');
    }
    $.ajax({
       // dataType: 'json',
        type: 'post',
        url: homeUrl + "/ajax-load-city/"+this.value,
        data: {'type' : type},
        success:function(data){
            //console.log(data);
            
            if(data.count)
                $('#' + type + '-load').html(data.html);
            else
                $('#' + type + '-load').html('')
            $('.select2').select2();
        }
    });   
    
});

var addOrReplaceParam = function(url, param, value) {
    param = encodeURIComponent(param);
    var r = "([&?]|&amp;)" + param + "\\b(?:=(?:[^&#]*))*";
    var a = document.createElement('a');
    var regex = new RegExp(r);
    var str = param + (value ? "=" + encodeURIComponent(value) : ""); 
    a.href = url;
    var q = a.search.replace(regex, "$1"+str);
    if (q === a.search) {
       a.search += (a.search ? "&" : "") + str;
    } else {
       a.search = q;
    }
    return a.href;
 }

// button top filter click'
var findProperty = homeUrl + '/find-property';
var urlWithClickMenu = '';
urlWithClickMenu = addOrReplaceParam(findProperty, 'type', 'sale');
$(document).on('click','.btn-search-top', function(e) {    
    var type = 'sale';
    var currentUrl = window.location.href;
    type = $(this).attr("data");
    urlWithClickMenu = addOrReplaceParam(findProperty, 'type', type);
    $('.btn-search-top').not(this).addClass('normal-button');
    $(this).removeClass('normal-button').addClass('active-button');
    $('.cat-top-wrap').show();
    $('.suitable-for-wrap').hide();
    $('.suitable-for-btn').removeClass('active-button');
});
$(document).on('click','.btn-a-menu-top', function(e) {    
    category = $(this).attr("data");
    urlWithClickMenu = addOrReplaceParam(urlWithClickMenu, 'category', category);
   // console.log(urlWithClickMenu);
   location.replace(urlWithClickMenu);
});
$(document).on('click','.suitable-for-btn', function(e) {
    $('.cat-top-wrap').hide();
    $('.suitable-for-wrap').show();
    type = $(this).attr("data");
    $('.btn-search-top').addClass('normal-button').removeClass('active-button');
    $(this).addClass('active-button');
    urlWithClickMenu = addOrReplaceParam(findProperty, 'type', type);
});

$('input.role-ckb').on('change', function() {
   $('input.role-ckb').not(this).prop('checked', false);
    let text = ($(this).next('label').text());
    $(this).attr('value', text);
    
    let role = $(this).closest('.accordion-item').find('.accordion-header').attr('data-role');
    if(role == "none")
        role = $(this).next('label').text();
        
    // console.log(role);

    $('#role_selected').attr('value',  role);
});

$('input.permission-ckb').on('change', function() {
    let text = ($(this).next('label').text());
    $(this).attr('value', text);
});

$("#use_email").click(function() {
    if($(this).is(":checked")) {
        $(".email-register").show();
    } else {
        $(".email-register").hide();
    }
});

$('#accordionFlushExample').on('shown.bs.collapse', function (e) {
    
    let id = (e.target.id);
    let role = $('#' + id).closest('.accordion-item').find('.accordion-header').attr('data-role');
    
    if(role != 'none')
        $('#role_selected').attr('value',  role);
    else
        $('#role_selected').val('');
        
    $('input.role-ckb').prop('checked', false);
    $('input.permission-ckb').prop('checked', false);

});

$('[data-bs-toggle="modal"]').on('click', function() { 
    
    $('.modal').not($(this).data('target')).modal('hide');

});

var loading = `<div class="text-center">
                    <div class="spinner-border" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                </div>`;
var message = ``;

$( document ).ready(function() {
    $( "#register-form" ).submit(function(e) {
        e.preventDefault();
        $('#error-mess').html('');
        $('#flush-headingOne').removeClass('border-error');
        $('#checkbox-agree').removeClass('border-cb-error');
        if($("#register-form")[0].checkValidity()) {
            if(!$('#role_selected').val()) {
                $('#flush-headingOne').addClass('border-error');
                $('#error-mess').html(`<p class="red">Please select role</p>`);
                return false;
            }
            // if(!$('#register-form input.role-ckb').is(':checked')){
            //     $('#flush-headingOne').addClass('border-error');
            //     return false;
            // }
            if(!$('#register-form input[name="agree-ckb"]').is(':checked')){
                $('#checkbox-agree').addClass('border-cb-error');
                return false;
            }
           
            // run ajax here
            let data = $('#register-form').serialize() + "&call_back_uri=" + $('#from_domain').val();
            $("#submit-register").attr("disabled", true);
            $.ajax({
                type: "POST",
                url: ssoUrl + 'api/auth/register',
                data: data,
                CrossDomain:true,
                async: false,
                dataType: 'json',
                //processData: false,
                beforeSend: function(){
                   $('#loading-ajax').append(loading);
                },
                complete: function(){
                  // $('#loading-ajax').append(loading);
                },
                success: function(data) {
                    //$('#loading-ajax').html('');
                    //console.log(data);
                    // run second ajax
                    
                    $.ajax({
                        // dataType: 'json',
                        type: 'post',
                        url: homeUrl + "/create-user",
                        data: {
                            'first_name' : data.user.first_name,
                            'last_name' : data.user.last_name,
                            'user_uid' : data.user.user_uid,
                            'role' : data.user.role,
                            'permission' : data.user.permission,
                            '_token' : $('meta[name="csrf-token"]').attr('content'),
                        
                        },
                        beforeSend: function(){
                           // $('#loading-ajax').append(loading);
                        },
                        complete: function(){
                            
                        },
                        success:function(data){
                            $('#loading-ajax').html('');
                            $("#submit-register").attr("disabled", false);
                            if(data.code == 200) {
                                Swal.fire({
                                    title: data.message,
                                    //text: "You won't be able to revert this!",
                                    icon: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Ok'
                                  }).then((result) => {
                                    if (result.isConfirmed) {
                                        $("#quickRegister").modal('hide');
                                        $("#quickLogin").modal('show');
                                        $( "#register-form" )[0].reset();
                                    }
                                  })
                            }
                        },
                        error: function(xhr, status, error) {
                            $('#loading-ajax').html('');
                            var err = eval("(" + xhr.responseText + ")");
                            console.log(err);
                            $("#submit-register").attr("disabled", false);
                        }
                        
                    });  
                    
                    
                },
                error: function(xhr, status, error) {
                    $('#loading-ajax').html('');
                    var err = eval("(" + xhr.responseText + ")");
                    if(xhr.status == 422) {
                        Swal.fire(
                            'Error',
                            'The phone has already been taken.',
                            'error'
                        )
                    }
                    
                }
            });
           
        }

        
    });
    showPopup();
    // ajax remove file idrive
    $(document).on('click','.idrive-rm', function(e) {
        let path = $(this).attr('data-name');
        let rmElement = $(this).closest('.form-group.col-sm-3');
        rmElement.remove();
        $(this).closest('.file-upload').remove();
        $.ajax({
            // dataType: 'json',
            type: 'post',
            url: homeUrl + "/delete-file",
            data: {
                'file' : path,
                'property_id' : $('#prpt_hidden').val(),
                'project_id' : $('#project_hidden').val(),
                'type': $(this).attr('data-type'),
                'id': $(this).attr('data-id'),
                '_token' : $('meta[name="csrf-token"]').attr('content'),
            
            },
            beforeSend: function(){
            },
            complete: function(){
                
            },
            success:function(data){
                
                if(data.code == 200) {
                    
                    Swal.fire({
                        title: data.message,
                        //text: "You won't be able to revert this!",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                      }).then((result) => {
                        
                      })
                }
                else {
                    Swal.fire({
                        title: data.message,
                        icon: 'error',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                      }).then((result) => {
                       
                      })
                }
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err);
            }
            
        });  
    });
});



$(document).on('click','.toggle-btn ', function(e) {    
    $(this).closest('.form-group.col-sm-6').next( ".toggle-div" ).toggleClass('d-none');
});
$(document).on('click','.tag-list span', function(e) {    
    let tag_id = $(this).attr("data-id");
    let tag_name = $(this).text();
    //console.log(tag_name);
    $('input[name="tags"]').tagsinput('add', tag_name);
    addMoreTags(tag_id);
});

$('input[name="tags"]').on('itemRemoved', function(event) {
    // event.item: contains the item
    console.log(event.item);
    let element = $(".tag-list span:contains('"+event.item+"')").attr('data-id');
    console.log(element);
    removeTag(element);
});

function addMoreTags(tagId) {
    $('#tags_id').val(function(i,val) { 
        let old = (val);
        var array = val.split(',') ? val.split(',') : [] ;
        if(!array.includes(tagId))
            return val + (!val ? '' : ',') + tagId;
        else
            return val;
    });
}

function onlyUnique(value, index, array) {
    return self.indexOf(value) === index;
}

function addMoreElement(element, tagId) {
    $(element).val(function(i,val) { 
        let old = (val);
        var array = val.split(',') ? val.split(',') : [] ;
        if(!array.includes(tagId))
            val = val + (!val ? '' : ',') + tagId;
        else
            val = val;
        //console.log(val);    
        var array = val.split(',');
        var unique = array.filter((value, index, array) => array.indexOf(value) === index);
        return unique.toString();
        
        
    });
}

function removeTag(tagId) {
    $('#tags_id').val(function(i,val) { 
        let old = (val);
        var array = val.split(',') ? val.split(',') : [] ;
        if(array.includes(tagId)) {

            const index = array.indexOf(tagId);
            if (index > -1) { 
              array.splice(index, 1); 
            }
            return array.join(",");
        }

        else
            return val;
    });
}

// check url and opend popup
function getURLParameter(name) {
    return decodeURI(
        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
    );
}

function showPopup() {
    if(getURLParameter('show'))
        $('#' + getURLParameter('show')).modal('show');
}


$('.grid-layout-view-custom').on('click', function (e) {
    $('.collection-grid-view').css('opacity', '1');
    $('.property-wrapper-grid').removeClass("list-view");
    $(".property-wrapper-grid").children().children().removeClass();
    $(".property-wrapper-grid").children().children().addClass("col-lg-6");
    $('#layout_type').attr("value", 'col-lg-6');
    $('.search-top-head').find('li').removeClass('active');
    $(this).closest('li').addClass('active');

});

$('.item-3-layout-view').on('click', function (e) {
    if ($('.property-wrapper-grid').hasClass("list-view")) { } else {
        $(".property-wrapper-grid").children().children().removeClass();
        $(".property-wrapper-grid").children().children().addClass("col-lg-4 col-6");
        $('#layout_type').attr("value", 'col-lg-4 col-6');
        $('.search-top-head').find('li').removeClass('active');
        $(this).closest('li').addClass('active');
    }
});