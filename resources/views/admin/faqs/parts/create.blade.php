<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" action="{{route('faqs.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="question" class="form-control-label">السؤال بالانجليزية</label>
                    <input type="text" class="form-control" name="question" id="question" required="required">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="question" class="form-control-label">السؤال بالعربية</label>
                    <input type="text" class="form-control" name="question_ar" id="question" required="required">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="answer" class="form-control-label">الاجابة بالانجليزية</label>
                    <textarea rows="10" type="text" class="form-control" name="answer" id="answer" required="required"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="answer" class="form-control-label">الاجابة بالعربية</label>
                    <textarea rows="10" type="text" class="form-control" name="answer_ar" id="answer" required="required"></textarea>
                </div>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
            </div>
    </form>
</div>

