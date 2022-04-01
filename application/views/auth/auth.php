<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/auth/'); ?>style.css" />
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
    <title>Sign in & Sign up </title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" onsubmit="return false">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" placeholder="Password" />
                    </div>
                    <button type="submit" class="btn" id="login"> SIGN IN </button>
                    <p class="social-text">Or Sign up with social git </p>
                    <div class="social-media">
                        <a href="<?= base_url('admin/dashboard') ?>" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <form action="#" class="sign-up-form" onsubmit="return false">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn" value="Sign up"/>
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum memiliki Akun ?</h3>
                    <p>
                        Silahkan lakukan pendaftaran terlebih dahulu!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="<?= base_url('assets/auth/'); ?>img/log1.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="<?= base_url('assets/auth/'); ?>img/register1.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/auth/'); ?>app.js"></script>
</body>

</html>

<script>
    $(document).ready(function (){
        $('#login').click(function(){
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
                url: '<?php echo base_url('Auth/login'); ?>',
                method: 'post',
                data : "username="+username+"&password="+password,
                success:function(data){
                    // alert(data);
                    if(username == data){
                        alert("Login Berhasil");
                        window.location.href = "<?php echo base_url('Auth/dashboard'); ?>";
                    }else{
                        alert("Login Gagal");
                    }
                    // alert(data);
                    // $('#myModal').modal("show");
                    // $('#tampil_modal').html(data);
                    // document.getElementById("judul").innerHTML='Edit Data';  
                }   
            })
            // alert("tes");
        })
    })
</script>