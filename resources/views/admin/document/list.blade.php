@extends('adminlte::page')

@section('title', 'Document')

@section('content')
    @include('flash::message')
    <div class="card">
        <div class="card-header">
            <h3>Document</h3>
        </div>
        <div class="card-body table-responsive">
            <div class="form-group float-right">
                <input type="text" class="search form-control" placeholder="@lang('admin.btn.search')">
            </div>
            <span class="counter float-right"></span>
            <table class="table table-hover table-bordered results">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Document Description</th>
                        <th>Document Approved</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($documents as $document)
                        <tr>
                            <th>{{ $document->id }}</th>
                            <td>{{ $document->document_description }}</td>
                            <td>
                                @if ($document->document_approved == 0)
                                    Not Approved
                                @elseif($document->document_approved == 1)
                                    Approved
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm m-0"
                                onclick="location.href = '{{ route('admin.document.edit', $document->id) }}'">View</button>
                            </td>
                        </tr>
                    @empty
                        <p class="m-4 fst-italic">You have not sent any documents!</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin_custom.css') }}">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $(".search").keyup(function() {
                var searchTerm = $(".search").val();
                var listItem = $('.results tbody').children('tr');
                var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                $.extend($.expr[':'], {
                    'containsi': function(elem, i, match, array) {
                        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf(
                            (match[3] || "").toLowerCase()) >= 0;
                    }
                });

                $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
                    $(this).attr('visible', 'false');
                });

                $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
                    $(this).attr('visible', 'true');
                });

                var jobCount = $('.results tbody tr[visible="true"]').length;
                $('.counter').text(jobCount + ' item');

                if (jobCount == '0') {
                    $('.no-result').show();
                } else {
                    $('.no-result').hide();
                }
            });
        });
    </script>
@stop
