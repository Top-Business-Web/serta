<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('sliders.update',$slider->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image" data-default-file="{{asset('assets/admin/Sliders/images/'. $slider->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">العنوان بالعربي</label>
                <input type="text" class="form-control" value="{{ $slider->title_ar }}" name="title_ar" id="title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">العنوان بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $slider->title_en }}" name="title_en" id="title_en">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_title_ar" class="form-control-label">العنوان الفرعي بالعربي</label>
                <input type="text" class="form-control" value="{{ $slider->sub_title_ar }}" name="sub_title_ar" id="sub_title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_title_en" class="form-control-label">العنوان الفرعي بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $slider->sub_title_en }}" name="sub_title_en" id="sub_title_en">
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
