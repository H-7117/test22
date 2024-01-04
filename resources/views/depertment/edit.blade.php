@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>إنشاء شركة جديده</h1>

</div>
<div class="col-xl-12">
    <div class="card p-4">
{{--  --}}

<form action="{{ route('depertment.update',$depertment->id) }}" method="POST" >
  @csrf
  @method('PUT')
  <div class="row gy-4">
      <div class="col-md-6">
          <input type="text" name="Name" value="{{ $depertment->Name }}" class="form-control" placeholder="الاسم">
      </div>
     
      <div class="col-md-12">
          <textarea class="form-control" name="Description" rows="6" placeholder="الوصف">{{ $depertment->Description }}</textarea>
      </div>
      {{-- <div class="col-md-12 text-center"> --}}
          <input type="submit" class="create" />
      {{-- </div>  --}}
  </div>
</form>
    </div>

  </div>
  @endsection