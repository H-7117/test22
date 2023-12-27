@extends('layouts.mainlayout')
@section('content')

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
      <h1>سجل الادوار الشركات</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item">الجدول</li>
          <li class="breadcrumb-item active">المعلومات</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mt-2">

                <h5 class="card-title fs-3">الادوار</h5>
                <button class="create float-right"><a style="color: white" href="{{ route('platform.companies.add') }}">أضافه</a></button>
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
                      <button class="btn"><a href="{{ route('platform.companies.view') }}"><i class="bi bi-eye"></i></a></button>
                      <button class="btn"><a href="{{ route('platform.companies.update') }}"><i class="bi bi-pen"></i></a></button>
                      <button class="btn"><a href="{{ route('platform.companies.delete') }}"><i class="bi bi-trash"></i></a></button>
                      {{-- <button class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><a><i class="bi bi-trash"></i></a></button> --}}
                    </td>
                  </tr>
                  <tr>
                    <td>Theodore Duran</td>
              
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
                  
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Willow Gilliam</td>
                
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Blossom Dickerson</td>

                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Elliott Snyder</td>
   
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Castor Pugh</td>
      
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Pearl Carlson</td>
 
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Deirdre Bridges</td>
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Daniel Baldwin</td>

                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Phelan Kane</td>
                  
                    <td>
                      <button class="btn"><i class="bi bi-eye"></i></button>
                      <button class="btn"><i class="bi bi-pen"></i></button>
                      <button class="btn"><i class="bi bi-trash"></i></button>
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