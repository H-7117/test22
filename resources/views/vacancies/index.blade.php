@extends('layouts.mainlayout')
@section('usertable')

    <div class="pagetitle">
      <h1>سجل بيانات المتقدمين</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mt-2">

                <h5 class="card-title fs-3">الوظائف الشاغره</h5>
                <button class="create float-right"><a style="color: white" href="{{ route('companyVacancies.create') }}">أضافه</a></button>

              </div>
              
              <p></p>

              <!-- Table with stripped rows -->
              <table  dir="rtl" id="listTable" class="table px-5">
                <thead>
                  <tr>
                    <th colspan="1">
                      الاسم
                    </th>
                    <th>عدد المتقدمين</th>
                      <th>حاله الوظيفه</th>
                    <th colspan="4">الإجراءت</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($vacancy as $vacancies)
                    
                  <tr>
                    <td>{{ $vacancies->job->Title }}</td>
                <td >{{ $vacancies->number_of_applicants }}</td>
                <td><span  class="{{ $vacancies->jobState == 'متاحة' ?  'btn-open':'btn-close' }}">{{ $vacancies->jobState }}</span></td>
                    <td>
                      <button class="btn"><a href="{{ route('companyVacancies.show',$vacancies->id) }}"><i class="bi bi-eye"></i></a></button>
                      <button class="btn"><a href="{{ route('companyVacancies.edit',$vacancies->id) }}"><i class="bi bi-pen"></i></a></button>

                    </td>
                  </tr>
                  @endforeach
             
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  @endsection