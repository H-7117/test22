@extends('layouts.mainlayout')
@section('delete')
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">تأكيد الحذف</h2>
            <p class="card-text">هل أنت متأكد أنك تريد حذف هذه الباحث</p>
  
            <!-- Delete Button -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
              حذف
            </button>
  
           
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection