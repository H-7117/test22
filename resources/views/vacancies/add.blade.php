@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>اضافه وظائف</h1>

</div><!-- End Page Title -->
<div class="col-xl-12">
    <div class="card p-4">
      <form action="{{ route('companyVacancies.store') }}" method="POST" >
        @csrf
        
        <div class="row gy-4">
         <div class="col-md-6">
          <select name="jobs_id" class=" form-control " id="">
            @foreach ($jobs as $job)
            <option value="{{ $job->id }}">
                    {{ $job->Title }}
            </option>
            @endforeach
          </select>
         </div>
         <div class="col-md-6">
          <input type="text"  name="number_of_applicants" class="form-control" placeholder="عدد المتقدمين">
         </div>

          <div class="col-md-3">
            <label for="state">Job State</label>
        <select class="form-control" name="jobState" id="state" required>
            <option value="متاحة">متاحة</option>
            <option value="مغلقة">مغلقة</option>
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