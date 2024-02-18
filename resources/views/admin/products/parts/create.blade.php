<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{ route('product.store') }}">
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
                    <select class="form-control" name="sub_categories_id">
                        <option value="" selected disabled style="text-align: center">اختار</option>
                        @foreach ($data['sub_categories'] as $sub)
                            <option style="text-align: center" value="{{ $sub->id }}">{{ $sub->title_ar }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="loaction" class="form-control-label">الموقع</label>
                    <input type="text" class="form-control" name="location" id="location">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="year" class="form-control-label">السنة</label>
                    <input type="date" class="form-control" name="year" id="year">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @php
                    use App\Enums\SectorTypeEnum;
                    $publicValue = SectorTypeEnum::PUBLIC;
                    $privateValue = SectorTypeEnum::PRIVATE;
                @endphp

                <div class="form-group">
                    <label for="sector" class="form-control-label">القطاع</label>
                    <select class="form-control" name="sector">
                        <option value="{{ $publicValue->value }}">عام</option>
                        <option value="{{ $privateValue->value }}">خاص</option>
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
