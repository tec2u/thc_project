<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Campaign</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('campaign.store') }}" method="POST"
                enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="level">
                          Name
                        </label>
                        <input type="text"
                            class="form-control form-control-lg @error('name_campaign') is-invalid @enderror"
                            id="name" name="name_campaign" placeholder="Name"
                            value="{{ old('name_campaign') }}">
                        @error('name_campaign')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">
                            Status
                            {{-- @lang('admin.unilevel.table.col1') --}}
                        </label>

                        <select class="form-control form-control-lg @error('status') is-invalid @enderror"
                            id="status" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>

                        @error('status')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
