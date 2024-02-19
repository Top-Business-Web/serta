<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('certificates.update', $certificate->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">الشهادة بالعربي</label>
                <input type="text" class="form-control" value="{{ $certificate->question_ar }}" name="question_ar" id="question_ar">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">الشهادة بالانجليزي</label>
                <input type="text" class="form-control" value="{{ $certificate->question_en }}" name="question_en" id="questionen">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">الوصف بالعربي</label>
                <textarea class="form-control" name="answer_ar" rows="8">{{ $certificate->answer_ar }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">الوصف بالانجليزي</label>
                <textarea class="form-control" name="answer_en" rows="8">{{ $certificate->answer_en }}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>
