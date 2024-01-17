@extends('admin/layouts/master')

@section('title')
     الاعدادات
@endsection
@section('page_name')
    الاعدادات
@endsection
@section('content')

    <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data" action="{{ route('settings.update', $settings->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $settings->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-header">
                        <h3 class="card-title">قائمة الاعدادات </h3>
                    </div>
                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">لوجو</label>
                                <input type="file" class="dropify" name="logo"
                                       data-default-file="{{asset($setting->logo)}}"
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
                                <input type="text" name="title_ar" value="{{ $settings->title_ar }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">العنوان بالانجليزي :</label>
                                <input type="text" name="title_en" value="{{ $settings->title_en }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address_ar">المكان بالعربي :</label>
                                <input type="text" name="address_ar" value="{{ $settings->address_ar }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address_en">المكان بالانجليزي :</label>
                                <input type="text" name="address_en" value="{{ $settings->address_en }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="facebook_link"> رابط الموقع :</label>
                                <input type="url" name="location_url" value="{{ $settings->location_url }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> الايميل :</label>
                                <input type="email" name="email" value="{{ $settings->email }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> الهاتف :</label>
                                <input type="text" name="phone" value="{{ $settings->phone }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> مفتوح :</label>
                                <input type="text" name="open" value="{{ $settings->open }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <h1 class="card-title" style="font: bold">قائمة السوشيال ميديا : </h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="facebook_link">فيسبوك :</label>
                                <input type="url" name="facebook" value="{{ $settings->facebook }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">يوتيوب :</label>
                                <input type="url" name="youtube" value="{{ $settings->youtube }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">تويتر :</label>
                                <input type="url" name="twitter" value="{{ $settings->twitter }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">انستجرام :</label>
                                <input type="url" name="instagram" value="{{ $settings->instagram }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">لينكد ان :</label>
                                <input type="url" name="linkedin" value="{{ $settings->linkedin }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_ar">ملف الشركة</label>
                                <input type="file" class="dropify" name="profile"
                                       data-default-file="{{asset($setting->profile)}}"/>
                                <span class="form-text text-danger text-center">مسموح فقط PDF</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="licenese">ترخيص الشركة</label>
                                <input type="file" class="dropify" name="licenese"
                                       data-default-file="{{asset($setting->licenese)}}"
                                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_ar">الوصف بالعربي :</label>
                                <textarea name="desc_ar" rows="8" class="form-control">{{ $settings->desc_en }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_en">الوصف بالانجليزي :</label>
                                <textarea name="desc_en" rows="8" class="form-control">{{ $settings->desc_en }}</textarea>
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


