<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('subcategories.update',$subcategory->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">العنوان بالعربي</label>
                <input type="text" class="form-control" value="{{ $subcategory->title_ar }}" name="title_ar" id="title_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">العنوان بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $subcategory->title_en }}" name="title_en" id="title_en">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">لفئة</label>
                <select name="category_id" class="form-control">
                    @foreach($data['categories'] as $category)
                        <option style="text-align: center" value="{{ $category->id }}"
                            {{ $subcategory->category_id == $category->id ? 'selected' : '' }}
                        >{{ $category->title_ar }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>


