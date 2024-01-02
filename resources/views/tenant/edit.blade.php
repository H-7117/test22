@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>تحديث بينات {{ $company->name  }}</h1>

</div>
<div class="col-xl-12">
    <div class="card p-4">
{{--  --}}

<form action="{{ route('tenant.update',$company->id) }}" method="POST" >
  @csrf
  @method('PUT')
  <div class="row gy-4">
      <div class="col-md-6">
          <input type="text" name="name" class="form-control" value="{{ $company->name }}" placeholder="الاسم الشركه">
      </div>
      <div class="col-md-6">
          <input type="email"  name="EmailAddress" class="form-control" value="{{ $company->EmailAddress }}" placeholder="البريد الالكتروني">
      </div>
      <div class="col-md-6">
          <input type="text"  name="country" class="form-control" value="{{ $company->country }}" placeholder="البلاد"/>
      </div>
      <div class="col-md-6">
          <input type="text"  name="city" class="form-control" value="{{ $company->city }}" placeholder="المدينه"/>
      </div>
      <div class="col-md-6">
          <input type="file" class="form-control" value="{{ $company->logo }}" name="logo"/>
      </div>
      <div class="col-md-12">
          <textarea class="form-control" name="aboutCompany" rows="6" placeholder="عن الشركه">{{ $company->aboutCompany	 }}</textarea>
      </div>
      {{-- <div class="col-md-12 text-center"> --}}
          <input type="submit" class="create" />
      {{-- </div>  --}}
  </div>
</form>
    </div>

  </div>
  @endsection