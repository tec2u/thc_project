@extends('layouts.header')
@section('content')
<style>
    .container {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .col-md-4 .card {
        margin: 0 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: relative;
        height: 100%;
    }

    .card h3 {
        margin-top: 0;
    }

    .card p {
        margin-bottom: 0;
        font-size: 14px;
    }

    .card input[type="radio"] {
        display: none;
    }

    .card label {
        display: flex;
        flex-direction: column;
        padding: 10px;
        cursor: pointer;
    }

    .card input[type="checkbox"] {
        content: '';
        width: 25px;
        height: 25px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card input[type="radio"]+label::before {
        content: '';
        width: 25px;
        height: 25px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .card input[type="radio"]:checked+label::before {
        background-color: #000000;
        border-color: #808080;
    }

    .form-label {
        margin-bottom: -10px;
    }

    .amount-label {
        text-align: left;
    }

    input[type="checkbox"]+label::before {
        content: '';
        display: none;
        vertical-align: middle;
        width: 20px;
        height: 20px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="checkbox"]+label {
        display: inline-block;
        vertical-align: middle;
        margin-left: 20px;
        margin-top: -7px;
    }

    input[type="checkbox"] {
        display: none;
        vertical-align: middle;
    }

    .buto {
        width: 100%;
        margin-top: 40px;
        background-image: linear-gradient(#f3e385, #b77e38) !important;
        border: none !important;
    }

    .titlewit{
        font-weight: normal !important;
    }
</style>
<main id="main" class="main">
    @include('flash::message')
    <section id="withdrawrequest" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 style="color: #fff;">@lang('withdraw.withdraw_fund')</h3>
                        <div class="col-12">
                            <p class="text-white responsive-p2">@lang('withdraw.li1')</p>
                        </div>
                        <div class="card shadow my-3">
                            <div class="card-header bbcolorp">
                                <h3 class="card-title titlewit" style="color: #444752;">@lang('withdraw.withdraw_request')</h3>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('withdraws.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col-md-4">
                                <div class="card">
                                    <input type="radio" id="card1" name="cards" value="quarterly">
                                    <label for="card1">
                                        <label class="form-label mt-4 text-center titlewit" style="color: #444752;">@lang('withdraw.li2')</label>
                                        <label for="amout" class="form-label mt-5 titlewit">@lang('withdraw.li3')</label>
                                        <input type="number" class="form-control" id="amout" name="amount1">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" name="time" value="R" id="flexCheckDefault" />
                                            <label class="form-check-label titlewit" for="flexCheckDefault">@lang('withdraw.li4')</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="time" value="O" id="flexCheckChecked" />
                                            <label class="form-check-label titlewit" for="flexCheckChecked">@lang('withdraw.li5')</label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <input type="radio" id="card2" name="cards" value="annually">
                                    <label for="card2">
                                        <label class="form-label mt-4 text-center titlewit" style="color: #444752;">@lang('withdraw.li6')</label>
                                        <label for="amout" class="form-label mt-5 titlewit">@lang('withdraw.li3')</label>
                                        <input type="number" class="form-control" id="amout" name="amount2">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" name="time" value="R" id="flexCheckDefault" />
                                            <label class="form-check-label titlewit" for="flexCheckDefault">@lang('withdraw.li4')</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="time" value="O" id="flexCheckChecked" />
                                            <label class="form-check-label titlewit" for="flexCheckChecked">@lang('withdraw.li5')</label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <input type="radio" id="card3" name="cards" value="compound">
                                    <label for="card3">
                                        <label class="form-label mt-4 text-center titlewit" style="color: #444752;">@lang('withdraw.li7')</label>
                                        <p class="mt-4 text-center titlewit">@lang('withdraw.li8')</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="submit" class="btn buto btn-primary">@lang('withdraw.li9')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->


    </section>
</main>

<script>
    $(window).load(function() {
        $('#flash-overlay-modal').modal('show');
    });

    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
<script>
    const cards = document.querySelectorAll('input[name="cards"]');

    cards.forEach(card => {
        card.addEventListener('click', () => {
            cards.forEach(otherCard => {
                if (otherCard !== card) {
                    otherCard.checked = false;
                }
            });
        });
    });
</script>
@endsection