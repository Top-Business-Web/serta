<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{ route('architecture.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="form-control-label">الصورة</label>
                    <input type="file" class="dropify" name="files[]" multiple="multiple"
                        data-default-file="{{ asset('assets/uploads/post.png') }}"
                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg,
                        jpg,webp</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title_ar" class="form-control-label">عنوان المنشور بالعربي</label>
                    <input type="text" class="form-control" name="title_ar" id="title_ar">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title_en" class="form-control-label">عنوان المنشور بالانجليزي</label>
                    <input type="text" class="form-control" name="title_en" id="title_en">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="sub_title_ar" class="form-control-label">الفئة الفرعية</label>
                    <select class="form-control" name="categoryArch_id">
                        <option value="" selected disabled style="text-align: center">اختار</option>
                        @foreach ($data['arch_categories'] as $sub)
                            <option style="text-align: center" value="{{ $sub->id }}">{{ $sub->title_ar }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sub_title_ar" class="form-control-label">اسم العميل بالعربي</label>
                    <input class="form-control" name="customer_ar" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="customer_en" class="form-control-label">اسم العميل بالانكليزي</label>
                    <input class="form-control" name="customer_en" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="location_ar" class="form-control-label">الموقع بالعربي</label>
                    <input type="text" class="form-control" name="location_ar" id="location_ar">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="location_en" class="form-control-label">الموقع بالانكليزي</label>
                    <input type="text" class="form-control" name="location_en" id="location_en">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="year" class="form-control-label">السنة</label>
                    <input type="number" class="form-control" min="1900" max="2099" step="1" placeholder="2016" name="year" id="year">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sector" class="form-control-label">القطاع</label>
                    <select class="form-control" name="sector">
                        <option value="public">عام</option>
                        <option value="private">خاص</option>
                    </select>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status" class="form-control-label">الحالة</label>
                    <select class="form-control" name="status">
                        <option value="0">مفعل</option>
                        <option value="1">غير مفعل</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="desc_ar" class="form-control-label">الوصف بالعربي</label>
                    <textarea class="form-control" rows="8" name="desc_ar" id="desc_er"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="desc_en" class="form-control-label">الوصف بالانجليزي</label>
                    <textarea class="form-control" rows="8" name="desc_en" id="desc_en"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
            </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
</script>
