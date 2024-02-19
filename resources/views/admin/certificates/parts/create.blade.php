<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" action="{{ route('certificates.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">الشهادة بالعربي</label>
                    <input type="text" class="form-control" name="question_ar" id="question_ar">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">الشهادة بالانجليزي</label>
                    <input type="text" class="form-control" name="question_en" id="questionen">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">الوصف بالعربي</label>
                   <textarea class="form-control" name="answer_ar" rows="8"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">الوصف بالانجليزي</label>
                    <textarea class="form-control" name="answer_en" rows="8"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
</div>
