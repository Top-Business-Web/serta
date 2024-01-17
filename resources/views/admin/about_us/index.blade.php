@extends('admin/layouts/master')

@section('title')
    | معلومات عنا
@endsection
@section('page_name')
    معلومات عنا
@endsection
@section('content')

    <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data" action="{{ route('about_us.update', $about_us->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $about_us->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-header">
                        <h3 class="card-title">قائمة معلومات عنا </h3>
                    </div>
                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">صورة</label>
                                <input type="file" class="dropify" name="image"
                                       data-default-file="{{asset($about_us->image)}}"
                                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">الصورة في الاسفل</label>
                                <input type="file" class="dropify" name="img"
                                       data-default-file="{{asset($about_us->img)}}"
                                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                            </div>
                        </div>
                    </div>
                    <h1 class="card-title">قائمة  الاعدادات العامة : </h1>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="facebook_link">العنوان بالعربي :</label>
                                <input type="text" name="title_ar" value="{{ $about_us->title_ar }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">العنوان بالانجليزي :</label>
                                <input type="text" name="title_en" value="{{ $about_us->title_en }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address_ar">العنوان العلوي بالعربي :</label>
                                <input type="text" name="top_title_ar" value="{{ $about_us->top_title_ar }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address_en">العنوان العلوي بالانجليزي :</label>
                                <input type="text" name="top_title_en" value="{{ $about_us->top_title_en }}"
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook_link">  عملاء سعداء :</label>
                                <input type="number" name="happy_clients" value="{{ $about_us->happy_clients }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook_link">  سنوات الخبرة :</label>
                                <input type="number" name="year_ex" value="{{ $about_us->year_ex }}"
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_ar">الوصف بالعربي :</label>
                                <textarea name="desc_ar" rows="8" class="form-control">{{ $about_us->desc_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_ar">الوصف العلوي بالعربي :</label>
                                <textarea name="top_desc_ar" rows="8" class="form-control">{{ $about_us->top_desc_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_en">الوصف بالانجليزي :</label>
                                <textarea name="desc_en" rows="8" class="form-control">{{ $about_us->desc_en }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_en">الوصف العلوي بالانجليزي :</label>
                                <textarea name="top_desc_en" rows="8" class="form-control">{{ $about_us->top_desc_en }}</textarea>
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


