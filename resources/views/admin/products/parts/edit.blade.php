<form id="updateForm" method="POST" action="{{route('product.update',$product->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="files[]" multiple="multiple"
                       data-default-file="{{asset($product->images[0])}}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp
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
                <input type="text" class="form-control" value="{{ $product->title_ar }}" name="title_ar" id="title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="title_en" class="form-control-label">عنوان المنشور بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $product->title_en }}" name="title_en" id="title_en">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_title_ar" class="form-control-label">عنوان الفرعي للمنشور بالعربي</label>
                <input type="text" class="form-control" value="{{ $product->sub_title_ar }}" name="sub_title_ar" id="sub_title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_title_en" class="form-control-label">عنوان الفرعي للمنشور بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $product->sub_title_en }}" name="sub_title_en" id="sub_title_en">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="sub_title_ar" class="form-control-label">الفئة الفرعية</label>
                <select class="form-control" name="sub_categories_id">
                    <option value="#" selected style="text-align: center">اختار</option>
                    @foreach($sub_categories as $sub)
                        <option style="text-align: center" value="{{ $sub->id }}"
                                {{ $product->sub_categories_id  == $sub->id ? 'selected' : '' }}
                        >{{ $sub->title_ar }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="desc_ar" class="form-control-label">الوصف بالعربي</label>
                <textarea class="form-control" rows="8" name="desc_ar" id="desc_er">{{ $product->desc_ar }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="desc_en" class="form-control-label">الوصف بالانجليزي</label>
                <textarea class="form-control" rows="8" name="desc_en" id="desc_en">{{ $product->desc_en }}</textarea>
            </div>
        </div>

        <label class="control-label">وصف اضافي</label>
        @foreach($product->details as $detail)
        <div class="col-4">
            <div class="form-group itemKeys">
                <label class="control-label">اسم</label>
                <input type="text" name="items[{{ $loop->iteration }}][key]" value="{{ $detail['key'] }}" class="form-control InputKey">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group itemItems">
                <label class="control-label">القيمة</label>
                <input type="text" name="items[{{ $loop->iteration }}][value]" value="{{ $detail['value'] }}" class="form-control InputItem">
            </div>
        </div>
        @endforeach
        <div class="col-4">
            <div class="form-group ButtonItems">
                <button type="button" class="btn btn-sm btn-primary MoreItem">عنصر اخر</button>
            </div>
        </div>

        <script>
            var i ={{count($product->details)}};
            $('.MoreItem').on('click', function () {
                var Item = $('.InputItemExtra').last();
                if (Item.val() !== '') {
                    ++i;
                    $('.itemKeys').append('<label class="control-label">اسم</label><input type="text" name="items['+i+'][key]" class="form-control InputKeyExtra">')
                    $('.itemItems').append(' <label class="control-label">القيمة</label><input type="text" name="items['+i+'][value]" class="form-control InputItemExtra">')
                }
            })
        </script>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>

<script>
    $('.dropify').dropify()
</script>


