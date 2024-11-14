@extends('layouts.header')
@section('content')
<style>
    .card-product-list {
        background: #ffffff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 2px 2px 20px #cdcdcd;
    }

    .new-title {
        font-size: 35px;
        margin-left: -20px;
        font-weight: bold;
        float: left;
        color: #000000;
    }

    .head-table-list {
        width: 100%;
        display: inline-block;
        /* background: #470c52; */
        padding: 10px 10px;
        border-radius: 5px 5px 0px 0px;
    }

    .card-title-new {
        font-size: 17px;
        font-weight: bold;
        color: #000000;
    }

    #button-buy {
        width: 100%;
        margin-top: 20px;
        height: 40px;
        font-size: 14px;
    }

    .price-value {
        font-size: 16px;
        font-weight: bold;
    }

    .bloco-footer {
        margin-left: -10px;
    }

    button.btn-amount {
        width: 20px;
        /* background: #470c52; */
        color: #ffffff;
        border: 0px;
    }

    .endereco2 {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        padding: 1rem;
    }

    .endereco2 input,
    .endereco2 select {
        border-radius: 5px;
        padding: .2rem .5rem;
        border: #C0C0C0 solid 1px;
    }

    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 2;
    }

    /* CSS for the modal box */
    .modal-box {
        position: relative;
        margin: 0 auto;
        height: 720px;
        display: none;
        z-index: 2;
    }

    #close-modal-button {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 3;
    }

    .ppl-parcelshop-map {
        height: 100%;
        max-height: 640px;
        display: relative;
        z-index: 2;
    }

    #name_ppl_selected {
        display: relative;
        z-index: 2;
    }
</style>

<main id="main" class="main">
    <section id="produto" class="content">

        <div class="fade">
            <div class="container-fluid">
                @if ($errors->has('error'))
                <div class="alert alert-danger">
                    {{ $errors->first('error') }}
                </div>
                @endif
                <div class="row justify-content-evenly" style="margin-bottom: 10px;">
                    <p class="new-title">@lang('cart.title_page')</p>
                </div>
                <div class="row  card-product-list" style="margin-bottom: 20px;overflow-x: auto">

                    <table class="table" style="overflow-x: auto">
                        <thead class="bg-primary" style="background: #000">
                            <tr style="background: #000">
                                <th scope="col" style="color: #ffffff; font-size: 13px;"></th>
                                <th scope="col" style="color: #ffffff; font-size: 13px;">@lang('cart.product')</th>
                                <th scope="col" style="color: #ffffff; font-size: 13px;">@lang('cart.price')</th>
                                <th scope="col" style="color: #ffffff; font-size: 13px;">@lang('cart.quant')</th>
                                <th scope="col" style="color: #ffffff; font-size: 13px;">@lang('cart.total')</th>
                                <th scope="col" style="color: #ffffff; font-size: 13px;"></th>
                                <th scope="col" style="color: #ffffff; font-size: 13px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="border: 1px solid silver; padding: 10px;" width="5%">
                                    <a href=""><img style="width: 40px;" src="{{ asset('img')}}" alt="img_products"></a>
                                </th>
                                <th style="border: 1px solid silver; padding: 10px;" width="45%">name</th>
                                <th style="border: 1px solid silver; padding: 10px;" width="15%">
                                    $ 500.00 <br>
                                </th>
                                <th style="border: 1px solid silver; padding: 10px;" width="15%">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <ul style="padding-left: 0; margin-bottom: 0; margin: 0 15px;">
                                            <li style="display: inline-block;"><input class="text-center" style="width: 50px;" disabled type="text" value="{{ $item->amount }}"></li>
                                        </ul>
                                    </div>
                                </th>
                                <th style="border: 1px solid silver; padding: 10px;" width="15%">$ 500.00 </th>
                                <th style="border: 1px solid silver; padding: 10px;" width="5%">
                                    <a id="limpa_carrinho" href="{{ 'clean' }}"><i style="font-size: 20px;" class="bi bi-trash3-fill"></i></a>
                                </th>
                            </tr>
                        </tbody>
                    </table>

                    <table style="margin-top: 10px;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid silver; padding: 10px;" width="75%">$ 500.00</th>
                                <th style="border: 1px solid silver; padding: 10px;" width="25%">
                                    $ 500.00</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                @if ($count_itens > 0)
                <form action="{{ 'purchase' }}" method="POST" onsubmit="submitCheckout()" id="form-checkout-backoffice" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-top: 20px;" class="row justify-content-evenly">
                        <div style="display: flex;flex-direction: row;flex-wrap:wrap; padding:0;">
                            <div style="padding: 0rem;" class="col-sm-12 col-md-6">
                                <div class="card shadow p-md-8" id="formHome2" style="width: 100%; padding:1rem;height: auto; display: flex; flex-wrap: wrap; display: none">

                                    <p class="card-title-new text-start">Endereço:</p>

                                    <div class="row-form endereco2">

                                        <div class="col-sm-12">
                                            <input style="width: 100%; height: 30px; border-radius: 5px; border: solid 1px #cdcdcd;" placeholder="Nome" type="text" name="first_name" class="form-control form-register">
                                        </div>

                                        <div class="col-sm-12">
                                            <input style="width: 100%; height: 30px; border-radius: 5px; border: solid 1px #cdcdcd;" class="form-control form-register" placeholder="Sobrenome" type="text" name="last_name">
                                        </div>



                                        <div class="col-sm-12">
                                            {{-- <input class="form-input-finalize" placeholder="Phone +000 00000000" id="tel" type="text"
                            name="phone"> --}}

                                            <input id="cell" onkeypress="allowNumeric(event)" type="cell" class="form-control form-register" placeholder="Celular" name="phone" value="{{ old('phone') }}" autocomplete="cell" tabindex="10">
                                            <span for="cell" class="focus-input50"></span>
                                            <input type="hidden" name="countryCodeCell" id="countryCodeCell" value="1">

                                        </div>

                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register" placeholder="Cidade" id="campo_cidade" type="text" name="city">
                                        </div>

                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register" placeholder="Endereço" id="campo_endereco" type="text" name="address">
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register" placeholder="Numero da Residencia" type="number" name="number" id="n_residence">
                                        </div>

                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register cep" placeholder="Cep" aria-label="CEP" id="campo_cep" type="number" name="zip">
                                        </div>
                                    </div>

                                </div>

                                <div class="card shadow p-md-8" id="formHome1" style="width: 100%; padding:1rem;height: auto; display: flex; flex-wrap: wrap;">

                                    <p class="card-title-new text-start">Confira seus dados</p>

                                    <div class="row-form endereco2">

                                        <div class="col-sm-12">
                                            <input style="width: 100%; height: 30px; border-radius: 5px; border: solid 1px #cdcdcd;" placeholder="Nome" type="text" readonly value="{{ auth()->user()->name }}" class="form-control form-register">
                                        </div>

                                        <div class="col-sm-12">
                                            <input style="width: 100%; height: 30px; border-radius: 5px; border: solid 1px #cdcdcd;" class="form-control form-register" placeholder="Sobrenome" type="text" value="{{ auth()->user()->last_name }}" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <input id="cell" onkeypress="allowNumeric(event)" type="cell" class="form-control form-register" placeholder="Celular" value="{{ auth()->user()->cell }}" autocomplete="Celular" tabindex="10" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register" placeholder="Cidade" id="campo_cidade" type="text" value="{{ auth()->user()->city }}" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register" placeholder="Endereço" id="campo_endereco" type="text" value="{{ auth()->user()->address1 }}" readonly>
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register" placeholder="Numero da residencia" type="number" id="n_residence" value="{{ auth()->user()->number_residence }}" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <input class="form-input-finalize form-control form-register cep" placeholder="Cep" aria-label="CEP" id="campo_cep" type="number" value="{{ auth()->user()->postcode }}" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <select class="form-input-finalize form-control form-register">
                                                <option>
                                                    {{ auth()->user()->country }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12">
                                            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">
                                                Editar</a>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div style="padding: 0rem;" class="col-sm-12 col-md-6">
                                <div class="card shadow p-md-2" style="width: 100%; height: fit-content;">

                                    <p class="card-title-new text-start">Price plan</p>
                                    <table style="margin-top: 10px;">
                                        <thead>
                                            <tr>
                                                <th style="border: 1px solid silver; padding: 10px;" width="75%">Total</th>
                                                <th style="border: 1px solid silver; padding: 10px;" id="value_order" width="25%">
                                                    $ 500,00
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>



                                    <p>Pay with:</p>
                                    <select name="methodPayment" id="selectMethod" style="font-size: 1rem" class="form-control form-control-lg @error('payment') is-invalid @enderror" required>
                                        <option value="">Escolher forma de pagamento</option>
                                        <!-- <option value="tnp">TNP</option> -->
                                        <option value="credid_card">credit card</option>
                                    </select>

                                    <input type="text" style="display: none" id="request_price" name="price" value="{{ 0 }}">
                                    <input type="text" style="display: none" id="input_vat" name="total_vat" value="0">

                                    <input type="text" style="display: none" id="total_shipping" name="total_shipping" value="0">


                                    <!-- <button class="btn btn-primary btn-lg" type="button" style="background: #000" onclick="tokenget()">token</button>
                                    <button class="btn btn-primary btn-lg" type="button" style="background: #000" onclick="frete()">Testar</button> -->
                                    <button class="btn btn-primary btn-lg" style="background: #000" id="button-buy">Salvar pedido pago</button>


                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endif
            </div>

            <div class="container-fluid bloco-footer">
                <div class="row">
                    <div class="col-6">
                        <!-- <a href="{{ route('packages.index') }}"><button class="btn btn-primary btn-lg" style="width: fit-content; font-size: 13px; color:white;background-color:#000" type="button">@lang('cart.keep_shopping')</button></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/intlTelInput.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/intlTelInput.min.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    $(document).ready(function() {
        codeCell.setCountry("BR");

        $('#selectCountry').on('change', function(e) {
            chooseCountryCellByCountryInput(e);
        });
    });

    function chooseCountryCellByCountryInput(e) {
        const selectedOption = event.target.selectedOptions[0];
        const selectedClass = selectedOption.className;
        const cleanedClass = selectedClass.replace("country-", "");
        // console.log("Cleaned class:", cleanedClass);
        codeCell.setCountry(cleanedClass);
    }

    var inputCell = document.querySelector("#cell");
    let codeCell = window.intlTelInput(inputCell, {
        separateDialCode: true
    });
    inputCell.addEventListener("countrychange", function() {
        // console.log(codeCell.getSelectedCountryData());
        document.querySelector("#countryCodeCell").value = codeCell.getSelectedCountryData().dialCode;
    });

    let accessToken = '';

    function tokenget() {
        const data = {
            grant_type: "client_credentials",
            client_id: 4866,
            client_secret: "r5PS3ukJTFLQ29o5JMJmjI1gjIM945o6gpOH4QSW"
        };

        axios.post('https://sandbox.melhorenvio.com.br/oauth/token', data, {
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(function(response) {
                console.log('Success:', response.data);
            })
            .catch(function(error) {
                console.error('Error:', error.response ? error.response.data : error.message);
            });
    }

    function frete() {
        const data = {
            from: {
                postal_code: "01001000"
            },
            to: {
                postal_code: "20040030"
            },
            products: [{
                weight: 1,
                width: 20,
                height: 10,
                length: 15,
                insurance_value: 100,
                quantity: 1
            }],
            services: "1,2"
        };

        $.ajax({
            url: 'https://sandbox.melhorenvio.com.br/api/v2/me/shipment/calculate',
            method: 'POST',
            headers: {
                'Authorization': 'Bearer ' + accessToken,
                'Content-Type': 'application/json'
            },
            data: JSON.stringify(data),
            success: function(response) {
                console.log('Sucesso:', response);
                // Aqui você pode manipular a resposta e exibir no HTML conforme necessário
            },
            error: function(xhr, status, error) {
                console.error('Erro:', status, error);
                console.log(xhr.responseText);
            }
        });
    }

    function showRecipient(checkbox) {
        let divWithInput = document.getElementById('form-recipient');
        const inputs = divWithInput.querySelectorAll('input'); // Selecione todos os inputs dentro da div
        if (checkbox.checked) {
            divWithInput.style.display = 'initial';

        } else {

            divWithInput.style.display = 'none';
        }

    }
</script>

<script>
    $(document).ready(function() {
        $('#limpa_carrinho').on('click', function(event) {
            // Impede o comportamento padrão do link
            event.preventDefault();

            // Desabilita o link após o primeiro clique
            $(this).off('click'); // Remove o evento de clique
            $(this).hide();

            // Redireciona após um pequeno atraso (por exemplo, 1 segundo)
            var href = $(this).attr('href');
            setTimeout(function() {
                window.location.href = href; // Redireciona para o href após 1 segundo
            }, 500); // Tempo em milissegundos (1000 ms = 1 segundo)
        });
    });
</script>

@endsection
