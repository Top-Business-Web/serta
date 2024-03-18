<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('news.update', $news->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">الصورة الرئيسية</label>
                    <input type="file" class="dropify" name="main_image"
                        data-default-file="{{ asset($news->main_image) }}"
                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg,
                        jpg,webp</span>
                </div>
            </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="files[]" multiple="multiple"
                    data-default-file="{{ asset($news->images[0]) }}"
                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg,
                    jpg,webp</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">العنوان بالعربي</label>
                <input type="text" class="form-control" value="{{ $news->title_ar }}" name="title_ar" id="title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">العنوان بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $news->title_en }}" name="title_en" id="title_en">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">الوصف بالعربي</label>
                <textarea class="form-control" name="desc_ar" rows="8">{{ $news->desc_ar }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">الوصف بالانجليزي</label>
                <textarea class="form-control" name="desc_en" rows="8">{{ $news->desc_en }}</textarea>
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

