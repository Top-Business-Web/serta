<form id="updateForm" method="POST" action="{{ route('architecture.update', $architecture->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="files[]" multiple="multiple"
                    data-default-file="{{ asset($architecture->images[0]) }}"
                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp
                    ,
                    يمكنك ادخال عدد الصور التي تريد
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title_ar" class="form-control-label">عنوان المنشور بالعربي</label>
                <input type="text" class="form-control" value="{{ $architecture->title_ar }}" name="title_ar"
                    id="title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="title_en" class="form-control-label">عنوان المنشور بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $architecture->title_en }}" name="title_en"
                    id="title_en">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="sub_title_ar" class="form-control-label">الفئة الفرعية</label>
                <select class="form-control" name="categoryArch_id">
                    <option value="#" selected style="text-align: center">اختار</option>
                    @foreach ($categoryArch as $sub)
                        <option style="text-align: center" value="{{ $sub->id }}"
                            {{ $architecture->categoryArch_id == $sub->id ? 'selected' : '' }}>{{ $sub->title_ar }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_title_ar" class="form-control-label">اسم العميل بالعربي</label>
                <input class="form-control" name="customer_ar" value="{{ $architecture->customer_ar }}" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="customer_en" class="form-control-label">اسم العميل بالانكليزي</label>
                <input class="form-control" name="customer_en" value="{{ $architecture->customer_en }}" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="loaction_ar" class="form-control-label">الموقع بالعربي</label>
                <input type="text" class="form-control" value="{{ $architecture->location_ar }}" name="location_ar" id="loaction">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="loaction_en" class="form-control-label">الموقع بالانكليزي</label>
                <input type="text" class="form-control" value="{{ $architecture->location_en }}" name="location_en" id="loaction_en">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="year" class="form-control-label">السنة</label>
                <input type="number" min="1900" max="2099" step="1" class="form-control" value="{{ $architecture->year }}" name="year" id="year">
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
                    <option value="{{ $publicValue->value }}" {{ $architecture->sector->value == 'public' ? 'selected' : ''}}>عام</option>
                    <option value="{{ $privateValue->value }}" {{ $architecture->sector->value == 'private' ? 'selected' : ''}}>خاص</option>
                </select>
            </div>

        </div>
        {{-- @dd($product->status) --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="status" class="form-control-label">الحالة</label>
                <select class="form-control" name="status">
                    <option value="0" {{ $architecture->status == 0 ? 'selected' : '' }}>مفعل</option>
                    <option value="1" {{ $architecture->status == 1 ? 'selected' : '' }}>غير مفعل</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="desc_ar" class="form-control-label">الوصف بالعربي</label>
                <textarea class="form-control" rows="8" name="desc_ar" id="desc_er">{{ $architecture->desc_ar }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="desc_en" class="form-control-label">الوصف بالانجليزي</label>
                <textarea class="form-control" rows="8" name="desc_en" id="desc_en">{{ $architecture->desc_en }}</textarea>
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
