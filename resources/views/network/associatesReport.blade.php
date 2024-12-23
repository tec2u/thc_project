@extends('layouts.header')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .hiddenRow {
        padding: 0 !important;
    }
</style>

<main id="main" class="main">
    <section id="supporttable" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        {{-- <!-- <h1>@lang('support.support_tickets')</h1> --> --}}
                        <h1>
                            MY TEAM REPORT
                        </h1>
                        <div class="col-12">
                            <p class="text-white responsive-p">Here you see an overview about your team with contact and sponsor details.</p>
                        </div>


                        <h3 style='color:#fff'>

                        </h3>
                        <div class="card shadow my-3">


                            <div class="table-responsive">

                                <table class="table accordion table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">@lang('network.login')</th>
                                            <th scope="col">@lang('network.name')</th>
                                            <th scope="col">@lang('Last Name')</th>
                                            <th scope="col">@lang('network.sponsor')</th>
                                            <th scope="col">@lang('Phone Number')</th>
                                            <th scope="col">@lang('network.coutry')</th>
                                            <th scope="col">@lang('network.email')</th>
                                            <th scope="col">@lang('network.level')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div>
                                            @forelse($networks as $network)
                                            <tr scope="row" data-bs-toggle="collapse" data-bs-target="#id{{ $network->id }}" value="{{ $network->id }}">
                                                <td><button id="botao{{ $network->id }}" onclick="getdiretos({{ $network->id }})" class="btn btn-primary">+</button></td>
                                                <td>{{ isset($network->user) ? $network->user->login ? '' }}</td>
                                                <td>{{ isset($network->user) ? $network->user->name ? '' }}</td>
                                                <td>{{ isset($network->user) ? $network->user->last_name ? '' }}</td>
                                                <td>{{ $network->getReferalName($network->upline_id) }}</td>
                                                <td>{{ isset($network->user) ? $network->user->telephone ? '' }}</td>
                                                <td>{{ isset($network->user) ? $network->user->country ? '' }}</td>
                                                <td>{{ isset($network->user) ? $network->user->email ? '' }}</td>
                                                <td id="nivel{{ $network->id }}">1</td>
                                            </tr>
                                            <tr>
                                                <td id="local{{ $network->id }}" style="display: none; padding: 0px" colspan="9">
                                                </td>
                                            </tr>
                                            @empty
                                            <p>@lang('network.any_referrals_registered')</p>
                                            @endforelse
                                        </div>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div id="loading">
    <img id="loading-image" src="gif.gif" alt="Loading..." />
</div>

<script type="text/javascript">
    function getdiretos(id) {

        var nivel = $('#nivel' + id).html();
        if ($('#local' + id).css('display') === 'none') {
            nivel++;
            $('#botao' + id).html("-");
            var login = id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'associates/pesquisa',
                type: 'POST',
                data: {
                    login: login
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(data) {
                    if (data.error) {
                        var tabela =
                            "<table class='table accordion table-hover'><tr><td colspan ='9'>There are no users below this</td></tr></table>";
                        $('#local' + login).html('');
                        $('#local' + login).append(tabela);
                        $('#local' + login).show('slow');
                        return false;
                    }
                    var tabela = "<table class='table accordion table-hover'>"


                        +
                        "<thead>" +
                        "<tr>" +
                        "<th scope='col'></th>" +
                        "<th scope='col'>@lang('network.login')</th>"
                        // +"<th scope='col'>@lang('network.name')</th>"
                        +
                        "<th scope='col'>@lang('network.sponsor')</th>" +
                        "<th scope='col'>@lang('network.coutry')</th>" +
                        "<th scope='col'>@lang('network.email')</th>" +
                        "<th scope='col'>@lang('network.level')</th>" +
                        "</tr>" +
                        "</thead>";


                    for (var i = 0; i < data.length; i++) {
                        tabela += "<tr scope='row' data-bs-toggle='collapse' data-bs-target='#id" + data[i][
                            'id'
                        ] + "' value='" + data[i]['id'] + "'>";
                        tabela += "<td><button id='botao" + data[i]['id'] + "' onclick='getdiretos(" + data[
                            i]['id'] + ")' class='btn btn-primary'>+</button></td>";
                        tabela += "<td>" + data[i]['login'] + "</td>";
                        // tabela += "<td>"+data[i]['name']+"</td>";
                        tabela += "<td>" + data[i]['patrocinador'] + "</td>";
                        tabela += "<td>" + data[i]['country'] + "</td>";
                        tabela += "<td>" + data[i]['email'] + "</td>";
                        tabela += "<td id='nivel" + data[i]['id'] + "'>" + nivel + "</td>";
                        tabela += "</tr>";
                        tabela += "<tr>";
                        tabela += "<td id='local" + data[i]['id'] +
                            "' style='display:none; padding:0px;' colspan='9'>";
                        tabela += "</td>";
                        tabela += "</tr>";
                    }
                    tabela += "</tbody></table>";

                    $('#local' + login).html('');
                    $('#local' + login).append(tabela);
                    $('#local' + login).show('slow');

                },
                complete: function() {

                    $('#loading').hide();
                }
            });
        } else {
            nivel--;
            $('#local' + id).hide('slow');
            $('#local' + id).html("");
            $('#botao' + id).html("+");
        }
    };
    $(document).ready(function() {
        $('#loading').hide();
    });
</script>


@endsection
@section('css')
@stop
