<form id="updateForm" method="POST" action="{{route('post.update',$post->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" id="testDrop" class="dropify" name="image" data-default-file="{{ asset('assets/admin/posts/images/' . $post->image) }}"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title_ar" class="form-control-label">عنوان المنشور بالعربي</label>
                <input type="text" class="form-control" value="{{ $post->title_ar }}" name="title_ar" id="title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="title_en" class="form-control-label">عنوان المنشور بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $post->title_en }}" name="title_en" id="title_en">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="desc_ar" class="form-control-label">الوصف بالعربي</label>
                <textarea class="form-control" rows="8" name="desc_ar" id="desc_ar">{{ $post->desc_ar }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="desc_en" class="form-control-label">الوصف بالانجليزي</label>
                <textarea class="form-control" rows="8" name="desc_en" id="desc_en">{{ $post->desc_en }}</textarea>
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


