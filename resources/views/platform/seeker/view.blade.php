@extends('layouts.mainlayout')
@section('view')
    <div class="pagetitle">
      <h1>المتقدم</h1>
     
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <form action="{{ route('platform.seeker.update',$seeker->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="row gy-4">
                  <div class="col-md-6">
                      <input type="text" name="user_id" class="form-control" value="{{ $seeker->user_id }}" >
                  </div>
                  <div class="col-md-6">
                      <input type="text"  name="userName" class="form-control" value="{{ $seeker->userName }}" >
                  </div>
               
                 
                  <div class="col-md-6">
                    <select class="form-control" name="PositionTitle" id="">
                        <option {{ $seeker->PositionTitle == 'البرمجه-وتطوير-المواقع' ?  'selected':'' }} value="البرمجه-وتطوير-المواقع">البرمجه وتطوير المواقع</option>
                        <option {{ $seeker->PositionTitle == 'البرمجه-وتطوير-التطبيقات' ?  'selected':'' }} value="البرمجه-وتطوير-التطبيقات">البرمجه وتطوير التطبيقات</option>
                        <option {{ $seeker->PositionTitle == 'خدمات-واعمال-استشاريه-وإداريه' ?  'selected':'' }} value="خدمات-واعمال-استشاريه-وإداريه">خدمات واعمال استشاريه وإداريه</option>
                        <option {{ $seeker->PositionTitle == 'تصميم-وأعمال-فنيه-وابداعيه' ?  'selected':'' }} value="تصميم-وأعمال-فنيه-وابداعيه">تصميم وأعمال فنيه وابداعيه</option>
                        <option {{ $seeker->PositionTitle == 'تسويق-الكتروني-ومبيعات' ?  'selected':'' }} value="تسويق-الكتروني-ومبيعات">تسويق الكتروني و مبيعات</option>
                        <option {{ $seeker->PositionTitle == 'كتابه-تحرير-وترجمه-ولغات' ?  'selected':'' }} value="كتابه-تحرير-وترجمه-ولغات">كتابه , تحرير, وترجمه ولغات</option>
                        <option {{ $seeker->PositionTitle == 'تعليم-ومساعده-عن-بعد' ?  'selected':'' }} value="تعليم-ومساعده-عن-بعد">تعليم ,ومساعده عن بعد</option>
                    </select>
                </div>
                    
                <div class="col-md-6">
                    <input type="text"  name="Specialization" class="form-control" value="{{ $seeker->Specialization }}" placeholder="التخصص">
                </div>
                  <div class="col-md-12 text-start">
                      <button type="submit" class="create"> تعديل</button>
                  </div> 
              </div>
            </form>
 
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection