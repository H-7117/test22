@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>ملفي الشخصي</h1>

</div>
<div class="col-xl-12">
    <div class="card p-4">
{{--  --}}

<form action="{{ route('platform.seeker.store') }}" method="POST">
    @csrf
  <div class="row gy-4">
      <div class="col-md-6">
          <input type="text" name="user_id" class="form-control" placeholder="رقم المستخدم">
      </div>
      <div class="col-md-6">
          <input type="text"  name="userName" class="form-control" placeholder="اسم المستخدم">
      </div>
   
     
      <div class="col-md-6">
        <select class="form-control" name="PositionTitle" id="">
            <option value="البرمجه-وتطوير-المواقع">البرمجه وتطوير المواقع</option>
            <option value="البرمجه-وتطوير-التطبيقات">البرمجه وتطوير التطبيقات</option>
            <option value="خدمات-واعمال-استشاريه-وإداريه">خدمات واعمال استشاريه وإداريه</option>
            <option value="تصميم-وأعمال-فنيه-وابداعيه">تصميم وأعمال فنيه وابداعيه</option>
            <option value="تسويق-الكتروني-ومبيعات">تسويق الكتروني و مبيعات</option>
            <option value="كتابه-تحرير-وترجمه-ولغات">كتابه , تحرير, وترجمه ولغات</option>
            <option value="تعليم-ومساعده-عن-بعد">تعليم ,ومساعده عن بعد</option>
        </select>
    </div>
        
    <div class="col-md-6">
        <input type="text"  name="Specialization" class="form-control" placeholder="التخصص">
    </div>
      <div class="col-md-12 text-start">
          <input type="submit" class="create" />
      </div> 
  </div>
</form>
    </div>

  </div>
  @endsection