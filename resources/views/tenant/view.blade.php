@extends('layouts.mainlayout')
@section('view')
    <div class="pagetitle">
      <h1>بينات الشركه</h1>
     
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">اسم الشركه</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">الاسم الكامل</div>
                    <div class="col-lg-9 col-md-8">حمود العطاس</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">البريد الإلكتروني</div>
                    <div class="col-lg-9 col-md-8">hamod2131.a@gmail.com</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">العنوان</div>
                    <div class="col-lg-9 col-md-8">المكلا</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">عن الشركه</div>
                    <div class="col-lg-9 col-md-8">عن الشركه عن الشركه عن الشركه عن الشركه عن الشركه</div>
                  </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection