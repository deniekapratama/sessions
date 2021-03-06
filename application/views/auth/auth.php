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
        <div>
            <img src="<?= base_url('assets/auth/'); ?>img/pos.svg" align="right" width="120" height="120" style="margin:2px 20px" alt="BUMN" />
            <img src="<?= base_url('assets/auth/'); ?>img/bumn.png" align="right" width="220" height="80px" style="margin:20px 10px" alt="BUMN" />
        </div>
    </div>
    <div class="forms-container">

        <div class="signin-signup">
            <form action="#" class="sign-in-form" onsubmit="return false">
                <h1 class="title">Sign in</h1>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" placeholder="Nippos" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" />
                </div>
                <button type="submit" class="btn" id="login"> SIGN IN </button>
            </form>
        </div>
    </div>

    <div class="panels-container">

        <div class="panel left-panel">

            <div class="content">

                <h1>Selamat Datang!</h1>
                <p>
                    Aplikasi berbasis web untuk <b>pengajuan</b>, <b>pengembalian</b> dan <b>monitoring</b> data perangkat IT yang ada di lingkungan kantor pusat PT. Pos Indonesia (Persero)
                </p>
            </div>
            <img src="<?= base_url('assets/auth/'); ?>img/registerpos.svg" class="image" alt="" />
        </div>
        <!-- <div class="panel right-panel">
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
                <img src="<?= base_url('assets/auth/'); ?>img/registerpos.svg" class="image" alt="" />
            </div> -->
    </div>
    </div>

    <script src="<?= base_url('assets/auth/'); ?>app.js"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#login').click(function() {
            var username = $('#username').val();
            var password = $('#password').val();
            // alert("tes");
            $.ajax({
                url: '<?php echo base_url('Auth/login'); ?>',
                method: 'post',
                data: "username=" + username + "&password=" + password,
                success: function(datap) {
                    var dt = jQuery.parseJSON(datap);
                    // alert(dt.data[0].posisi);
                    var posisi = dt.data[0].posisi;
                    if (dt.success == true) {
                        // if(dt.succ)
                        if(posisi == "99"){
                            window.location.href = "<?php echo base_url('staff-gs/Dashboard'); ?>";
                        }else if(posisi == "98"){
                            window.location.href = "<?php echo base_url('manager-gs/Dashboard'); ?>";
                        }else{
                            window.location.href = "<?php echo base_url('karyawan/Dashboard'); ?>";
                        }
                    } else {
                        alert("Login Gagal");
                    }
                    // alert(data);
                    $('#myModal').modal("show");
                    $('#tampil_modal').html(data);
                    document.getElementById("judul").innerHTML='Edit Data';  
                }
            })
            // alert("tes");
        })
    })
</script>