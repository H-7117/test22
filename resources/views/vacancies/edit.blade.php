@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>اضافه وظائف</h1>

</div><!-- End Page Title -->
<div class="col-xl-12">
    <div class="card p-4">
      <form action="{{ route('companyVacancies.update',$vacancy->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="row gy-4">
         <div class="col-md-6">
          <select name="jobs_id" class=" form-control " id="">
            @foreach ($jobs as $job)
            <option {{ $vacancy->jobs_id == $job->id ?  'selected':'' }} value="{{ $job->id }}">
                    {{ $job->Title }}
            </option>
            @endforeach
          </select>
         </div>
         <div class="col-md-6">
          <input type="text"  name="number_of_applicants" value="{{ $vacancy->number_of_applicants }}" class="form-control" placeholder="عدد المتقدمين">
         </div>

          <div class="col-md-3">
            <label for="state">Job State</label>
        <select class="form-control" name="jobState" id="state"  required>
            <option {{ $vacancy->jobState == 'متاحة' ?  'selected':'' }} value="متاحة">متاحة</option>
            <option {{ $vacancy->jobState == 'مغلقة' ?  'selected':'' }} value="مغلقة">مغلقة</option>
        </select>
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