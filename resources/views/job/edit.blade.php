
@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>اضافه وظائف</h1>

</div><!-- End Page Title -->
<div class="col-xl-12">
    <div class="card p-4">
      <form action="{{ route('companiesJob.update',$jobs->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="Title" class="form-control" value="{{ $jobs->Title }}" placeholder="اسم الوظيفه" required>
          </div>


          <div class="col-md-6">
            <select name="jobType"  id="" class=" form-control">

              <option value="">نوع الوظيفه</option>
              <option {{ $jobs->jobType == 'دوام-جزائي' ?  'selected':'' }} value="دوام-جزائي">دوام جزائي</option>
              <option {{ $jobs->jobType == 'دوام-كامل' ?  'selected' :''}}  value="دوام-كامل">دوام كامل </option>
            </select>
          </div>
          
          <div class="col-md-6">
            <select name="Location"  id="" class=" form-control">
              <option value="">الموقع</option>
              <option {{ $jobs->Location == 'عدن' ?  'selected':'' }} value="عدن">عدن</option>
              <option {{ $jobs->Location == 'صنعاء' ?  'selected':'' }} value="صنعاء">صنعاء</option>
              <option {{ $jobs->Location == 'مارب' ?  'selected':'' }} value="مارب">مارب</option>
            </select>
          </div>

          <div class="col-md-6">
            <select name="depertments_id" id="" class=" form-control">
              <option value="">القطاع</option>
             @foreach ($depertments as $depertments)
             <option {{ $jobs->depertments_id == $depertments->id ?  'selected':'' }} value="{{ $depertments->id }}">{{ $depertments->Name }}</option>
             @endforeach
             
            </select>
          </div>


          
   
          <div class="col-md-12">
            <textarea class="form-control" name="jobDescription" rows="6" placeholder="وصف الوظيفه" required>{{  $jobs->jobDescription }} </textarea>
          </div>

          <div class="col-md-12 text-center">
         
            <div class="d-flex justify-content-end">
            
                <button type="submit" class="create">حفظ</button>
            </div>

          </div>

        </div>
      </form>
    </div>

  </div>
  @endsection