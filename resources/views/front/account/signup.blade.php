<body>
    <div class="form-wrapper row" style="display: flex; align-items: center;justify-content: center;">
        
        <div class="info-side col-6 col-md-6 col-sm-12 ">
            
            <img src="assets/Sign up-amico.svg" alt="Mock" class="mockup" />
         
        </div>


        <div class="form-side col-6 col-md-6 col-sm-12">
            <a href="./index.html" title="Logo">
                <img class="logo" src="assets/logo22.png" alt="Logo">
            </a>
            <form class="my-form">
               
     
                <div class="text-field">
                    <label for="email">: عنوان البريد الإلكتروني
                    </label>
                    <input type="email" id="email" name="email" autocomplete="off" placeholder="عنوان البريد الإلكتروني"
                    required>
                </div>
                <div class="text-field">
                    <label for="password">: كلمة المرور
                        
                  
                    </label>
                    <input id="password" type="password" name="password" placeholder="كلمة المرور" title="Minimum 6 characters at 
                                                        least 1 Alphabet and 1 Number"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                </div>
                <div class="text-field">
                    <label for="confirm-password">اعد كلمة السر
                        
                    </label>
                    <input id="confirm-password" type="password" name="password" placeholder="اعد كلمة السر"
                            title="Minimum 6 characters at east 1 Alphabet and 1 Number"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                </div>
                <button class="my-form__button" type="submit">
                    تسجيل الدخول
                </button>
               
            </form>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
    <script src="./bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
</body>