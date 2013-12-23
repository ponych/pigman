<?php require TMPL_PATH.'/layout/header.php';?>
    <div class="auth-form" id="register">

        <form accept-charset="UTF-8" action="/user/reg" method="post" id="register-form">
            <div style="margin:0;padding:0;display:inline">
                <input name="authenticity_token" type="hidden" value="W23b9Z119ldXrmmae4GzkznOEpPqwxPJTeCQgjlOogg=" />
            </div>
            <div class="auth-form-header">
                <h1>注册</h1>
            </div>
            <div class="auth-form-body">
                <label for="nickname">昵称</label>
                <input class="input-block" id="use_nickname" name="user[nickname]" tabindex="1" type="text" />
                <label for="login_field">
                    email <a href="/user/login">(已经有账号?)</a>
                </label>
                <input autocapitalize="off" class="input-block" id="user_email" name="user[email]" tabindex="2" type="text" />

                <label for="user_password">
                    密码
                </label>
                <input class="input-block" id="user_password" name="user[password]" tabindex="3" type="password" />

                <label for="user_password2">
                    确认密码
                </label>
                <input class="input-block" id="user_password2" name="user[password2]" tabindex="4" type="password" />

                <input class="button" name="commit" tabindex="5" type="submit" value="注册" />
            </div>
        </form>
    </div><!-- ./register -->

<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function(){
    $('#register-form').validate({
        rules: {
           'user[nickname]' : {
               required: true
           } ,
           'user[email]' : {
               required : true,
               email    : true ,
               remote: {
                   url: '/user/exists'

               }
           } ,
           'user[password]' : {
               required: true,
               minlength: 4 ,
               maxlength: 30
           } ,
           'user[password2]' : {
               required : true,
               equalTo  : '#user_password'
           }
        },
        errorPlacement:function(label ,$el) {
            label.insertBefore($el);
            //errorPlacement(label, $(element)
        },
        submitHandler:function(form){
            $.post(form.action, $(form).serialize() ,function(resp){
                console.log(resp);
            });

            return false; // prevent default submit action
        }

    });
});
//]]>
</script>

<?php require TMPL_PATH.'/layout/footer.php';?>