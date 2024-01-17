<form id="updateForm" method="POST" enctype="multipart/form-data" action="">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">نص الرسالة</label>
                <h3>{{ $contact->message }}</h3>
            </div>
        </div>
    </div>
</form>


