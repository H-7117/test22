@extends('layouts.mainlayout')
@section('view')
    <div class="pagetitle">
      <h1>بينات القطاع</h1>
     
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">اسم القطع</div>
                    <div class="col-lg-9 col-md-8">{{ $depertment->Name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">الوصف</div>
                    <div class="col-lg-9 col-md-8">{{ $depertment->Description }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">الشركه</div>
                    <div class="col-lg-9 col-md-8">{{ $depertment->company->name }}</div>
                  </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection