@extends('layouts.mainlayout')
@section('view')
    <div class="pagetitle">
      <h1>الادوار</h1>
     
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">اسم الدور</h5>

                  <h5 class="card-title">الاذونات</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">اضافه اقسام</div>
                  
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">إضافه ادوار</div>
                   
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">اضافه المستخدمين</div>
            
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">استعراض الوظائف</div>
               
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">حذف ملفات</div>
             
                  </div>

                </div>

          </div>

        </div>
      </div>
    </section>

@endsection