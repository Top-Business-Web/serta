<form id="updateForm" method="POST" action="{{route('faqs.update',$faq->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="question" class="form-control-label">السؤال بالانجليزية</label>
                <input type="text" class="form-control" name="question" id="question" required="required" value="{{ $faq->question }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="question" class="form-control-label">السؤال بالعربية</label>
                <input type="text" class="form-control" name="question_ar" id="question" required="required" value="{{ $faq->question_ar }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="answer" class="form-control-label">الاجابة بالانجليزية</label>
                <textarea rows="10" type="text" class="form-control" name="answer" required="required" id="answer">{{ $faq->answer }}</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="answer" class="form-control-label">الاجابة بالعربية</label>
                <textarea rows="10" type="text" class="form-control" name="answer_ar" required="required" id="answer">{{ $faq->answer_ar }}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>


