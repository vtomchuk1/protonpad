<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>

<div class="row justify-content-center">
    <div class="col-xl-4 col-lg-6 col-md-8">
        <div class="card">
            <div class="card-body p-4">
                <div class="">
                    <div class="text-center">
                        <a href="index.html" class="">
                            <img src="/assets/images/logo-dark.png" alt="" height="24" class="auth-logo logo-dark mx-auto">
                            <img src="/assets/images/logo-light.png" alt="" height="24" class="auth-logo logo-light mx-auto">
                        </a>
                    </div>
                    <!-- end row -->
                    <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                    <p class="mb-5 text-center">Sign in to continue to Upzet.</p>
                    <!-- <form class="form-horizontal" action="index.html"> -->
                    <?php

                    $form = ActiveForm::begin([
                        'id' => 'login-form',
                    ]);
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <!--
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                                -->
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="mb-4">
                                <!--
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                -->
                                <?= $form->field($model, 'password')->passwordInput() ?>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <!--
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-label" class="form-check-label" for="customControlInline">Remember me</label>
                                        -->
                                        <?= $form->field($model, 'rememberMe')->checkbox(); ?>
                                    </div>
                                </div>
                                <!--
                                <div class="col-7">
                                    <div class="text-md-end mt-3 mt-md-0">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                </div>
                                -->
                            </div>
                            <div class="d-grid mt-4">
                                <!--
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                -->
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary waves-effect waves-light', 'name' => 'login-button']) ?>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                    <!--
                    </form>
                    -->
                </div>
            </div>
        </div>
        <div class="mt-5 text-center">
            <!--
            <p class="text-white-50">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Register </a> </p>
            -->
            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Upzet. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
        </div>
    </div>
</div>
<!-- end row -->