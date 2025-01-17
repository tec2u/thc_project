@extends('layouts.header')
@section('content')
<main id="main" class="main">
    <section id="poolcommission" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>FIAT VIA REVOLUT</h1>
                        <div class="col-12">
                            <p class="text-black responsive-p">@lang('purchase.fiat.li1')</p>
                        </div>
                        <div class="card shadow my-3">
                            <div class="card-header bbcolorp">
                                <h3 class="card-title">
                                    FIAT VIA REVOLUT
                                </h3>
                            </div>
                            <div class="card-header py-3">
                                <div class="container">
                                    <ul class="list-unstyled">
                                        <li class="media my-4">
                                            <div class="media-body align-self-center">
                                            @lang('purchase.fiat.li2')
                                                <br>
                                                <p>
                                                    <b>
                                                        REVOLUT LTD, LONDON, UK
                                                    </b>
                                                </p>
                                            </div>

                                            <button class="btn btn-primary" onclick="copiarTexto('REVOLUT LTD, LONDON, UK')"><i class="fa fa-clone" aria-hidden="true"></i></button>
                                        </li>
                                        <li class="media my-4">
                                            <div class="media-body align-self-center">
                                                IBAN
                                                <br>
                                                <p>
                                                    <b>
                                                        CH37 0483 5284 2385 2300 0
                                                    </b>
                                                </p>
                                            </div>

                                            <button class="btn btn-primary" onclick="copiarTexto('CH37 0483 5284 2385 2300 0')"><i class="fa fa-clone" aria-hidden="true"></i></button>

                                        </li>
                                        <li class="media my-4">
                                            <div class="media-body align-self-center">
                                                BIC
                                                <br>
                                                <p>
                                                    <b>
                                                        CRESCHZZ80A
                                                    </b>
                                                </p>
                                            </div>

                                            <button class="btn btn-primary" onclick="copiarTexto('CRESCHZZ80A')"><i class="fa fa-clone" aria-hidden="true"></i></button>

                                        </li>
                                        <li class="media my-4">
                                            <div class="media-body align-self-center">
                                            @lang('purchase.fiat.li3')
                                                <br>
                                                <p>
                                                    <b style="color:red;">
                                                        08632530, Nicola Hollender, CH
                                                    </b>
                                                </p>
                                            </div>

                                            <button class="btn btn-primary" onclick="copiarTexto('08632530, Nicola Hollender, CH')"><i class="fa fa-clone" aria-hidden="true"></i></button>

                                        </li>


                                        <li class="media my-4">
                                            <div class="media-body align-self-center">
                                            @lang('purchase.fiat.li4')
                                                <br>
                                                <p>
                                                    <b>
                                                        Credit Suisse (Schweiz) AG
                                                        Paradeplatz 8
                                                        8070 Zurich
                                                        Switzerland

                                                    </b>
                                                </p>
                                            </div>

                                            <button class="btn btn-primary" onclick="copiarTexto('Credit Suisse (Schweiz) AG Paradeplatz 8 8070 Zurich Switzerland')"><i class="fa fa-clone" aria-hidden="true"></i></button>
                                        </li>


                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>




<script>
    function copiarTexto(text) {
        const temp = document.createElement('div');
        temp.innerText = text;
        document.body.appendChild(temp);
        const range = document.createRange();
        range.selectNode(temp);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand('copy');
        document.body.removeChild(temp);
        window.getSelection().removeAllRanges();
        alert("Texto copiado com sucesso!");
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
