<!DOCTYPE HTML>
<html>
    <head>
        <title>Tugas Mahmud Alburozi</title>
        <link rel="stylesheet" href="style.css">
    </head>
<style>
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-color:#8BACAA;
    background-size: cover;
    background-position: center;
    
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background-color: #617A55  ;
   
}
.container h1{
    text-align: left;
    color: #8BACAA;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #FDFEFE;
}
.container label{
    text-align: center;
    color:#A4D0A4;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #FDFEFE;
    font-size: 15px;
    color: #FDFEFE; 
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#A4D0A4;
    font-size: 18px;
    color: #8BACAA ;
}
</style>
    <body>
        <div class="container">
        <h3 align="center">Data Pribadi</h3>
        <hr width="300px">
            <form>
                <label>Nama</label><br>
            </form>
                <table>
                <tr>
                <td colspan="2"><input type="submit" value="Mahmud Alburozi"></td>
                </tr>
                </table>
            <form>
                <label>Tanggal Lahir</label><br>
            </form>
                <table>
                <tr>
                <td colspan="2"><input type="submit" value="11 Oktober 2002"></td>
                </tr>
                </table>
                <form>
                <label>Nim</label><br>
            </form>
                <table>
                <tr>
                <td colspan="2"><input type="submit" value="2155201043"></td>
                </tr>
                </table>
                <form>
                <label>Jurusan</label><br>
            </form>
                <table>
                <tr>
                <td colspan="2"><input type="submit" value="Informatika"></td>
                </tr>
                </table>                
            </form>
        </div>     
    </body>
</html>