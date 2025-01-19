<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        width: 100%;
        height: 95vh;
        background-color: #47436f;
        color: white;
    }

    nav {
        display: flex;
        flex-direction: row;
        gap: 20px;
        align-items: center;
        background-color: #140024;
        padding: 10px 25px 20px;
        text-align: left;
        top: 0;
        overflow: auto;
    }

    input {
        margin-bottom: 15px;
    }

    button {
        background-color: rgb(255, 167, 0);
        border: none;
        cursor: pointer;
        width: 100%;
        padding: 10px 15px;
        border-radius: 8px;
        color: black;
        font-weight: 700;
        text-wrap: nowrap;
    }

    .login-form {
        color: black;
        font-weight: 700;
        text-align: left;
    }
    
    .img {
        width: 140px;
        height: 140px;
    }

    .title {
        font-size: 50px;
        font-weight: 600;
    }

    .form {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .input {
        width: 100%;
        padding: 10px 15px;
        border-radius: 10px;
    }

    .wrapper {
        position: relative;
        max-width: 350px;
        width: 100%;
        border-radius: 5px;
        padding: 50px 30px 70px;
        background-color: white;
        box-shadow: 0 5px 10px rgb(19, 18, 18);
    }

    .login {
        background-color: rgb(255, 191, 0);
        width: 100%;
        padding: 10px 15px;
        border: none;
        border-radius: 10px;
        margin-bottom: 10px;
        font-size: 20px;
        font-weight: 600;
        font-family: calibri;
        text-align: left;
        color: black;
    }

    .tag {
        width: 100%;
        transform: translateX(25%);
        color: white;
        font-weight: 600;
    }
    h1 {
        font-size: 35px;
    }
</style>
<header>
    <nav>
        <img class="img" src="https://play-lh.googleusercontent.com/YwSG-xuMCYLCJ7FuNotGBTLk9sILFHitz4g4slQFCN9bRzUvOqqmzQwsaVCrtyMHgO_D=w240-h480-rw" alt="">
        <div>
            <span class="title">UNIVERSITAS AMIKOM YOGYAKARTA</span>
            <br>JL.Padjajaran,Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                Yogyakarta
                55281
            <br>Telp.+62 274884201, Website: www.amikom.ac.id, Email: amikom@amikom.ac.id
        </div>
    </nav>

</header>

<body>
    <div class="form">
        <div class="login-form">
            <div class="container-fluid p-5 text-white text-center">
                <h1>REGISTER</h1>
                <div id="section1">
                    <div class="form">
                        <div class="wrapper">
                            <div class="login-form">
                                <div>
                                    <span>Nama</span>
                                    <input type="text" class="input" id="Nama" placeholder="Alvinda Natasya"
                                        name="Nama">
                                </div>
                                <span>Username</span>
                                <input type="text" class="input" id="Username" placeholder="Alvinda_Natasya12"
                                    name="Username">
                                <span class="mt-9">Password:</span>
                                <input type="text" class="input" id="password" placeholder="23.01.5008"
                                    name="pswd">
                                    <span class="mt-9">Ulangi Password:</span>
                                <input type="text" class="input" id="ulangi password" placeholder="23.01.5008"
                                    name="pswd">
                            </div>

                            <div class="form-check mb-3">
                            </div>

                            <button class="btn-submit" type="submit">REGISTASI</button>
                            <a href="login.html">Login</a>
                            </form>
                        </div>
                        <div class="tag">Version 4.5.8</div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>