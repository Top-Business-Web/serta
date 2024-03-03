@extends('admin/layouts/master')

@section('title')
    | معلومات التصميم المعماري
@endsection
@section('page_name')
    معلومات التصميم المعماري
@endsection
@section('content')

    <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data" action="{{ route('about_archs.update', $about_arch->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $about_arch->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-header">
                        <h3 class="card-title">قائمة التصميم المعماري </h3>
                    </div>
                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">صورة</label>
                                <input type="file" class="dropify" name="image"
                                       data-default-file="{{asset($about_arch->image)}}"
                                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">الملف الورقي</label>
                                <input type="file" class="dropify" name="pdf"
                                       data-default-file="{{asset($about_arch->pdf)}}"
                                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                            </div>
                        </div>
                    </div>
                    <h1 class="card-title">قائمة  الاعدادات العامة : </h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook_link">العنوان بالعربي :</label>
                                <input type="text" name="title_ar" value="{{ $about_arch->title_ar }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">العنوان بالانجليزي :</label>
                                <input type="text" name="title_en" value="{{ $about_arch->title_en }}"
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_ar">الوصف بالعربي :</label>
                                <textarea name="desc_ar" rows="8" class="form-control">{{ $about_arch->description_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_en">الوصف بالانجليزي :</label>
                                <textarea name="desc_en" rows="8" class="form-control">{{ $about_arch->description_ar }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" id="updateButton">تحديث</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        editScript();
    </script>
@endsection


