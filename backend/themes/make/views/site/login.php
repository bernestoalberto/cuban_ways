<div class="account-form">
    <form class="form-signin" role="form" action="<?php echo Yii::$app->homeUrl?>/site/login" method="post">
        <h3><strong>Sign in</strong> to your account</h3>
        <div class="append-icon">
            <input type="text" name="LoginForm[username]" id="name" class="form-control form-white username" placeholder="Username" required>
            <i class="icon-user"></i>
        </div>
        <div class="append-icon m-b-20">
            <input type="password" name="LoginForm[password]" class="form-control form-white password" placeholder="Password" required>
            <i class="icon-lock"></i>
        </div>
        <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <button type="submit" class="btn btn-lg btn-dark btn-rounded ladda-button" data-style="expand-left">Sign In</button>
        <span class="forgot-password"><a id="password" href="account-forgot-password.html">Forgot password?</a></span>
        <div class="form-footer">
            <div class="social-btn">
                <button type="button" class="btn-fb btn btn-lg btn-block btn-square"><i class="fa fa-facebook pull-left"></i>Connect with Facebook</button>
                <button type="button" class="btn btn-lg btn-block btn-blue btn-square"><i class="fa fa-twitter pull-left"></i>Login with Twitter</button>
            </div>
            <div class="clearfix">
                <p class="new-here"><a href="user-signup-v2.html">New here? Sign up</a></p>
            </div>
        </div>
    </form>
    <form class="form-password" role="form">
        <h3><strong>Reset</strong> your password</h3>
        <div class="append-icon m-b-20">
            <input type="email" name="email" class="form-control form-white password" placeholder="Enter your email address" required>
            <i class="icon-envelope"></i>
        </div>
        <button type="submit" id="submit-password" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Send Password Reset Link</button>
        <div class="clearfix m-t-60">
            <p class="pull-left m-t-20 m-b-0"><a id="login" href="#">Have an account? Sign In</a></p>
            <p class="pull-right m-t-20 m-b-0"><a href="user-signup2.html">New here? Sign up</a></p>
        </div>
    </form>
</div>

