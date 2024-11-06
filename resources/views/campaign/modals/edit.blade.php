<div class="modal fade" id="edit-modal-campaign" tabindex="-1" role="dialog" aria-labelledby="campaign"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Campaign</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action=" {{ route('campaign.update') }} " method="POST" enctype="multipart/form-campaign">

                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="level">
                                    Name
                                </label>
                                <input type="text" class="form-control form-control-lg" name="name_campaign"
                                    placeholder="Name" id="name-edit">

                                <input type="hidden" class="form-control form-control-lg" name="id_campaign"
                                    placeholder="Name" id="id-edit">

                            </div>
                            <div class="form-group">
                                <label for="status">
                                    Status
                                </label>
                                <select class="form-control form-control-lg" id="status-edit" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>

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
