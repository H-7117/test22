@extends('layouts.mainlayout')
@section('usertable')


    <div class="pagetitle">
      <h1>القطاعات</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mt-2">

                <h5 class="card-title fs-3">المنظمات</h5>
                <button class="create float-right"><a style="color: white" href="{{ route('depertment.create') }}">أضافه</a></button>
              </div>
              
              <p></p>

              <!-- Table with stripped rows -->
              <table dir="rtl" id="listTable" class="table ">
                <thead>
                  <tr>
                    <th colspan="1">
                      الاسم
                    </th>
                    
                    <th colspan="1">
                      الوصف
                    </th>
                    <th colspan="1">
                      الشركات
                    </th>
                   
                
                    <th colspan="4">الإجراءت</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($depertments as $depertment )
                    
                  <tr>
                    <td>{{ $depertment->Name }}</td>
                    <td>{{ $depertment->Description }}</td>
                    <td>{{ $depertment->company->name }}</td>
                    <td>
                        <button class="btn"><a href="{{ route('depertment.show',$depertment->id) }}"><i class="bi bi-eye"></i></a></button>
                       <button class="btn"><a href="{{ route('depertment.edit',$depertment->id) }}"><i class="bi bi-pen"></i></a></button>
                      <button class="btn"><a href="{{ route('depertment.delete',$depertment->id) }}"><i class="bi bi-trash"></i></a></button> 
                      {{-- <button class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><a><i class="bi bi-trash"></i></a></button> --}}
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