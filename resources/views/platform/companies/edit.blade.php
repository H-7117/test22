@extends('layouts.mainlayout')
@section('edit')
<div class="pagetitle">
    <h1>تحديث الادور للشركات</h1>

  </div><!-- End Page Title -->

<div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label" for="form7Example1">اسم الدور</label>
    <input type="text" id="form7Example1" class="form-control" />
</div>

<div class="tab-pane pt-3" id="">

    <!-- Settings Form -->
    <form class="">

      <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">الاذونات</label>
        <div class="col-md-8 col-lg-9">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="changesMade" checked>
            <label class="form-check-label" for="changesMade">
              انشاء شركه
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="changesMade" checked>
            <label class="form-check-label" for="changesMade">
              حذف شركه
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="newProducts" checked>
            <label class="form-check-label" for="newProducts">
              انشاء مستخدم
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="newProducts" checked>
            <label class="form-check-label" for="newProducts">
              حذف مستخدم
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="proOffers">
            <label class="form-check-label" for="proOffers">
              انشاء وظيفه
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="proOffers">
            <label class="form-check-label" for="proOffers">
              ايقاف وظيفه
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="securityNotify" checked >
            <label class="form-check-label" for="securityNotify">
              انشاء مسؤول نوظيف
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="securityNotify" checked >
            <label class="form-check-label" for="securityNotify">
              حذف مسؤول نوظيف
            </label>
          </div>
        </div>
      </div>

      <div class="text-start">
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </form><!-- End settings Form -->

  </div>
@endsection