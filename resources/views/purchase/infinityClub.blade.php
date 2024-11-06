@extends('layouts.header')
@section('content')
<main id="main" class="main">
    <section id="poolcommission" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>INFINITY CLUB CARDS</h1>
                        <div class="col-12">
                            <p class="text-white responsive-p1">@lang('purchase.club.li1')</p>
                        </div>
                        <div class="card shadow my-3">
                            <div class="card-header py-3">
                                <div class="col-12">
                                    <div class="info-box mb-4 shadow">
                                        <span class="info-box-icon "><i class="bi bi-star-fill text-dark"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">INFINITY CLUB CARDS</span>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="landing" value="https://landingpage.infinityclubcards.com/nikki99">
                                                        <button class=" btn btn-dark orderbtn linkcopy px-4" type="button" onclick=" FunctionCopy1()">@lang('purchase.club.copy')</button>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="referral" value="https://register.infinityclubcards.com/nikki99">
                                                        <button class=" btn btn-dark orderbtn linkcopy px-4 mr-3" type="button" onclick=" FunctionCopy2()">@lang('purchase.club.copy')</button>

                                                        <a href="https://register.infinityclubcards.com/nikki99" target="_blank" class=" btn btn-dark orderbtn linkcopy px-4">LINK</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="info-box mb-4 shadow">
                                        <div class="info-box-content">
                                            <span class="info-box-text mb-3">@lang('purchase.club.li2') INFINITY CLUB CARDS</span>
                                            <div class="row">
                                                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <div class="row g-3 px-2">

                                                        <div class="col-lg-6">
                                                            <label for="name" class="form-label teste1234">@lang('purchase.club.li3')<span style="color: brown">*</span></label>
                                                            <input id="name" type="text" class="form-control form-register @error('name') is-invalid @enderror" placeholder="@lang('purchase.club.li3')" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus tabindex="1">
                                                            <span for="name" class="focus-input100"></span>
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label for="last_name" class="form-label teste1234">@lang('purchase.club.li4')<span style="color: brown">*</span></label>
                                                            <input id="last_name" type="text" class="form-control form-register @error('last_name') is-invalid @enderror" placeholder="@lang('purchase.club.li4')" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus tabindex="2">
                                                            <span for="last_name" class="focus-input100"></span>
                                                            @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label class="form-label teste1234">@lang('purchase.club.li5') <span style="color: brown">*</span></label>
                                                            <select class="teste1234 form-register form-control" required name="country" tabindex="7">
                                                                <option>Select Country</option>
                                                                <option value="AF" @if (old('country')=='AF' ) selected="selected" @endif>
                                                                    Afghanistan</option>
                                                                <option value="AX" @if (old('country')=='AX' ) selected="selected" @endif>
                                                                    Aland
                                                                    Islands</option>
                                                                <option value="AL" @if (old('country')=='AL' ) selected="selected" @endif>
                                                                    Albania
                                                                </option>
                                                                <option value="DZ" @if (old('country')=='DZ' ) selected="selected" @endif>
                                                                    Algeria
                                                                </option>
                                                                <option value="AS" @if (old('country')=='AS' ) selected="selected" @endif>
                                                                    American
                                                                    Samoa</option>
                                                                <option value="AD" @if (old('country')=='AD' ) selected="selected" @endif>
                                                                    Andorra
                                                                </option>
                                                                <option value="AO" @if (old('country')=='AO' ) selected="selected" @endif>
                                                                    Angola
                                                                </option>
                                                                <option value="AI" @if (old('country')=='AI' ) selected="selected" @endif>
                                                                    Anguilla
                                                                </option>
                                                                <option value="AQ" @if (old('country')=='AQ' ) selected="selected" @endif>
                                                                    Antarctica</option>
                                                                <option value="AG" @if (old('country')=='AG' ) selected="selected" @endif>
                                                                    Antigua and Barbuda
                                                                </option>
                                                                <option value="AR" @if (old('country')=='AR' ) selected="selected" @endif>
                                                                    Argentina</option>
                                                                <option value="AM" @if (old('country')=='AM' ) selected="selected" @endif>
                                                                    Armenia</option>
                                                                <option value="AW" @if (old('country')=='AW' ) selected="selected" @endif>
                                                                    Aruba
                                                                </option>
                                                                <option value="AU" @if (old('country')=='AU' ) selected="selected" @endif>
                                                                    Australia</option>
                                                                <option value="AT" @if (old('country')=='AT' ) selected="selected" @endif>
                                                                    Austria</option>
                                                                <option value="AZ" @if (old('country')=='AZ' ) selected="selected" @endif>
                                                                    Azerbaijan</option>
                                                                <option value="BS" @if (old('country')=='BS' ) selected="selected" @endif>
                                                                    Bahamas</option>
                                                                <option value="BH" @if (old('country')=='BH' ) selected="selected" @endif>
                                                                    Bahrain</option>
                                                                <option value="BD" @if (old('country')=='BD' ) selected="selected" @endif>
                                                                    Bangladesh</option>
                                                                <option value="BB" @if (old('country')=='BB' ) selected="selected" @endif>
                                                                    Barbados</option>
                                                                <option value="BY" @if (old('country')=='BY' ) selected="selected" @endif>
                                                                    Belarus</option>
                                                                <option value="BE" @if (old('country')=='BE' ) selected="selected" @endif>
                                                                    Belgium</option>
                                                                <option value="BZ" @if (old('country')=='BZ' ) selected="selected" @endif>
                                                                    Belize
                                                                </option>
                                                                <option value="BJ" @if (old('country')=='BJ' ) selected="selected" @endif>
                                                                    Benin
                                                                </option>
                                                                <option value="BM" @if (old('country')=='BM' ) selected="selected" @endif>
                                                                    Bermuda</option>
                                                                <option value="BT" @if (old('country')=='BT' ) selected="selected" @endif>
                                                                    Bhutan
                                                                </option>
                                                                <option value="BO" @if (old('country')=='BO' ) selected="selected" @endif>
                                                                    Bolivia</option>
                                                                <option value="BQ" @if (old('country')=='BQ' ) selected="selected" @endif>
                                                                    Bonaire, Sint Eustatius
                                                                    and Saba</option>
                                                                <option value="BA" @if (old('country')=='BA' ) selected="selected" @endif>
                                                                    Bosnia
                                                                    and Herzegovina
                                                                </option>
                                                                <option value="BW" @if (old('country')=='BW' ) selected="selected" @endif>
                                                                    Botswana</option>
                                                                <option value="BV" @if (old('country')=='BV' ) selected="selected" @endif>
                                                                    Bouvet
                                                                    Island</option>
                                                                <option value="BR" @if (old('country')=='BR' ) selected="selected" @endif>
                                                                    Brazil
                                                                </option>
                                                                <option value="IO" @if (old('country')=='IO' ) selected="selected" @endif>
                                                                    British Indian Ocean
                                                                    Territory</option>
                                                                <option value="BN" @if (old('country')=='BN' ) selected="selected" @endif>
                                                                    Brunei
                                                                    Darussalam
                                                                </option>
                                                                <option value="BG" @if (old('country')=='BG' ) selected="selected" @endif>
                                                                    Bulgaria</option>
                                                                <option value="BF" @if (old('country')=='BF' ) selected="selected" @endif>
                                                                    Burkina Faso</option>
                                                                <option value="BI" @if (old('country')=='BI' ) selected="selected" @endif>
                                                                    Burundi</option>
                                                                <option value="KH" @if (old('country')=='KH' ) selected="selected" @endif>
                                                                    Cambodia</option>
                                                                <option value="CM" @if (old('country')=='CM' ) selected="selected" @endif>
                                                                    Cameroon</option>
                                                                <option value="CA" @if (old('country')=='CA' ) selected="selected" @endif>
                                                                    Canada</option>
                                                                <option value="CV" @if (old('country')=='CV' ) selected="selected" @endif>
                                                                    Cape
                                                                    Verde</option>
                                                                <option value="KY" @if (old('country')=='KY' ) selected="selected" @endif>
                                                                    Cayman Islands</option>
                                                                <option value="CF" @if (old('country')=='CF' ) selected="selected" @endif>
                                                                    Central African Republic
                                                                </option>
                                                                <option value="TD" @if (old('country')=='TD' ) selected="selected" @endif>
                                                                    Chad
                                                                </option>
                                                                <option value="CL" @if (old('country')=='CL' ) selected="selected" @endif>
                                                                    Chile
                                                                </option>
                                                                <option value="CN" @if (old('country')=='CN' ) selected="selected" @endif>
                                                                    China
                                                                </option>
                                                                <option value="CX" @if (old('country')=='CX' ) selected="selected" @endif>
                                                                    Christmas Island</option>
                                                                <option value="CC" @if (old('country')=='CC' ) selected="selected" @endif>
                                                                    Cocos
                                                                    (Keeling) Islands
                                                                </option>
                                                                <option value="CO" @if (old('country')=='CO' ) selected="selected" @endif>
                                                                    Colombia</option>
                                                                <option value="KM" @if (old('country')=='KM' ) selected="selected" @endif>
                                                                    Comoros</option>
                                                                <option value="CG" @if (old('country')=='CG' ) selected="selected" @endif>
                                                                    Congo
                                                                </option>
                                                                <option value="CD" @if (old('country')=='CD' ) selected="selected" @endif>
                                                                    Congo, Democratic
                                                                    Republic of the Congo</option>
                                                                <option value="CK" @if (old('country')=='CK' ) selected="selected" @endif>
                                                                    Cook
                                                                    Islands</option>
                                                                <option value="CR" @if (old('country')=='CR' ) selected="selected" @endif>
                                                                    Costa
                                                                    Rica</option>
                                                                <option value="CI" @if (old('country')=='CI' ) selected="selected" @endif>
                                                                    Cote
                                                                    D'Ivoire</option>
                                                                <option value="HR" @if (old('country')=='HR' ) selected="selected" @endif>
                                                                    Croatia</option>
                                                                <option value="CU" @if (old('country')=='CU' ) selected="selected" @endif>
                                                                    Cuba
                                                                </option>
                                                                <option value="CW" @if (old('country')=='CW' ) selected="selected" @endif>
                                                                    Curacao</option>
                                                                <option value="CY" @if (old('country')=='CY' ) selected="selected" @endif>
                                                                    Cyprus</option>
                                                                <option value="CZ" @if (old('country')=='CZ' ) selected="selected" @endif>
                                                                    Czech
                                                                    Republic</option>
                                                                <option value="DK" @if (old('country')=='DK' ) selected="selected" @endif>
                                                                    Denmark</option>
                                                                <option value="DJ" @if (old('country')=='DJ' ) selected="selected" @endif>
                                                                    Djibouti</option>
                                                                <option value="DM" @if (old('country')=='DM' ) selected="selected" @endif>
                                                                    Dominica</option>
                                                                <option value="DO" @if (old('country')=='DO' ) selected="selected" @endif>
                                                                    Dominican Republic
                                                                </option>
                                                                <option value="EC" @if (old('country')=='EC' ) selected="selected" @endif>
                                                                    Ecuador</option>
                                                                <option value="EG" @if (old('country')=='EG' ) selected="selected" @endif>
                                                                    Egypt
                                                                </option>
                                                                <option value="SV" @if (old('country')=='SV' ) selected="selected" @endif>
                                                                    El
                                                                    Salvador</option>
                                                                <option value="GQ" @if (old('country')=='GQ' ) selected="selected" @endif>
                                                                    Equatorial Guinea
                                                                </option>
                                                                <option value="ER" @if (old('country')=='ER' ) selected="selected" @endif>
                                                                    Eritrea</option>
                                                                <option value="EE" @if (old('country')=='EE' ) selected="selected" @endif>
                                                                    Estonia</option>
                                                                <option value="ET" @if (old('country')=='ET' ) selected="selected" @endif>
                                                                    Ethiopia</option>
                                                                <option value="FK" @if (old('country')=='FK' ) selected="selected" @endif>
                                                                    Falkland Islands
                                                                    (Malvinas)</option>
                                                                <option value="FO" @if (old('country')=='FO' ) selected="selected" @endif>
                                                                    Faroe
                                                                    Islands</option>
                                                                <option value="FJ" @if (old('country')=='FJ' ) selected="selected" @endif>
                                                                    Fiji
                                                                </option>
                                                                <option value="FI" @if (old('country')=='FI' ) selected="selected" @endif>
                                                                    Finland</option>
                                                                <option value="FR" @if (old('country')=='FR' ) selected="selected" @endif>
                                                                    France</option>
                                                                <option value="GF" @if (old('country')=='GF' ) selected="selected" @endif>
                                                                    French Guiana</option>
                                                                <option value="PF" @if (old('country')=='PF' ) selected="selected" @endif>
                                                                    French Polynesia</option>
                                                                <option value="TF" @if (old('country')=='TF' ) selected="selected" @endif>
                                                                    French Southern
                                                                    Territories</option>
                                                                <option value="GA" @if (old('country')=='GA' ) selected="selected" @endif>
                                                                    Gabon
                                                                </option>
                                                                <option value="GM" @if (old('country')=='GM' ) selected="selected" @endif>
                                                                    Gambia</option>
                                                                <option value="GE" @if (old('country')=='GE' ) selected="selected" @endif>
                                                                    Georgia</option>
                                                                <option value="DE" @if (old('country')=='DE' ) selected="selected" @endif>
                                                                    Germany</option>
                                                                <option value="GH" @if (old('country')=='GH' ) selected="selected" @endif>
                                                                    Ghana
                                                                </option>
                                                                <option value="GI" @if (old('country')=='GI' ) selected="selected" @endif>
                                                                    Gibraltar</option>
                                                                <option value="GR" @if (old('country')=='GR' ) selected="selected" @endif>
                                                                    Greece</option>
                                                                <option value="GL" @if (old('country')=='GL' ) selected="selected" @endif>
                                                                    Greenland</option>
                                                                <option value="GD" @if (old('country')=='GD' ) selected="selected" @endif>
                                                                    Grenada</option>
                                                                <option value="GP" @if (old('country')=='GP' ) selected="selected" @endif>
                                                                    Guadeloupe</option>
                                                                <option value="GU" @if (old('country')=='GU' ) selected="selected" @endif>
                                                                    Guam
                                                                </option>
                                                                <option value="GT" @if (old('country')=='GT' ) selected="selected" @endif>
                                                                    Guatemala</option>
                                                                <option value="GG" @if (old('country')=='GG' ) selected="selected" @endif>
                                                                    Guernsey</option>
                                                                <option value="GN" @if (old('country')=='GN' ) selected="selected" @endif>
                                                                    Guinea</option>
                                                                <option value="GW" @if (old('country')=='GW' ) selected="selected" @endif>
                                                                    Guinea-Bissau</option>
                                                                <option value="GY" @if (old('country')=='GY' ) selected="selected" @endif>
                                                                    Guyana</option>
                                                                <option value="HT" @if (old('country')=='HT' ) selected="selected" @endif>
                                                                    Haiti
                                                                </option>
                                                                <option value="HM" @if (old('country')=='HM' ) selected="selected" @endif>
                                                                    Heard
                                                                    Island and Mcdonald
                                                                    Islands</option>
                                                                <option value="VA" @if (old('country')=='VA' ) selected="selected" @endif>
                                                                    Holy
                                                                    See (Vatican City
                                                                    State)</option>
                                                                <option value="HN" @if (old('country')=='HN' ) selected="selected" @endif>
                                                                    Honduras</option>
                                                                <option value="HK" @if (old('country')=='HK' ) selected="selected" @endif>
                                                                    Hong Kong</option>
                                                                <option value="HU" @if (old('country')=='HU' ) selected="selected" @endif>
                                                                    Hungary</option>
                                                                <option value="IS" @if (old('country')=='IS' ) selected="selected" @endif>
                                                                    Iceland</option>
                                                                <option value="IN" @if (old('country')=='IN' ) selected="selected" @endif>
                                                                    India</option>
                                                                <option value="ID" @if (old('country')=='ID' ) selected="selected" @endif>
                                                                    Indonesia</option>
                                                                <option value="UY" @if (old('country')=='UY' ) selected="selected" @endif>
                                                                    Uruguay</option>
                                                                <option value="UZ" @if (old('country')=='UZ' ) selected="selected" @endif>
                                                                    Uzbekistan</option>
                                                                <option value="VU" @if (old('country')=='VU' ) selected="selected" @endif>
                                                                    Vanuatu</option>
                                                                <option value="VE" @if (old('country')=='VE' ) selected="selected" @endif>
                                                                    Venezuela</option>
                                                                <option value="VN" @if (old('country')=='VN' ) selected="selected" @endif>
                                                                    Viet Nam</option>
                                                                <option value="VG" @if (old('country')=='VG' ) selected="selected" @endif>
                                                                    Virgin Islands, British
                                                                </option>
                                                                <option value="VI" @if (old('country')=='VI' ) selected="selected" @endif>
                                                                    Virgin Islands, U.s.
                                                                </option>
                                                                <option value="WF" @if (old('country')=='WF' ) selected="selected" @endif>
                                                                    Wallis and Futuna
                                                                </option>
                                                                <option value="EH" @if (old('country')=='EH' ) selected="selected" @endif>
                                                                    Western Sahara</option>
                                                                <option value="YE" @if (old('country')=='YE' ) selected="selected" @endif>
                                                                    Yemen</option>
                                                                <option value="ZM" @if (old('country')=='ZM' ) selected="selected" @endif>
                                                                    Zambia</option>
                                                                <option value="ZW" @if (old('country')=='ZW' ) selected="selected" @endif>
                                                                    Zimbabwe</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="city" class="form-label teste1234">@lang('purchase.club.li6')<span style="color: brown">*
                                                                </span></label>
                                                            <input id="city" type="text" class="form-control form-register @error('city') is-invalid @enderror" placeholder="@lang('purchase.club.li6')" name="city" value="{{ old('city') }}" required autocomplete="city" tabindex="8">
                                                            <span for="city" class="focus-input100"></span>
                                                            @error('city')
                                                            <span class="invalid-feedback " role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label for="login" class="form-label teste1234">@lang('purchase.club.li7')<span style="color: brown">*
                                                                </span></label>
                                                            <input id="login" type="text" class="form-control form-register login @error('login') is-invalid @enderror" placeholder="@lang('purchase.club.li7')" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus tabindex="13" onkeypress="allowAlphaNumeric(event)">
                                                            <span for="login" class="focus-input100"></span>
                                                            @error('login')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label for="cell" class="form-label teste1234">@lang('purchase.club.li8')<span style="color: brown">* </span>
                                                                (Just Numbers)</label>
                                                            <input id="cell" type="cell" class="form-control form-register @error('cell') is-invalid @enderror" placeholder="@lang('purchase.club.li8')" name="cell" value="{{ old('cell') }}" required autocomplete="cell" tabindex="10">
                                                            <span for="cell" class="focus-input100"></span>
                                                            @error('cell')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        @if (isset($id))
                                                        <div class="wrap-input100 validate-input" style="display: none;">
                                                            <input id="recommendation_user_id" type="text" class="input100" name="recommendation_user_id" value="{{ $id }}" autofocus>
                                                            <span for="recommendation_user_id" class="focus-input100" data-placeholder="Recommendation User Id"></span>
                                                        </div>
                                                        @else
                                                        <div class="col-lg-6">
                                                            <label for="recommendation_user_id" class="form-label teste1234">@lang('purchase.club.li9')</label>
                                                            <input id="recommendation_user_id" type="text" class="form-control form-register" name="recommendation_user_id" placeholder="@lang('purchase.club.li9')" value="{{ old('recommendation_user_id') }}" autofocus tabindex="18" onkeypress="allowAlphaNumeric(event)">
                                                            <span for="recommendation_user_id" class="focus-input100"></span>
                                                        </div>
                                                        @endif

                                                        <div class="col-lg-6">
                                                            <label for="email" class="form-label teste1234">@lang('purchase.club.li10')<span style="color: brown">*</span></label>
                                                            <input id="email" type="email" class="form-control form-register @error('email') is-invalid @enderror" placeholder="@lang('purchase.club.li10')" name="email" value="{{ old('email') }}" required autocomplete="email" tabindex="14">
                                                            <span for="email" class="focus-input100"></span>
                                                            @error('email')
                                                            <span class="invalid-feedback " role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label for="password" class="form-label teste1234">@lang('purchase.club.li11')<span style="color: brown">*</span></label>
                                                            <span class="btn-show-pass d-inline-flex ps-2">
                                                                <i class="fa fa-eye" id="togglePassword"></i>
                                                            </span>
                                                            <input id="password" type="password" class="form-control form-register @error('password') iconreg is-invalid  @enderror" placeholder="@lang('purchase.club.li11')" name="password" required autocomplete="new-password" tabindex="15">

                                                            <span for="password" class="focus-input100"></span>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label for=" password-confirm" class="form-label teste1234">@lang('purchase.club.li12')<span style="color: brown">*</span></label>
                                                            <span class="btn-show-pass d-inline-flex ps-2">
                                                                <i class="fa fa-eye" id="togglePasswordconfim"></i>
                                                            </span>
                                                            <input id="password-confirm" type="password" class="form-control form-register" placeholder="@lang('purchase.club.li12')" name="password_confirmation" required autocomplete="new-password" tabindex="16">
                                                            <span for="password-confirm" class="focus-input100"></span>
                                                        </div>

                                                    </div>



                                                    <div class="col-md-12  mb-4 mt-4">
                                                        <button type="submit" class="login100-form-btn btn btn-primary rounded-pill">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<script>
    function FunctionCopy1() {

        var copyText = document.getElementById("landing");


        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        navigator.clipboard.writeText(copyText.value);

        // alert("Copied the text: " + copyText.value);
    }

    function FunctionCopy2() {

        var copyText = document.getElementById("referral");


        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        navigator.clipboard.writeText(copyText.value);

        // alert("Copied the text: " + copyText.value);
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var target = document.querySelector('#minting-nav');
        var collapse = new bootstrap.Collapse(target);
        collapse.show();
    });
</script>
@endsection