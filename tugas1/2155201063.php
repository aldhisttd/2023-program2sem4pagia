<<<<<<< HEAD
<html>
    <head>
        <title>MAHASISWA STTD</title>
    </head>
    </style>
    <body>
        <h3><font color="E96479">DATA MAHASISWA STTD</font></h3>
        <table>
            <tr>
                <td><font color="E96479">Nama</font></td>
                <td>:</td>
                <td><input type="text"></td>
                
            </tr>
            <tr>
                <td><font color="E96479">NIM</font></td>
                <td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><font color="E96479">Tanggal Lahir</font></td>
                <td>:</td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </body>
</html>
=======
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Membuat Tugas File Data</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="wrapper">
        <div class="tittle">
            Data Pribadi
        </div>
        <form action="#">
            <div class="field">
                <input type="text" required>
                <label> Masukan Nama Pribadi</label>
            </div>
            <div class="field">
                <input type="tanggal" required>
                <label>Masukan Tanggal Lahir</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="data-saya">
                    <label for="data-saya">Data Saya</label>
                </div>
                <div class="pass-link">
                    <a href="#">Jika Saya Lupa</a>
                </div>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">
                Masuk Halaman Pribadi Saya<a href="#"> Klik Saja</a>
            </div>
        </form>
    </div>

<style>
    *{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: sans-serif; 
    }
    html, body {
        display: grid;
        height: 100%;
        width: 100%;
        place-items:center;
        background: #bdc3c7;
    }
    ::selection{
        background: #ecf0f2;
        color: #fff;
    }
    .wrapper {
        width: 380px;
        background:#fff;
        border-radius: 15px;
        box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
    }
    .wrapper .title {
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        line-height: 100px;
        color: #fff;
        user-select: none;
        border-radius: 15px 15px 0 0;
        background: linear-gradient(-135deg, );
    }
    .wrapper form{
        padding: 10px 30px 50px 30px;
    }
    .wrapper form .field {
        padding: 10px 30px 50px 30px;
    }
    .wrapper form .field input {
        height: 100%;
        width: 100%;
        outline: none;
        font-size: 17px;
        padding-left:20px;
        border: 1px solid lightgrey;
        border-radius: 25px;
        transition: all 0.3s ease;
    }
    .wrapper form .field input:focus, form .field input:valid {
        border-color: #4158d0;
    }
    .wrapper form .field label {
        position: absolute ;
        top: 50%;
        left: 20px;
        color: #999999;
        font-weight: 400;
        font-size: 17px;
        pointer-events: none;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }
    form .field input:focus ~ label,
    form .field input:valid ~ label{
        top: 0%;
        font-size: 16px;
        color: #4158d0;
        background: #fff;
        transform: translateY(-50%);
    }
    .form content {
        display: flex;
        width: 100%;
        height: 50px;
        font-size: 16px;
        align-items: center;
        justify-content: space-around;
    }
    form .content .checkbox {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    form .content input {
        width: 15px;
        height: 15px;
        background: blue;
    }
    form .content label {
        color #2626ef6;
        user-select: none;
        padding-left: 5px;
    }
    form .content .pass-link {
        color:"";
    }
    form .field input [type="submit"]{
        color: #fff;
        border: none;
        padding-left: 0;
        margin-top: -10px;
        font-size: 2opx;
        font-weight:500;
        cursor: pointer;
        background: linear-gradient(-135deg, );
        transition: all 0.3s ease;
    }
    form .field input [type="submit"]:active{
        transform: scale(0.95);
    }
    form .signup-link{
        color: #262626;
        margin-top: 20px;
        text-align: center;
    }
    form .pass-link a,
    form .signup-link a{
        color: #262626;
        text-decoration: none;
    }
    form .pass-link a:hover,
    form .signup-link a:hover{
        text-decoration: underline;
    }
</html>
>>>>>>> 7f08bba160ec826d2c34f513662e15ecc115a576
