@extends('layouts.mainlayout')
@section('usertable')

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header  ">
        <button type="button " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h5 class="modal-title d-flex justify-content-end" id="deleteModalLabel">تأكيد الحذف</h5>
      </div>
      <div class="modal-body">
        <p>هل أنت متأكد أنك تريد حذف هذه السجل</p>
      </div>
      <div class="modal-footer d-flex justify-content-start">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-danger">حذف</button>
      </div>
    </div>
  </div>
</div>

    <div class="pagetitle">
      <h1>سجل بيانات الباحثون</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mt-2">

                <h5 class="card-title fs-3">الباحثون</h5>
              </div>
              
              <p></p>

              <!-- Table with stripped rows -->
              <table dir="rtl" id="listTable" class="table ">
                <thead>
                  <tr>
                    <th colspan="1">
                      الاسم
                    </th>
                 
                    <th colspan="4">الإجراءت</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unity Pugh</td>
              
                    <td>
                      <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                      <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>

                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
                 
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
             
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
               
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
                 
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
               
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
              
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
              
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
              
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
               
                    <td>
                        <button class="btn"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-check"></i></a></button>
                        <button class="btn bt3"><a href="{{ route('vacancies.view') }}"><i class="bi bi-person-fill-slash"></i></a></button>
                    </td>
                  </tr>
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  @endsection