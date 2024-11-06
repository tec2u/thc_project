@extends('layouts.header')
@section('content')
    <main id="main" class="main">
        <section id="poolcommission" class="content">

            @include('campaign.modals.create')
            <div class="fade">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <h1>
                                CAMPAIGN
                            </h1>
                            <div class="card shadow my-3 mt-5">
                                <div class="card-header bbcolorp">
                                    <h3 class="card-title">
                                        CAMPAIGN
                                    </h3>
                                </div>
                                <div class="card-header py-3">

                                    <div class="card-tools">
                                        <form action="" method="get">
                                            <div class="input-group input-group-sm my-1">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modelId">Add Campaign</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>status</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($data as $campaign)
                                                <tr>
                                                    <th>{{ $campaign->id }}</th>
                                                    <td>{{ $campaign->name_campaign }}</td>
                                                    @if ($campaign->status == 1)
                                                        <td>@lang('admin.unilevel.table.active')</td>
                                                    @else
                                                        <td>@lang('admin.unilevel.table.inactive')</td>
                                                    @endif
                                                    <td>{{ $campaign->created_at }}</td>

                                                    <td>
                                                        <button class="btn btn-primary btn-sm m-0"
                                                            onclick="copy({{ $campaign->id }})">Copy
                                                            Link</button>

                                                        <button class="btn btn-primary btn-sm m-0"
                                                            onclick="getEdit({{ $campaign->id }})">@lang('admin.unilevel.table.edit')</button>

                                                        <button type="button" onclick="deleteCampaign({{ $campaign->id }})"
                                                            class="btn btn-danger btn-md m-0">Delete</button>
                                                    </td>
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


    @include('campaign.modals.edit')
    <script>
        function copy(id) {
            var texto = "{{ route('indication.index', Auth::user()->id) }}?campaign=" + id + "";

            var elementoTemporario = document.createElement('textarea');
            elementoTemporario.value = texto;
            document.body.appendChild(elementoTemporario);
            elementoTemporario.select();
            document.execCommand('copy');
            document.body.removeChild(elementoTemporario);
            alert("Copied link")
        }

        function getEdit(id) {
            $.ajax({
                type: "GET",
                url: "/campaign/get/" + id,
                dataType: "json",
                success: function(response) {

                    var meuModal = new bootstrap.Modal(document.getElementById('edit-modal-campaign'));
                    meuModal.show();

                    $("#name-edit").val(response.data.name_campaign)
                    $("#id-edit").val(response.data.id)
                    $("#status-edit option").filter(function() {
                        if (response.data.status == 1) {
                            return this.text == "Active";
                        }
                        return this.text == "Inactive"

                    }).attr('selected', true);



                }
            });
        }

        function deleteCampaign(id) {
            var delete_campaign = id
            Swal.fire({
                title: 'He is sure?',
                text: 'This action cannot be undone!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes!',
                cancelButtonText: 'Close'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/campaign/delete/" + delete_campaign
                }
            });
        }
    </script>
@endsection
