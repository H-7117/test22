@extends('layouts.mainlayout')
@section('usertable')


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
                      رقم المستخدم
                    </th>
                    <th colspan="1">
                      اسم المستخدم
                    </th>
                    <th colspan="1">
                      التخصص 
                    </th>
                    <th colspan="1">
                      المسمى الوظيفي 
                     </th>
                 
                    <th colspan="4">الإجراءت</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($seeker as $seekers)
                  <tr>
                    <td>{{ $seekers->user_id }}</td>
                    <td>{{ $seekers->userName }}</td>
                    <td>{{ $seekers->PositionTitle }}</td>
                    <td>{{ $seekers->Specialization	 }}</td>
              
                    <td>
                      <button class="btn"><a href="{{ route('platform.seeker.edit',$seekers->id) }}"><i class="bi bi-eye"></i></a></button>
                      {{-- <button class="btn"><a href="{{ route('platform.seeker.show',$seekers->id) }}"><i class="bi bi-person-fill-check"></i></a></button> --}}
                      {{-- <button class="btn bt3"><a ><i class="bi bi-person-fill-slash"></i></a></button> --}}
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