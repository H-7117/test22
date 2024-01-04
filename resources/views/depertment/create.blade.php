@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>إنشاء قطاع جديده</h1>

</div>
<div class="col-xl-12">
    <div class="card p-4">
{{--  --}}

<form action="{{ route('depertment.store') }}" method="POST" >
  @csrf
  <div class="row gy-4">
      <div class="col-md-6">
          <input type="text" name="Name" class="form-control" placeholder="الاسم الشركه">
      </div>
      
      <select class="form-control" name="companies_id" id="">
        @foreach ($Company as $Companies)
        <option class="" value="{{ $Companies->id }}">
            {{ $Companies->name }}
        </option>
      @endforeach
        
      </select>
      <div class="col-md-12">
          <textarea class="form-control" name="Description" rows="6" placeholder="عن الشركه"></textarea>
      </div>
      {{-- <div class="col-md-12 text-center"> --}}
          <input type="submit" class="create" />
      {{-- </div>  --}}
  </div>
</form>
    </div>

  </div>
  @endsection