@extends('layouts.header')
@section('content')
<main id="main" class="main">
    @include('flash::message')
    <section id="upload_document" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>@lang('user.li1')</h1>
                        <div class="col-12">
                            <p class="text-white responsive-p">@lang('user.li2')</p>
                        </div>
                        <div class="card shadow my-3">
                            <form class="row gx-3 gy-2 align-items-center p-5" action="{{ route('document.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="col-md-4">
                                    <label for="input_document" class="form-label">@lang('user.li3')</label>
                                    <input type="file" name="document_file" id="input_document" required class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="doc_description" class="form-label">@lang('user.li4')</label>
                                    <select name="dropdown_options" id="dropdown_options" class="form-select">
                                        <option name="document_description" id="doc_description" value="pass">@lang('user.li5')</option>
                                        <option name="document_description" id="doc_description" value="id">ID</option>
                                        <option name="document_description" id="doc_description" value="option3">@lang('user.li6')</option>
                                        <option name="document_description" id="doc_description" value="option4">@lang('user.li7')</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-5">
                                    <button type="submit" class="btn btn-primary rounded-pill">
                                    @lang('user.li8')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="list_documents" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow my-3">
                            <div class="card-header bbcolorp">
                                <h3 class="card-title">@lang('user.li9')</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>@lang('user.li10')</th>
                                            <th>@lang('user.li11')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($documents as $document)
                                        <tr>
                                            <th>{{ $document->id }}</th>
                                            <td>{{ $document->document_description }}</td>
                                            <td>
                                                @if ($document->document_approved == 0)
                                                @lang('user.li12')
                                                @elseif($document->document_approved == 1)
                                                @lang('user.li13')
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <p class="m-4 fst-italic">@lang('user.li14')</p>
                                        @endforelse
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
<script>
    $(window).load(function() {
        $('#flash-overlay-modal').modal('show');
    });

    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endsection