@extends('layouts.header')
@section('content')
    <main id="main" class="main">
        <section id="poolcommission" class="content">
            <div class="fade">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                MY AFFILIATE LINKS
                            </h1>
                            <div class="card shadow my-3">
                                <div class="card-header bbcolorp">
                                    <h3 class="card-title">
                                        MY AFFILIATE LINKS
                                    </h3>
                                </div>
                                <div class="card-header py-3">

                                    <div class="col-12">
                                        <div class="info-box mb-4 shadow">
                                            <span class="info-box-icon "><i class="bi bi-star-fill text-dark"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">MY AFFILIATE LINKS</span>



                                                <div class="row">
                                                    <div class="col-10">

                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" id="referral"
                                                                value="https://phpstack-938220-3402762.cloudwaysapps.com/">
                                                            <button class=" btn btn-dark orderbtn linkcopy px-4 mr-3"
                                                                type="button" onclick=" FunctionCopy2()">Copy</button>

                                                            <a href="https://phpstack-938220-3402762.cloudwaysapps.com/"
                                                                target="_blank"
                                                                class=" btn btn-dark orderbtn linkcopy px-4">LINK</a>
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
@endsection
