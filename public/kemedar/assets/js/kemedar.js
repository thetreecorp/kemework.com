'use strict';
var myApp = (function ($) {
    let KemedarApp = {};
    KemedarApp.init = function () {
        KemedarApp.$body = $(document.body);

        KemedarApp.$formSearch = $('#agents-filter-form');
        KemedarApp.agentListing = '.agents-listing';
        KemedarApp.$formProjectSearch = $('#projects-filter-form');
        KemedarApp.projectListing = '.projects-listing';
        KemedarApp.$projectListing = $(KemedarApp.projectListing);;

        KemedarApp.$agentListing = $(KemedarApp.agentListing);
        this.agentsFilter();
        this.projectsFilter();

        this.toolbarOrderingAgents();

    }

    KemedarApp.convertFromDataToArray = function (formData) {
        let data = [];
        formData.forEach(function (obj) {
            if (obj.value) {
                // break with price
                if (['min_price', 'max_price'].includes(obj.name)) {
                    const dataValue = formData.$formSearch
                        .find('input[name=' + obj.name + ']')
                        .data(obj.name.substring(0, 3));
                    if (dataValue == parseInt(obj.value)) {
                        return;
                    }
                }
                data.push(obj);
            }
        });
        return data;
    };


    let isReadySubmitTrigger = true;
    KemedarApp.agentsFilter = function () {


        $(document).on('change', '#agents-filter-form .agent-filter-item', function () {
            if (isReadySubmitTrigger) {
                $(this).closest('form').trigger('submit');
            }
        });


        $('.catalog-toolbar__ordering input[name=sort-by]').on('change', function (e) {
            KemedarApp.$formSearch.find('input[name=sort-by]').val($(e.currentTarget).val());
            KemedarApp.$formSearch.trigger('submit');
        });


        $(document).on('submit', '#agents-filter-form', function (e) {
            e.preventDefault();
            const $form = $(e.currentTarget);
            const formData = $form.serializeArray();
            let data = KemedarApp.convertFromDataToArray(formData);
            let uriData = [];

            // Paginate
            const $elPage = KemedarApp.$agentListing.find('input[name=page]');
            if ($elPage.val()) {
                data.push({ name: 'page', value: $elPage.val() });
            }

            // Without "s" param
            data.map(function (obj) {
                uriData.push(encodeURIComponent(obj.name) + '=' + obj.value);
            });

            const nextHref =
                $form.attr('action') +
                (uriData && uriData.length ? '?' + uriData.join('&') : '');

            // add to params get to popstate not show json
            data.push({ name: '_', value: +new Date() });

            $.ajax({
                url: $form.attr('action'),
                type: 'GET',
                data: data,
                beforeSend: function () {
                    // Show loading before sending
                    KemedarApp.$agentListing.addClass('content-loading');
                    // Animation scroll to filter button
                    $('html, body').animate({scrollTop: KemedarApp.$agentListing.offset().top - 200}, 500);
                },
                success: function (res) {
                    if (res.error == false) {
                        KemedarApp.$agentListing.html(res.data);

                        const total = res.message;
                        if (total && $('.agents-found').length) {
                            $('.agents-found').html('<span class="color-green-900 me-1">' + total.substr(0, total.indexOf(' ')) +
                                '</span>' + total.substr(total.indexOf(' ') + 1))
                        }


                        if (nextHref != window.location.href) {
                            window.history.pushState(
                                data,
                                res.message,
                                nextHref
                            );
                        }
                    } else {
                        //KemedarApp.showError(res.message || 'Opps!');
                    }
                },
                error: function (res) {
                    //KemedarApp.handleError(res);
                },
                complete: function () {
                    $('.lazy').lazy({
                        successLoader: function(element) {
                        element.hide();
                    }
                    });
                    KemedarApp.$agentListing.removeClass('content-loading');
                },
            });
        });

        window.addEventListener(
            'popstate',
            function () {
                let url = window.location.origin + window.location.pathname;
                if (KemedarApp.$formSearch.length) {
                    KemedarApp.$formSearch.attr('action', url);
                    const parseParams = KemedarApp.parseParamsSearch();
                    KemedarApp.changeInputInSearchForm(parseParams);
                    KemedarApp.$formSearch.trigger('submit');
                } else {
                    history.back();
                }
            },
            false
        );

        $(document).on(
            'click',
            KemedarApp.agentListing + ' .paginations a',
            function (e) {
                e.preventDefault();
                let url = new URL($(e.currentTarget).attr('href'));
                let page = url.searchParams.get('page');
                KemedarApp.$agentListing.find('input[name=page]').val(page);
                KemedarApp.$formSearch.trigger('submit');
            }
        );
    };

    KemedarApp.saveSearches = function($divId){
        $(document).on('click', '#saveSearch', function (e) {
            e.preventDefault();

            var data = [];
            data.push({ 'name': 'type' , 'value': $(this).data('type')});
            $($divId).find('input, select')
            .each(function (e, i) {
                const $el = $(i);
                
                const name = $el.attr('name');
                const value = $el.val() || null;
                if($el.attr('type') == 'checkbox'){
                    if ($el.is(":checked")) {
                        data.push({ 'name' : name , 'value': value} );
                    }
                }else{
                    data.push({ 'name' : name , 'value': value} );
                }
            });

            $.ajax({
                url: $(this).data('url'),
                type: 'POST',
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (res) {
                    if(res.status == 'success'){
                        show_toastr('Success', res.message, 'success');
                    }else{
                        show_toastr('Warning', res.message, 'error');
                    }
                }
            })

        });
    }

    KemedarApp.projectsFilter = function () {


        $(document).on('change', '#projects-filter-form .project-filter-item', function () {
            if (isReadySubmitTrigger) {
                $(this).closest('form').trigger('submit');
            }
        });


        $('.catalog-toolbar__ordering input[name=sort-by]').on('change', function (e) {
            KemedarApp.$formProjectSearch.find('input[name=sort-by]').val($(e.currentTarget).val());
           
        });


        $(document).on('submit', '#projects-filter-form', function (e) {
            e.preventDefault();
            const $form = $(e.currentTarget);
            const formData = $form.serializeArray();
            let data = KemedarApp.convertFromDataToArray(formData);
            let uriData = [];

            // Paginate
            const $elPage = KemedarApp.$projectListing.find('input[name=page]');
            if ($elPage.val()) {
                data.push({ name: 'page', value: $elPage.val() });
            }

            // Without "s" param
            data.map(function (obj) {
                uriData.push(encodeURIComponent(obj.name) + '=' + obj.value);
            });

            const nextHref =
                $form.attr('action') +
                (uriData && uriData.length ? '?' + uriData.join('&') : '');

            // add to params get to popstate not show json
            data.push({ name: '_', value: +new Date() });

            $.ajax({
                url: $form.attr('action'),
                type: 'GET',
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                beforeSend: function () {
                    // Show loading before sending
                    KemedarApp.$projectListing.addClass('content-loading');
                    // Animation scroll to filter button
                    $('html, body').animate({scrollTop: KemedarApp.$projectListing.offset().top - 200}, 500);
                },
                success: function (res) {
                    if (res.error == false) {
                        KemedarApp.$projectListing.html(res.data);

                        const total = res.message;
                        if (total && $('.projects-found').length) {
                            $('.projects-found').html('<span class="color-green-900 me-1">' + total.substr(0, total.indexOf(' ')) +
                                '</span>' + total.substr(total.indexOf(' ') + 1))
                        }


                        if (nextHref != window.location.href) {
                            window.history.pushState(
                                data,
                                res.message,
                                nextHref
                            );
                        }
                    } else {
                        //KemedarApp.showError(res.message || 'Opps!');
                    }
                },
                error: function (res) {
                    //KemedarApp.handleError(res);
                },
                complete: function () {
                    $('.lazy').lazy({
                        successLoader: function(element) {
                            element.hide();
                        }
                    });
                    $(".property-slider").slick({
                        dots: true,
                        infinite: true,
                        speed: 500,
                        arrows: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    });
                    KemedarApp.$projectListing.removeClass('content-loading');
                },
            });
        });

        window.addEventListener(
            'popstate',
            function () {
                let url = window.location.origin + window.location.pathname;
                if (KemedarApp.$formProjectSearch.length) {
                    KemedarApp.$formProjectSearch.attr('action', url);
                    const parseParams = KemedarApp.parseParamsSearch();
                    KemedarApp.changeInputInSearchForm(parseParams);
                    KemedarApp.$formProjectSearch.trigger('submit');
                } else {
                    history.back();
                }
            },
            false
        );

        $(document).on(
            'click',
            KemedarApp.projectListing + ' .paginations a',
            function (e) {
                e.preventDefault();
                let url = new URL($(e.currentTarget).attr('href'));
                let page = url.searchParams.get('page');
                KemedarApp.$projectListing.find('input[name=page]').val(page);
                KemedarApp.$formProjectSearch.trigger('submit');
            }
        );
    };


    KemedarApp.parseParamsSearch = function (query, includeArray = false) {
        let pairs = query || window.location.search.substring(1);
        let re = /([^&=]+)=?([^&]*)/g;
        let decodeRE = /\+/g;  // Regex for replacing addition symbol with a space
        let decode = function (str) {
            return decodeURIComponent(str.replace(decodeRE, " "));
        };
        let params = {}, e;
        while (e = re.exec(pairs)) {
            let k = decode(e[1]), v = decode(e[2]);
            if (k.substring(k.length - 2) == '[]') {
                if (includeArray) {
                    k = k.substring(0, k.length - 2);
                }
                (params[k] || (params[k] = [])).push(v);
            } else params[k] = v;
        }
        return params;
    }

    KemedarApp.changeInputInSearchForm = function (parseParams) {
        isReadySubmitTrigger = false;
        KemedarApp.$formSearch
            .find('input, select, textarea')
            .each(function (e, i) {
                const $el = $(i);
                const name = $el.attr('name');
                let value = parseParams[name] || null;
                const type = $el.attr('type');
                switch (type) {
                    case 'checkbox':
                        $el.prop('checked', false);
                        if (Array.isArray(value)) {
                            $el.prop('checked', value.includes($el.val()));
                        } else {
                            $el.prop('checked', !!value);
                        }
                        break;
                    default:
                        if ($el.is('[name=max_price]')) {
                            $el.val(value || $el.data('max'));
                        } else if ($el.is('[name=min_price]')) {
                            $el.val(value || $el.data('min'));
                        } else if ($el.val() != value) {
                            $el.val(value);
                        }
                        break;
                }
            });
        isReadySubmitTrigger = true;
    };


    KemedarApp.UserAjaxFilter = function ($formID) {
        KemedarApp.$body = $(document.body);
        $('.catalog-toolbar__ordering input[name=sort-by]').on('change', function (e) {
            $($formID).find('input[name=sort-by]').val($(e.currentTarget).val());
            $($formID).trigger('submit');
        });


        $(document).on('submit', $formID, function (e) {
            e.preventDefault();
            const $form = $(e.currentTarget);
            const formData = $form.serializeArray();
            let data = KemedarApp.convertFromDataToArray(formData);
            let uriData = [];

            // Paginate
            const $elPage = $('.users-listing').find('input[name=page]');
            if ($elPage.val()) {
                data.push({ name: 'page', value: $elPage.val() });
            }

            // Without "s" param
            data.map(function (obj) {
                uriData.push(encodeURIComponent(obj.name) + '=' + obj.value);
            });

            const nextHref =
                $form.attr('action') +
                (uriData && uriData.length ? '?' + uriData.join('&') : '');

            // add to params get to popstate not show json
            data.push({ name: '_', value: +new Date() });

            $.ajax({
                url: $form.attr('action'),
                type: 'GET',
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                beforeSend: function () {
                    // Show loading before sending
                    $('.users-listing').addClass('content-loading');
                    // Animation scroll to filter button
                    $('html, body').animate({scrollTop: $('.users-listing').offset().top - 200}, 500);
                },
                success: function (res) {
                    if (res.error == false) {
                        $('.users-listing').html(res.data);

                        const total = res.message;
                        if (total && $('.projects-found').length) {
                            $('.projects-found').html('<span class="color-green-900 me-1">' + total.substr(0, total.indexOf(' ')) +
                                '</span>' + total.substr(total.indexOf(' ') + 1))
                        }


                        if (nextHref != window.location.href) {
                            window.history.pushState(
                                data,
                                res.message,
                                nextHref
                            );
                        }
                    } else {
                        //KemedarApp.showError(res.message || 'Opps!');
                    }
                },
                error: function (res) {
                    //KemedarApp.handleError(res);
                },
                complete: function () {
                    $('[data-bs-toggle="tooltip"]').tooltip();
                    feather.replace();
                    $('.lazy').lazy({
                            successLoader: function(element) {
                            element.hide();
                        }
                    });
                    $(".property-slider").slick({
                        dots: true,
                        infinite: true,
                        speed: 500,
                        arrows: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    });
                    $('.users-listing').removeClass('content-loading');
                },
            });
        });

        /*window.addEventListener(
            'popstate',
            function () {
                let url = window.location.origin + window.location.pathname;
                if (KemedarApp.$formProjectSearch.length) {
                    KemedarApp.$formProjectSearch.attr('action', url);
                    const parseParams = KemedarApp.parseParamsSearch();
                    KemedarApp.changeInputInSearchForm(parseParams);
                    KemedarApp.$formProjectSearch.trigger('submit');
                } else {
                    history.back();
                }
            },
            false
        );*/

        $(document).on(
            'click',
            '.users-listing .paginations a',
            function (e) {
                e.preventDefault();
                let url = new URL($(e.currentTarget).attr('href'));
                let page = url.searchParams.get('page');
                $('.users-listing').find('input[name=page]').val(page);
                $($formID).trigger('submit');
            }
        );
    };


    KemedarApp.toolbarOrderingAgents = function () {
        KemedarApp.$body.on(
            'click',
            '.catalog-toolbar__ordering .dropdown .dropdown-menu a',
            function (e) {

                e.preventDefault();
                const $this = $(e.currentTarget);
                const $parent = $this.closest('.dropdown');
                $parent.find('.dropdown-menu a').removeClass('active');
                $this.closest('.dropdown-menu a').addClass('active');
                $parent.find('a[data-bs-toggle=dropdown] span').html($this.html());
                $this.closest('.catalog-toolbar__ordering').find('input[name=sort-by]').val($this.data('value')).trigger('change');
            }
        );
    };


    KemedarApp.getAjaxProvinces = function(){
        $("#country_id").change(function(){
            var  country_id=$('#country_id').val();
            
            $.ajax({
                url: $(this).data('url'),
                data: {"country": country_id},
                method: "GET",
                datatype: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                beforeSend: function () {
                    $('#city_id').html('');
                },
                success: function(result) {
                    //alert(JSON.stringify(result));
                    $('#province_id').html(result);
                },
            });
        });
    }


    KemedarApp.getAjaxCities = function(){
        $("#province_id").change(function(){
            var  province_id=$('#province_id').val();
            $.ajax({
                url: $(this).data('url'),
                data: {"province_id": province_id},
                method: "GET",
                datatype: "json",
                success: function(result) {
                    $('#city_id').html(result);
                },
                error: function(response) {
                    //alert(JSON.stringify(response));
                },
              
            });
          //  search();
        });
    }


    KemedarApp.getVisitSession = function($url){
        $(".select_date").click(function(){
            var date =$(this).data('date');
            var user_id = $("input[name=owner_id]").val();
            $.ajax({
                url: $url,
                data: {"date": date , "user_id" : user_id },
                method: "GET",
                datatype: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                context: this,
                beforeSend: function () {
                    $('.select_date').removeClass('active');
                    $('#sLot').html('');
                },
                success: function(result) {
                    //alert(JSON.stringify(result));
                    $(this).addClass('active');
                    $('#sLot').html(result.data);
                },
            });
        });
    }

    KemedarApp.bookVisit = function($url){
        $("#bookBTNVisit").click(function(){
            var date = $('.select_date.active').data('date');
            var client = $("input[name=client_id]").val();
            var owner = $("input[name=owner_id]").val();
            var time = $("#selectTime").val();
            $.ajax({
                url: $url,
                data: {"date": date , "client": client, "owner": owner, "time": time},
                method: "POST",
                datatype: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                context: this,
              
                success: function(result) {
                    if(result.status == 'success'){
                        $('#bookVisit').modal('hide');
                        show_toastr('Success', result.message, 'success');
                    }
                    if(result.status == 'warning'){
                        show_toastr('Warning', result.message, 'warning');
                    }
                },
            });
        });
    }



    return KemedarApp;

})(jQuery);
