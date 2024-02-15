<form id="updateForm" method="POST" enctype="multipart/form-data"
    action="{{ route('partners_success.update', $partners_success->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image"
                    data-default-file="{{ asset($partners_success->image) }}"
                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg,
                    jpg,webp</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="second_image" class="form-control-label">الصورة الثانية</label>
                <input type="file" class="dropify" name="second_image"
                    data-default-file="{{ asset($partners_success->second_image) }}"
                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg,
                    jpg,webp</span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>

<script>
    $('.dropify').dropify()
</script>
