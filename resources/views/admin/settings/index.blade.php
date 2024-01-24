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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="desc_ar">لوجو الرؤية</label>
                                <input type="file" class="dropify" name="logo_vision"
                                       data-default-file="{{ asset($settings->logo_vision) }}"/
                                       accept="png"/>
                                <span class="form-text text-danger text-center">مسموح فقط PNG</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="licenese">لوجو الاهداف</label>
                                <input type="file" class="dropify" name="logo_mission"
                                       data-default-file="{{ asset($settings->logo_mission) }}"
                                       accept="png"/>
                                <span class="form-text text-danger text-center">مسموح فقط PNG</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="licenese">لوجو القيم</label>
                                <input type="file" class="dropify" name="logo_values"
                                       data-default-file="{{ asset($settings->logo_values) }}"
                                       accept="png"/>
                                <span class="form-text text-danger text-center">مسموح فقط PNG</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">عنوان الرؤية بالعربي</label>
                                <input type="text" value="{{ $settings->title_vision_ar }}" class="form-control" name="title_vision_ar">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">عنوان الاهداف بالعربي</label>
                                <input type="text" class="form-control" value="{{ $settings->title_mission_ar }}" name="title_mission_ar">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">عنوان القيم بالعربي</label>
                                <input type="text" class="form-control" value="{{ $settings->title_values_ar }}" name="title_values_ar">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">عنوان الرؤية بالاجنبي</label>
                                <input type="text" value="{{ $settings->title_vision_en }}" class="form-control" name="title_vision_en">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">عنوان الاهداف بالاجنبي</label>
                                <input type="text" class="form-control" value="{{ $settings->title_mission_en }}" name="title_mission_en">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">عنوان القيم بالاجنبي</label>
                                <input type="text" class="form-control" value="{{ $settings->title_values_en }}" name="title_values_en">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">وصف الرؤية بالعربي</label>
                                <textarea name="desc_vision_ar" class="form-control" rows="8">{{ $settings->desc_vision_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">وصف الاهداف بالعربي</label>
                                <textarea name="desc_mission_ar" class="form-control" rows="8">{{ $settings->desc_mission_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">وصف القيم بالعربي</label>
                                <textarea name="desc_values_ar" class="form-control" rows="8">{{ $settings->desc_values_ar }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">وصف الرؤية بالاجنبي</label>
                                <textarea name="desc_vision_en" class="form-control" rows="8">{{ $settings->desc_vision_en }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">وصف الاهداف بالاجنبي</label>
                                <textarea name="desc_mission_en" class="form-control" rows="8">{{ $settings->desc_mission_en }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">وصف القيم بالاجنبي</label>
                                <textarea name="desc_values_en" class="form-control" rows="8">{{ $settings->desc_values_en }}</textarea>
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


