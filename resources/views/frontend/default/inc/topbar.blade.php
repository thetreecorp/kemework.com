@php
    use App\Models\Continent;
    use App\Models\Country;
    use App\Models\Language;
    use App\Models\Currency;
    
    $continents = Cache::rememberForever('continents', function () {
        return Continent::where('active', 1)->get();
    });

    if (Session::has('country_code')) {
        $country_code = Session::get('country_code');
    }else{
        $country_code = 'EG';
    }

@endphp
<div class="bg-gray-500">
    <div class="lg:w-[90%] xl:w-[80%] m-auto">
        <div class="flex justify-between items-center topbar">
            <div class="z-[100] iconsystem">

                <div class="flex gap-x-1">
                    <div
                        class="bg-[#ededed] rounded-tr-full rounded-bl-[-100%] px-[10px] hover:bg-[#FFB719] border-[#FFB719] border z-[100] flex items-center relative group">
                        <i class="icon-top-header-logo-kemedar"></i>
                        <span class="text-[14px] font-semibold">Kemedar</span>
                        <div class="bg-[#f63] absolute top-[120%] left-0 hidden group-hover:block w-[350px] z-[100] rounded-md">
                            <p class="text-[13px] text-justify p-2 text-white"> In Kemedar you can enjoy many services completely
                                free of charge. You can sell or buy real estate
                                and hire workers for free in a very easy and simple way and directly contact the seller, buyer or
                                specialist technician. Specialized programs and many benefits for all those interested in real
                                estate,
                                such as agents, real estate developers, craftsmen and finishing companies, as well as freelancer
                                marketers and investors in the real estate field. And thanks our network of representatives covering
                                all areas of the countries in which we operate, we can help you check, review, verify and secure
                                your
                                deal and also finish, furnish and invest your properties in the best way. </p>
                        </div>
                    </div>
                    <div
                        class="bg-[#ededed] rounded-tr-full px-[10px] pl-[20px] ml-[-25px] border border-[#FFB719] z-[90] hover:bg-[#FFB719]  flex items-center relative group">
                        <i class="icon-top-header-logo-KEMETRO"></i>
                        <span class="text-[14px] font-semibold">Kemetro</span>
                        <div class="bg-[#f63] absolute top-[120%] left-0 hidden group-hover:block w-[350px] z-[100] rounded-md">
                            <p class="text-[13px] text-justify p-2 text-white"> In Kemedar you can enjoy many services completely
                                free of charge. You can sell or buy real estate
                                and hire workers for free in a very easy and simple way and directly contact the seller, buyer or
                                specialist technician. Specialized programs and many benefits for all those interested in real
                                estate,
                                such as agents, real estate developers, craftsmen and finishing companies, as well as freelancer
                                marketers and investors in the real estate field. And thanks our network of representatives covering
                                all areas of the countries in which we operate, we can help you check, review, verify and secure
                                your
                                deal and also finish, furnish and invest your properties in the best way. </p>
                        </div>
                    </div>
                    <div
                        class="bg-[#ededed] rounded-tr-full px-[10px] hover:bg-[#FFB719] flex items-center relative group pl-[20px] ml-[-25px] border border-[#FFB719] z-[80]">
                        <i class="icon-top-header-logo-kemmeta"></i>
                        <span class="text-[14px] font-semibold">Kemmeta</span>
                        <div class="bg-[#f63] absolute top-[120%] left-0 hidden group-hover:block w-[350px] z-[100] rounded-md">
                            <p class="text-[13px] text-justify p-2 text-white"> In Kemedar you can enjoy many services completely
                                free of charge. You can sell or buy real estate
                                and hire workers for free in a very easy and simple way and directly contact the seller, buyer or
                                specialist technician. Specialized programs and many benefits for all those interested in real
                                estate,
                                such as agents, real estate developers, craftsmen and finishing companies, as well as freelancer
                                marketers and investors in the real estate field. And thanks our network of representatives covering
                                all areas of the countries in which we operate, we can help you check, review, verify and secure
                                your
                                deal and also finish, furnish and invest your properties in the best way. </p>
                        </div>
                    </div>
                    <div
                        class="bg-[#ededed] rounded-tr-full px-[10px] hover:bg-[#FFB719] flex items-center relative group pl-[20px] ml-[-25px] border border-[#FFB719] z-[70]">
                        <i class="icon-top-header-logo-kemenews"></i>
                        <span class="text-[14px] font-semibold">kemenews</span>
                        <div class="bg-[#f63] absolute top-[120%] left-0 hidden group-hover:block w-[350px] z-[100] rounded-md">
                            <p class="text-[13px] text-justify p-2 text-white"> In Kemedar you can enjoy many services completely
                                free of charge. You can sell or buy real estate
                                and hire workers for free in a very easy and simple way and directly contact the seller, buyer or
                                specialist technician. Specialized programs and many benefits for all those interested in real
                                estate,
                                such as agents, real estate developers, craftsmen and finishing companies, as well as freelancer
                                marketers and investors in the real estate field. And thanks our network of representatives covering
                                all areas of the countries in which we operate, we can help you check, review, verify and secure
                                your
                                deal and also finish, furnish and invest your properties in the best way. </p>
                        </div>
                    </div>
                    <div
                        class="bg-[#ededed] rounded-tr-full px-[10px] hover:bg-[#FFB719] flex items-center relative group pl-[20px] ml-[-25px] border border-[#FFB719] z-[60]">
                        <i class="icon-top-header-logo-academy"></i>
                        <span class="text-[14px] font-semibold">Kemedar Academy</span>
                        <div class="bg-[#f63] absolute top-[120%] left-0 hidden group-hover:block w-[350px] z-[100] rounded-md">
                            <p class="text-[13px] text-justify p-2 text-white"> In Kemedar you can enjoy many services completely
                                free of charge. You can sell or buy real estate
                                and hire workers for free in a very easy and simple way and directly contact the seller, buyer or
                                specialist technician. Specialized programs and many benefits for all those interested in real
                                estate,
                                such as agents, real estate developers, craftsmen and finishing companies, as well as freelancer
                                marketers and investors in the real estate field. And thanks our network of representatives covering
                                all areas of the countries in which we operate, we can help you check, review, verify and secure
                                your
                                deal and also finish, furnish and invest your properties in the best way. </p>
                        </div>
                    </div>
                    <div
                        class="bg-[#ededed] rounded-tr-full px-[10px] hover:bg-[#FFB719] flex items-center relative group pl-[20px] ml-[-25px] border border-[#FFB719] z-[50]">
                        <i class="icon-top-header-logo-kemedar-reit"></i>
                        <span class="text-[14px] font-semibold">Kemedar Reit</span>
                        <div class="bg-[#f63] absolute top-[120%] left-0 hidden group-hover:block w-[350px] z-[100] rounded-md">
                            <p class="text-[13px] text-justify p-2 text-white"> In Kemedar you can enjoy many services completely
                                free of charge. You can sell or buy real estate
                                and hire workers for free in a very easy and simple way and directly contact the seller, buyer or
                                specialist technician. Specialized programs and many benefits for all those interested in real
                                estate,
                                such as agents, real estate developers, craftsmen and finishing companies, as well as freelancer
                                marketers and investors in the real estate field. And thanks our network of representatives covering
                                all areas of the countries in which we operate, we can help you check, review, verify and secure
                                your
                                deal and also finish, furnish and invest your properties in the best way. </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="topbar-right">    
                <div class="flex gap-x-6 items-center">

                    <div class="relative group z-[500]">
                        <!-- country start -->
                        <i class="icon-top-header-icons-flag"></i>
                        <div
                            class="bg-[#EDEDED] w-[350px] absolute top-[100%] right-[-100px] hidden group-hover:block rounded-lg country-topbar">
                            <div id="country-change" class="flex flex-col px-2 py-3 gap-y-4">
                                @if ($continents)
                                    @foreach ($continents as $continent)
                                        <div class="">
                                            <div class="bg-orange-300 px-[10px] py-[2px] rounded-full w-[100px]">
                                                <p class="text-center font-semibold text-white text-[14px]">{{ $continent->name }}</p>
                                            </div>
                                            <div class="grid grid-cols-2 gap-x-2 mt-2">
                                                @php

                                                    $countries = Cache::rememberForever('countries_' . $continent->code, function () use ($continent) {
                                                        return Country::where('continent_code', $continent->code)
                                                            ->where('status', 1)
                                                            ->get();
                                                    });
                                                @endphp
                                                @if ($countries)
                                                    @foreach ($countries as $country)
                                                        <div
                                                            class="hover:bg-white py-[5px] @if ($country->code == $country_code) border-red-500 border-2 rounded-full @endif">
                                                            <div class="flex items-center px-3 gap-x-2">
                                                                <a href="javascript:void(0)"
                                                                    data-country="{{ $country->code }}"><img
                                                                        class="inline-flex h-[24px] w-[24px]"
                                                                        src="{{ asset('images/flags/24/' . $country->code . '.png') }}" />
                                                                    <p class="inline-flex text-[14px]">{{ $country->name }} </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <i class="icon-top-header-icons-translate"></i>
                        <!-- lang Modal start -->
                        <div
                            class="absolute top-[100%] left-[-100px] hidden group-hover:block z-[500] bg-gray-200 pb-[110px] text-base h-[620px] w-[200px] rounded-lg">
                            <div class="">
                                <div class="flex flex-col gap-y-2 px-[10px] py-[10px]">
                                    <div class="">
                                        <div id="lang-change" class="grid grid-cols-1 gap-1">
                                            <div class="">
                                                @php
                                                    $languages = Cache::rememberForever('languages', function () {
                                                        return Language::where('enable', 1)->get();
                                                    });
                                                @endphp
                                                @if ($languages)
                                                    @foreach ($languages as $language)
                                                        <div
                                                            class="flex hover:bg-yellow-400 justify-start items-center gap-x-2 px-[5px] py-[5px] rounded-lg @if ($language->code == $locale) border-red-500 border-2 rounded-full @endif">
                                                            <a href="javascript:void(0)" data-flag="{{ $language->code }}">
                                                                <img class="inline-flex h-[24px] w-[24px]"
                                                                    src="{{ asset('images/flags/24/' . $language->code . '.png') }}" />
                                                                <span
                                                                    class="inline-flex text-[14px] whitespace-nowrap">{{ $language->name }}</span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- lang Modal end -->
                    </div>


                    <div class="relative group">
                        <i class="icon-top-header-icons-dollar-symbol"></i>
                        <!-- Currency Modal start -->
                        <div
                            class="absolute top-[100%] left-[-100px] hidden group-hover:block bg-gray-200 z-[500] pb-[110px] text-base w-[220px] h-[780px] rounded-lg">
                            <div class="">
                                <div class="flex flex-col gap-y-2 px-[10px] py-[10px]">
                                    <div class="">
                                        <div class="grid grid-cols-1 gap-0" id="currency-change">
                                            @php
                                                if (Session::has('currency_code')) {
                                                    $currency_code = Session::get('currency_code');
                                                } else {
                                                    $currency_code = 'USD';
                                                }

                                                $currencies = Cache::rememberForever('currencies', function () {
                                                    return Currency::all();
                                                });

                                            @endphp
                                            @foreach ($currencies as $key => $currency)
                                                <div
                                                    class="flex hover:bg-yellow-400 justify-center gap-x-2 py-[3px] rounded-lg @if ($currency->code == $currency_code) border-red-500 border-2 rounded-full @endif">
                                                    <a class="text-[14px]" href="javascript:void(0)"
                                                        data-currency="{{ $currency->code }}">{{ $currency->name }}
                                                        ({{ $currency->symbol }})
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Currency Modal end -->
                    </div>

                    <div class="relative group">
                        <i class="icon-top-header-icons-increase"></i>
                        <!-- Benefits Modal start -->
                        <div
                            class="absolute top-[100%] right-[-100px] hidden group-hover:block bg-gray-200 z-[500] pb-[110px] text-base  w-[770px] h-[320px] rounded-lg user-beneits">
                            <div class="">
                                <div class="flex flex-col gap-y-2 px-[10px] py-[20px]">
                                    <div class="text-center mb-[20px]"><span
                                            class="bg-[#AF3B3B] text-white px-2 py-2 rounded font-semibold"> {{ translate('User Benefits') }} </span></div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] ">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-advertiser"></i>
                                                <span class="text-[14px]">{{ translate('Advertisers') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-Product-buyers"></i>
                                                <span class="text-[14px]">{{ translate('Property Buyer') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-product-seller"></i>
                                                <span class="text-[14px]">{{ translate('Property Seller') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit--affiliate"></i>
                                                <span class="text-[14px]">{{ translate('Affiliates') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-investor"></i>
                                                <span class="text-[14px]">{{ translate('Investor') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-franchise_owner"></i>
                                                <span class="text-[14px]">{{ translate('Franchise owner area') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-franchise_owner_country"></i>
                                                <span class="text-[14px]">{{ translate('Franchise owner country') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-Job-seeker"></i>
                                                <span class="text-[14px]">{{ translate('Job Seeker') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-Store-collaborator"></i>
                                                <span class="text-[14px]">{{ translate('Store collaborator') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-Real-estate-agent"></i>
                                                <span class="text-[14px]">{{ translate('Real estate agent') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-professional-and-technican"></i>
                                                <span
                                                    class="text-[14px]">{{ translate('Professional and Technican') }}</span>
                                            </a>
                                        </div>
                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-for-Finishing-company"></i>
                                                <span class="text-[14px]">{{ translate('Finishing company') }}</span>
                                            </a>
                                        </div>

                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-kemmeta-memeber"></i>
                                                <span class="text-[14px]">{{ translate('Kemmeta Member') }}</span>
                                            </a>
                                        </div>


                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-instructor"></i>
                                                <span class="text-[14px]">{{ translate('Trainer or Instructor') }}</span>
                                            </a>
                                        </div>

                                        <div class="flex hover:bg-yellow-400 justify-start gap-x-2 py-[4px] px-[10px] rounded-lg">
                                            <a href="">
                                                <i class="icon-mmm_user-benefit-academy-student"></i>
                                                <span class="text-[14px]">{{ translate('Academy Student') }}</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Benefits Modal end -->
                    </div>

                    <div class="relative group">
                        <i class="icon-top-header-icons-info"></i>
                        <!-- About Us Modal start -->
                        <div
                            class="absolute top-[100%] right-[-100px] hidden group-hover:block bg-gray-200 z-[500] pb-[110px] text-base w-[700px] h-[500px] rounded-lg">
                            <div class="">
                                <div class="flex flex-col gap-y-2 px-[10px] py-[20px]">
                                    <div class="text-center mb-[10px]"><span
                                            class="bg-[#AF3B3B] text-white px-2 py-2 rounded font-semibold"> About Us </span></div>
                                    <div class="">
                                        <div class="grid grid-cols-3 gap-1">
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Mission</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>President Message</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Our Business Model</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Business Strategy</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Mission</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Our Beautiful Minds</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Our Main Brands</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Products &amp; Services</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>What is new in kemedar</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Kemedar in Numbers</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Our users Groups</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Why We are Different?</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Our Companies</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Our Offices</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>What is Proptech?</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Opprtunities in Proptech</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Proptech in Numbers</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Alternative Living</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Buy-Sale Transaction</span></div>
                                                </div>
                                            </div>
                                        
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Dataroom For Investors</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Videos &amp; media</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Our Main Systems</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Contact Us</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Coverd Countries</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Stats Map</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="flex bg-white hover:bg-yellow-400 justify-center gap-x-2 py-[8px] px-[10px] rounded-lg">
                                                    <div class="text-center"><span>Management &amp; construction</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About Modal end -->
                    </div>

                    <div class="relative group">
                        <i class="icon-top-header-icons-call"></i>
                        <!-- Contact Modal start -->
                        <div
                            class="absolute top-[100%] right-[-80px] hidden group-hover:block bg-gray-200 z-[500] pb-[110px] text-base w-[300px] h-[550px] rounded-lg contact-menu">
                            <div class="">
                                <div class="flex flex-col gap-y-2 px-[10px] py-[20px]">
                                    <div class="text-center mb-[10px]"><span
                                            class="bg-[#EABD3F] text-white px-2 py-2 rounded font-semibold"> We Are Here For You
                                        </span></div>
                                    <div class="">
                                        <div class="grid grid-cols-1 gap-3">
                                            <div class="">
                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fa fa-phone text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Phone Call:+18506770727</span></div>
                                                </div>

                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fa fa-comment text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Chat with us</span></div>
                                                </div>
                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fa fa-microphone text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Voice chat</span></div>
                                                </div>

                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fa fa-video text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Video chat</span></div>
                                                </div>
                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fa fa-envelope text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Email</span></div>
                                                </div>
                                                <div class="flex  hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fa fa-rss text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Feedback</span></div>
                                                </div>
                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fab fa-whatsapp text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Whatsapp</span></div>
                                                </div>
                                                <div class="flex  hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fab fa-viber text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Viber</span></div>
                                                </div>
                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fab fa-skype text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Skype</span></div>
                                                </div>
                                                <div class="flex  hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fab fa-telegram text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Telegram</span></div>
                                                </div>
                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fab fa-facebook-messenger text-[#EABD3F] group-hover:text-black"></i>
                                                    </div>
                                                    <div class="col-span-2"><span>Messenger</span></div>
                                                </div>
                                                <div class="flex hover:bg-yellow-400 gap-x-3 py-[8px] px-[20px] rounded-lg group">
                                                    <div class=""><i
                                                            class="fa fa-phone text-[#EABD3F] group-hover:text-black"></i></div>
                                                    <div class="col-span-2"><span>Call me back</span></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Modal end -->
                    </div>

                    @if (!Auth::check())
                        <div class="relative group z-[500]">
                            <a class="" href="#formLogin" data-target="#quickLogin" data-toggle="modal">
                                <i class="icon-top-header-icons-log-in"></i>
                            </a>
                        </div>


                        <div class="relative group">
                            <a class="" href="#formRegister" data-target="#quickLogin" data-toggle="modal">
                                <i class="icon-top-header-icons-signup"></i>
                            </a>
                            <!-- Signup Modal start -->
                            
                            <!-- signup Modal end -->
                        </div>
                    @else
                        <div class="">

                            <button type="button" data-bs-toggle="dropdown" aria-expanded="false" class="flex rounded-full"
                                id="dropdownSubNav" aria-expanded="false">
                                @if (Auth::user()->avatar_image != '')
                                    <img class="h-8 w-8 rounded-full" src=" {{ Auth::user()->avatar_image }}" alt="">
                                @else
                                    <span
                                        class="flex items-center bg-white justify-center h-8 w-8 rounded-full">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                @endif
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSubNav">
                                @php /*
                                <a href="{{ route('manager.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
                                <a href="{{ route('manager.profile.index') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
                                <a href="{{ route('account.logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                    */ @endphp
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>            
</div>    