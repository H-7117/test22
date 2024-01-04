@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>اضافه وظائف</h1>

</div><!-- End Page Title -->
<div class="col-xl-12">
    <div class="card p-4">
      <form action="{{ route('companiesJob.store') }}" method="POST" >
        @csrf
        
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="Title" class="form-control" placeholder="اسم الوظيفه" required>
          </div>


          <div class="col-md-6">
            <select name="jobType" id="" class=" form-control">
              <option value="">نوع الوظيفه</option>
              <option value="دوام-جزائي">دوام جزائي</option>
              <option value="دوام-كامل">دوام كامل </option>
            </select>
          </div>
          
          <div class="col-md-6">
            <select name="Location"  id="" class=" form-control">
              <option value="">الموقع</option>
              <option value="عدن">عدن</option>
              <option value="صنعاء">صنعاء</option>
              <option value="مارب">مارب</option>
            </select>
          </div>

          <div class="col-md-6">
            <select name="depertments_id" id="" class=" form-control">
              <option value="">القطاع</option>
             @foreach ($depertment as $depertments)
             <option value="{{ $depertments->id }}">{{ $depertments->Name }}</option>
             @endforeach
             
            </select>
          </div>


          
   
          <div class="col-md-12">
            <textarea class="form-control" name="jobDescription" rows="6" placeholder="وصف الوظيفه" required></textarea>
          </div>

          <div class="col-md-12 text-center">
         
            <div class="d-flex justify-content-end">
            
                <button type="submit" class="create ">حفظ</button>
            </div>

          </div>

        </div>
      </form>
    </div>

  </div>
  @endsection