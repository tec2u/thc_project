@extends('layouts.header')
@section('content')
    <main id="main" class="main">
        <section id="poolcommission" class="content">
            <div class="fade">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <h1>
                                SUBSCRIBED
                            </h1>
                            <div class="card shadow my-3 mt-5">
                                <div class="card-header bbcolorp">
                                    <h3 class="card-title">
                                        SUBSCRIBED
                                    </h3>
                                </div>
                                {{-- <div class="card-header py-3">

                                    <div class="card-tools">
                                        <form action="" method="get">
                                            <div class="input-group input-group-sm my-1">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modelId">Add Campaign</button>
                                            </div>
                                        </form>
                                    </div>

                                </div> --}}

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Campaign</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($data as $funnel)
                                                <tr>
                                                    <th>{{ $funnel->id }}</th>
                                                    <th>{{ $funnel->name }}</th>
                                                    <td>{{ $funnel->email }}</td>
                                                    <td>{{ $funnel->fone }}</td>
                                                    <td>{{ $funnel->campaign->name_campaign ?? __('') }}</td>
                                                @empty
                                                    <td colspan="5" class="text-center">
                                                        <p>You don't have any Bonus campaign registered!</p>
                                                    </td>
                                            @endforelse

                                        </tbody>

                                    </table>
                                </div>
                            </div>

    </main>

    <script>
        function copy(id) {
            navigator.clipboard.writeText("{{ route('indication.index', Auth::user()->id) }}?campaign=" + id + "");
            alert("Copied link")
        }
    </script>
@endsection
