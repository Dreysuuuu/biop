<div id="Service-03" class="modal fade" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form method="post" action="functions/service.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Business Permit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body px-5">
                        <small class="mb-5">
                        A Barangay Business Permit is an official document that authorizes a business to operate within a specific Barangay. 
                        It ensures that the business complies with local regulations and is typically required for legal operation, securing 
                        other permits, and maintaining good standing within the community.
                        </small>
                        <p class="text-muted text-sm my-3">
                            Please fill out all of the required fields (<span class="text-danger">*</span>)
                        </p>
                        <div class="mb-3">
                            <label class="form-label">Business Owner's Name <span class="text-danger">*</span></label>
                            <input name="Name" type="text" class="form-control focus-ring" required />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-3">
                                    <label class="form-label">Barangay Clearance <span class="text-danger">*</span></label>
                                    <input name="Clearance" type="file" class="form-control focus-ring" accept="image/png, image/jpeg, application/msword, application/pdf" required>
                                </div>
                                <div class="my-3">
                                    <label class="form-label">DTI/SEC Registration <span class="text-danger">*</span></label>
                                    <input name="Registration" type="file" class="form-control focus-ring" accept="image/png, image/jpeg, application/msword, application/pdf" required>
                                </div>
                                <div class="my-3">
                                    <label class="form-label">Business Location Sketch <span class="text-danger">*</span></label>
                                    <input name="Location" type="file" class="form-control focus-ring" accept="image/png, image/jpeg, application/msword, application/pdf" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-3">
                                    <label class="form-label">Community Tax Certificate (Cedula) <span class="text-danger">*</span></label>
                                    <input name="Cedula" type="file" class="form-control focus-ring" accept="image/png, image/jpeg, application/msword, application/pdf" required>
                                </div>
                                <div class="my-3">
                                    <label class="form-label">Sanitary Permit - For Food/Beverage or Health Sector <span class="text-muted">(Optional)</span></label>
                                    <input name="Sanitary" type="file" class="form-control focus-ring" accept="image/png, image/jpeg, application/msword, application/pdf">
                                </div>
                                <div class="my-3">
                                    <label class="form-label">Valid ID <span class="text-danger">*</span></label>
                                    <input name="ID" type="file" class="form-control focus-ring" accept="image/png, image/jpeg, application/msword, application/pdf" required>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger text-light">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>
