@extends('layouts.front')

<body id="jobBody">


    <div class="container jobContiner col-12 col-sm-12" style="height: fit-content">
        <div class="top-job p-3">
            <h5 class="text-end" style="font-size: 14px; font-weight: 700">
                الرئيسية
            </h5>
            <h4 style="float: right; margin-top: 10px; font-weight: 700">
                الوظائف
            </h4>
            <div>
                <!-- Example single danger button -->
                <!-- ============================================================================ -->
                <div class="btn-group">
                    <button type="button" id="events" dir="rtl" class="applay dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        الاحدث
                    </button>

                    
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">SAS</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                    {{-- ===================================================================================== --}}
                    <button class="btn burger" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" id="togglebtn"
                    aria-controls="offcanvasWithBothOptions">
                    <i class="fa-solid fa-sliders"></i>
                </button>
                    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1"
                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <div id="inseid-toggler" class="m-3" dir="rtl">
                            <div>
                                <label for="" style="font-weight: 900; margin-bottom: 10px">بحث</label>
                                <input class="form-control" type="text" id="filter-search" />
                            </div>
                            <div class="mt-3">
                                <h3>التصنيف</h3>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">برمجة وتطوير</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">تسويق ومبيعات</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">كتابة وترجمة</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">تصميم</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">إدارة وأعمال</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">دعم فني</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">المجالات الأخرى</label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

            <!-- ==================================================================================== -->

            <div class="row" id="mdd" style="width: 102%; display: flex; flex-direction: row-reverse">
                <!-- ===================== -->
                <div class="mt-5 col-12 col-lg-3 col-md-3 col-sm-12 left-filter">
                    <div>
                        <label for="" style="font-weight: 900; margin-bottom: 10px">بحث</label>
                        <input class="form-control" type="text" id="filter-search" />
                    </div>

                    <div class="mt-3">
                        <h3>التصنيف</h3>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">برمجة وتطوير</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">تسويق ومبيعات</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">كتابة وترجمة</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">تصميم</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">إدارة وأعمال</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">دعم فني</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">المجالات الأخرى</label>
                        </div>
                    </div>
                </div>

                <!-- =========================================================================================== -->
                <div class="mt-5 col-lg-9 col-9 col-md-9 col-sm-12">
                    <div class="card row d-flex flex-lg-row flex-md-row flex-column-reverse flex-sm-row"
                        style="margin-bottom: 20px">
                        <div class="" style="direction: rtl">
                            <img style="
                    width: 70px;
                    height: 70px;
                    margin-right: 10px;
                    object-fit: fill;
                  "
                                src="{{ asset('assets/img/logo22.png') }}" alt="" />
                        </div>
                        <div class="" style="direction: rtl">
                            <div
                                style="
                    line-height: 2rem;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                  ">
                                <div>
                                    <h5>مطور ومبرمج Laravel | Backend Developer</h5>
                                    <ul style="list-style: none; display: flex; gap: 5px">
                                        <li>
                                            <i class="fa-regular fa-building"></i> وثاق التقنية
                                        </li>
                                        <li><i class="fa-solid fa-code"></i> وثاق التقنية</li>
                                        <li><i class="fa-regular fa-clock"></i> وثاق التقنية</li>
                                    </ul>
                                </div>
                                <div>
                                    <button class="applay">تقدم للوظيفه</button>
                                </div>
                            </div>
                            <div class="pt-3">
                                <p>
                                    لدينا نظام مبني على PHP Laravel ونعمل باطار Agile Framework
                                    بحيث ان لدينا سبرنت اسبوعي والمطلوب عدد ٥ مطورين للعمل
                                    لتطوير النظام وهو موقع سياحي مشابه لموقع AirBNB ويفضل من
                                    لديهم خبرة في بناء انظمة مشابهه ويوجد لدينا ربط مع بوابات
                                    دفع مختلفة وايضا انظمة مختلفة المؤهلات والخبرات المطلوبة
                                    خبرة في
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- =========================================== -->

                    <div class="card row d-flex flex-lg-row flex-md-row flex-column-reverse flex-sm-row"
                        style="margin-bottom: 20px">
                        <div class="" style="direction: rtl">
                            <img style="
                    width: 70px;
                    height: 70px;
                    margin-right: 10px;
                    object-fit: fill;
                  "
                                src="{{ asset('assets/img/logo22.png') }}" alt="" />
                        </div>
                        <div class="" style="direction: rtl">
                            <div
                                style="
                    line-height: 2rem;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                  ">
                                <div>
                                    <h5>مطور ومبرمج Laravel | Backend Developer</h5>
                                    <ul style="list-style: none; display: flex; gap: 5px">
                                        <li>
                                            <i class="fa-regular fa-building"></i> وثاق التقنية
                                        </li>
                                        <li><i class="fa-solid fa-code"></i> وثاق التقنية</li>
                                        <li><i class="fa-regular fa-clock"></i> وثاق التقنية</li>
                                    </ul>
                                </div>
                                <div>
                                    <button class="applay">تقدم للوظيفه</button>
                                </div>
                            </div>
                            <div class="pt-3">
                                <p>
                                    لدينا نظام مبني على PHP Laravel ونعمل باطار Agile Framework
                                    بحيث ان لدينا سبرنت اسبوعي والمطلوب عدد ٥ مطورين للعمل
                                    لتطوير النظام وهو موقع سياحي مشابه لموقع AirBNB ويفضل من
                                    لديهم خبرة في بناء انظمة مشابهه ويوجد لدينا ربط مع بوابات
                                    دفع مختلفة وايضا انظمة مختلفة المؤهلات والخبرات المطلوبة
                                    خبرة في
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ======================================== -->
                    <div class="card row d-flex flex-lg-row flex-md-row flex-column-reverse flex-sm-row"
                        style="margin-bottom: 20px">
                        <div class="" style="direction: rtl">
                            <img style="
                    margin: 10px 0;
                    width: 70px;
                    height: 70px;
                    margin-right: 10px;
                    object-fit: fill;
                  "
                                src="{{ asset('assets/img/logo22.png') }}" alt="" />
                        </div>
                        <div class="" style="direction: rtl">
                            <div
                                style="
                    line-height: 2rem;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                  ">
                                <div>
                                    <h5>مطور ومبرمج Laravel | Backend Developer</h5>
                                    <ul style="list-style: none; display: flex; gap: 5px">
                                        <li>
                                            <i class="fa-regular fa-building"></i> وثاق التقنية
                                        </li>
                                        <li><i class="fa-solid fa-code"></i> وثاق التقنية</li>
                                        <li><i class="fa-regular fa-clock"></i> وثاق التقنية</li>
                                    </ul>
                                </div>
                                <div>
                                    <button class="applay">تقدم للوظيفه</button>
                                </div>
                            </div>
                            <div class="pt-3">
                                <p>
                                    لدينا نظام مبني على PHP Laravel ونعمل باطار Agile Framework
                                    بحيث ان لدينا سبرنت اسبوعي والمطلوب عدد ٥ مطورين للعمل
                                    لتطوير النظام وهو موقع سياحي مشابه لموقع AirBNB ويفضل من
                                    لديهم خبرة في بناء انظمة مشابهه ويوجد لدينا ربط مع بوابات
                                    دفع مختلفة وايضا انظمة مختلفة المؤهلات والخبرات المطلوبة
                                    خبرة في
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
