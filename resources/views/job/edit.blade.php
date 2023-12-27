@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>تعديل وظائف</h1>

</div><!-- End Page Title -->
<div class="col-xl-12">
    <div class="card p-4">
      <form action="forms/contact.php" method="post" class="php-email-form">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="اسم الوظيفه" required>
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="اسم الشركه" required>
          </div>

          <div class="col-md-12">
            <label for="" class="mb-2">موقع الوظيفه</label>
            <select  class="form-control" >
              <option value="عدن">عدن</option>
              <option value="المكلا">المكلا</option>
              <option value="صنعاء">صنعاء</option>
              <option value="مارب">مارب</option>
              <option value="المهره">المهره</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="" class="mb-2">نوع الوظيفه</label>
            <select  class="form-control" >
              <option value="IT Support">IT Support</option>
              <option value="Front end">1</option>
              <option value="1">1</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="" class="mb-2">وحدة العمل</label>
            <select  class="form-control" >
              <option value="قسم المبيعات">قسم المبيعات</option>
              <option value="قسم التسويق">قسم التسويق</option>
              <option value="وحدة الموارد البشرية">وحدة الموارد البشرية</option>
              <option value="فريق البحث والتطوير">فريق البحث والتطوير</option>
              <option value="قسم المالية">قسم المالية</option>
              <option value="وحدة خدمة العملاء">وحدة خدمة العملاء</option>
            </select>
          </div>
         
          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="وصف الوظيفه" required></textarea>
          </div>

          <div class="col-md-12 text-center">
         
            <div class="d-flex justify-content-end">
            
                <button class="create ">حفظ</button>
            </div>

          </div>

        </div>
      </form>
    </div>

  </div>
  @endsection