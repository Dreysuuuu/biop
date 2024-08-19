<div id="Service-02" class="modal fade" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form method="post" action="functions/service.php">
                <div class="modal-header">
                    <h5 class="modal-title">Barangay Clearance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body px-5">
                        <small class="mb-5">
                            A Barangay Clearance is an official document that certifies an individual's good standing and compliance with local 
                            regulations within their Barangay. It is often required for various purposes, such as employment, business registration, 
                            or other legal and administrative transactions.
                        </small>
                        <p class="text-muted text-sm my-3">
                            Please fill out all of the required fields (<span class="text-danger">*</span>)
                        </p>
                        <div class="my-3">
                            <label class="form-label">Purpose of Request <span class="text-danger">*</span></label>
                            <textarea name="Purpose" class="form-control focus-ring" style="height: 60px" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input name="Name" type="text" class="form-control focus-ring" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Full Address <span class="text-danger">*</span></label>
                            <input name="Address" type="text" class="form-control focus-ring" required />
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger text-light">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>
