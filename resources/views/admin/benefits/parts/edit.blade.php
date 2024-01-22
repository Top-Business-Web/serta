<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('benefits.update',$benefit->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image"
                       data-default-file="{{ asset('assets/admin/sliders/images/'. $benefit->image) }}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">العنوان بالعربي</label>
                <input type="text" value="{{ $benefit->title_ar }}" class="form-control" name="title_ar" id="title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">العنوان بالانجليزي</label>
                <input type="text" value="{{ $benefit->title_en }}" class="form-control" name="title_en" id="title_en">
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

