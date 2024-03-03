@extends('admin/layouts/master')

@section('title')
    |خلفيات الصفحات
@endsection
@section('page_name')
    خلفيات الصفحات
@endsection
@section('content')
    @foreach ($images as $image)
        <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data"
            action="{{ route('background_image.update', $image->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $image->id }}" />
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card" style="padding: 13px">
                        <div class="card-header">
                            <h3 class="card-title">قائمة الخلفيات </h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">معلومات عنا</label>
                                    <input type="file" class="dropify" name="about_img"
                                        data-default-file="{{ asset($image->about_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">خدمات</label>
                                    <input type="file" class="dropify" name="service_img"
                                        data-default-file="{{ asset($image->service_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">مشروع</label>
                                    <input type="file" class="dropify" name="product_img"
                                        data-default-file="{{ asset($image->product_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">حياة مهنية</label>
                                    <input type="file" class="dropify" name="career_img"
                                        data-default-file="{{ asset($image->career_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">الوظائف</label>
                                    <input type="file" class="dropify" name="news_img"
                                        data-default-file="{{ asset($image->news_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">تواصل</label>
                                    <input type="file" class="dropify" name="contact_img"
                                        data-default-file="{{ asset($image->contact_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">الاسئلة الشائعة</label>
                                    <input type="file" class="dropify" name="faqs_img"
                                        data-default-file="{{ asset($image->faqs_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">تقديم طلب</label>
                                    <input type="file" class="dropify" name="qoute_img"
                                        data-default-file="{{ asset($image->qoute_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">التصاميم المعمارية</label>
                                    <input type="file" class="dropify" name="architecture_img"
                                        data-default-file="{{ asset($image->architecture_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">الأخبارية</label>
                                    <input type="file" class="dropify" name="news_img"
                                        data-default-file="{{ asset($image->news_img) }}"
                                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif,
                                        jpeg, jpg,webp</span>
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
    @endforeach
    @include('admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        editScript();
    </script>
@endsection
