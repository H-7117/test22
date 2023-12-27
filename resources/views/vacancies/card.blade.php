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
      <h1>الوظائف الشاغره</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mt-2">

                <div style="line-height: 0px">
                    <h5 class="card-title fs-3 ">الوظائف</h5>
                    <p>إدارة جميع فرص العمل الخاصة بك في مكان واحد</p>
                </div>
                
                <button class="create float-right"><a style="color: white" href="{{ route('tenant.add') }}">أضافه</a></button>
              </div>
              <div class="d-flex  ">


                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" id="searchJob" class="form-control" placeholder="البحث عن وظائف بواسطة العنوان أو الرقم التعريفي">
                </div>
                <div class="btn-group border" >
                    <button type="button " style=" padding: 0px 15px ; border-radius: 8px; border: 1px black; display: flex; justify-content: center; align-items: center " class="btn " data-bs-toggle="dropdown" aria-expanded="false">
                       
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #757779"><span style="margin-right: 10px">فلتر</span></i>
                    </button>
                </div>

              </div>
              
              <p></p>

              
              
              <div class="card col-lg-12 border">
                  <div class="container p-3 d-flex  justify-content-between">
                    <div class="d-flex">
                      <h5 class="mt-1 fw-bold text-primary">مطور واجهات</h5>
                      <span class="btn-open">مفتوح</span>
                    </div>
                    <div class="d-flex " style="gap: 5px;">
                      {{-- ============================== --}}
                    
                    
                      <div class="btn-group border">
                        <button type="button " style="padding: 0px 20px; border-radius: 8px; height: 30px; border: 1px black; display: flex; justify-content: center; align-items: center " class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          مفتوح
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">مفتوح</a></li>
                          <li><a class="dropdown-item" href="#">مغلق</a></li>
                      </div>
                       
                      <div class="btn-group border" >
                        <button type="button " style=" padding: 0px 15px ; border-radius: 8px; border: 1px black; display: flex; justify-content: center; align-items: center " class="btn " data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical" style="color: #757779"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">مفتوح</a></li>
                          <li><a class="dropdown-item" href="#">مغلق</a></li>
                      </div>

                      <div class="btn-group border" >
                        <button type="button " style=" padding: 0px 15px ; border-radius: 8px; border: 1px black; display: flex; justify-content: center; align-items: center " class="btn " >
                          <i class="bi bi-share" style="color: #757779"></i>
                        </button>
                        
                      </div>
                       
                      {{-- ============================== --}}


                    </div>
                    
                  </div>
                 {{-- ============================================== --}}
                 <div class="d-flex container m-0 px-3 gap-3">
                  <p><i class="bi bi-geo-alt" style="margin-left: 2px;"></i>القسم </p>
                  <p> <i class="bi bi-building" style="margin-left: 2px;"></i>القسم </p>
                </div>
              {{-- ===================================================== --}}
                <div class="d-flex mt-3 ">
                      <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>تقديم</p></div><div style="position: relative; top:10px; width: 1px; height: 10px;background-color: #ccc"></div>
                      <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>مرحله</p></div><div style="position: relative; top:10px; width: 1px; height: 10px;background-color: #ccc"></div>
                      <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>مرفوض</p></div><div style="position: relative; top:10px; width: 1px; height: 10px;background-color: #ccc"></div>
                      <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>توظيف</p></div>
                </div>

                {{-- ================================================== --}}
                <div class="d-flex mt-3 container">
                  <p>تم إنشاء قبل ١ يوم، إجمالي المرشحين ٥</p>
                  
            </div>
  </div>

  {{-- other card --}}

  <div class="card col-lg-12 border">
    <div class="container p-3 d-flex  justify-content-between">
      <div class="d-flex">
        <h5 class="mt-1 fw-bold text-primary">مطور واجهات</h5>
        <span class="btn-open">مفتوح</span>
      </div>
      <div class="d-flex " style="gap: 5px;">
        {{-- ============================== --}}
      
      
        <div class="btn-group border">
          <button type="button " style="padding: 0px 20px; border-radius: 8px; height: 30px; border: 1px black; display: flex; justify-content: center; align-items: center " class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            مفتوح
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">مفتوح</a></li>
            <li><a class="dropdown-item" href="#">مغلق</a></li>
        </div>
         
        <div class="btn-group border" >
          <button type="button " style=" padding: 0px 15px ; border-radius: 8px; border: 1px black; display: flex; justify-content: center; align-items: center " class="btn " data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-ellipsis-vertical" style="color: #757779"></i>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">مفتوح</a></li>
            <li><a class="dropdown-item" href="#">مغلق</a></li>
        </div>

        <div class="btn-group border" >
          <button type="button " style=" padding: 0px 15px ; border-radius: 8px; border: 1px black; display: flex; justify-content: center; align-items: center " class="btn " >
            <i class="bi bi-share" style="color: #757779"></i>
          </button>
          
        </div>
         
        {{-- ============================== --}}


      </div>
      
    </div>
   {{-- ============================================== --}}
   <div class="d-flex container m-0 px-3 gap-3">
    <p><i class="bi bi-geo-alt" style="margin-left: 2px;"></i>القسم </p>
    <p> <i class="bi bi-building" style="margin-left: 2px;"></i>القسم </p>
  </div>
{{-- ===================================================== --}}
  <div class="d-flex mt-3 ">
        <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>تقديم</p></div><div style="position: relative; top:10px; width: 1px; height: 10px;background-color: #ccc"></div>
        <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>مرحله</p></div><div style="position: relative; top:10px; width: 1px; height: 10px;background-color: #ccc"></div>
        <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>مرفوض</p></div><div style="position: relative; top:10px; width: 1px; height: 10px;background-color: #ccc"></div>
        <div style="line-height: 7px;width:100px; text-align: center"><p>1</p><p>توظيف</p></div>
  </div>

  {{-- ================================================== --}}
  <div class="d-flex mt-3 container">
    <p>تم إنشاء قبل ١ يوم، إجمالي المرشحين ٥</p>
    
</div>
</div>
              
            </div>
          </div>

        </div>
      </div>
    </section>

  @endsection