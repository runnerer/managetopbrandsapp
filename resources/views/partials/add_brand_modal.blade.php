<div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="addBrandModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBrandModalLabel">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('brands.store') }}" id="addBrandForm">
                    @csrf
                    <div class="mb-3">
                        <label for="brand_name" class="form-label">Brand Name</label>
                        <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="brand_image" class="form-label">Brand Image (URL)</label>
                        <input type="url" class="form-control" id="brand_image" name="brand_image" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country (ISO-2)</label>
                        <input type="text" class="form-control" id="country" name="country" maxlength="2" required>
                    </div>
                    <button type="submit" class="btn btn-success">Add Brand</button>
                </form>
            </div>
        </div>
    </div>
</div>