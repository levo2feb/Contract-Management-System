<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Login Page</title>
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    
        }
     body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: black;
       /* background: url('app/Views/color(1).jpeg') no-repeat;
        background-size: cover;
        background-position: center;*/
         }
     .wrapper{
        width: 420px;
        height: 422px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0,0,0,.2);
        color:rgb(255, 255, 255);
        border-radius: 10px;
        padding: 30px 40px;
     }    
     .wrapper h1 {
        font-size: 36px;
        text-align: center;
     }
     .wrapper .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
     }
     .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(225, 255, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: aliceblue;
        padding: 20px 45px 20px 20px;
     }
     .input-box input::placeholder{
        color: rgb(244, 250, 255);
     }
     .input-box box-icon{
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
     }
     .wrapper .rememberme{
        display: flex;
        justify-content: space-between;
        font-size: 17px;
        margin: 15px 0 15px;
     }
     .rememberme lable input{
        accent-color: #fff;
        margin-right: 15px;
     }
     .wrapper .btn {
        width: 100%;
        height: 45px;
        background : #2e64c8 ;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0,0,0,.1);
        cursor: pointer;
        font-size: 16px;
        color: #ffffff;
        font-weight: 600;
    }
    
    </style>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="<?= base_url('public/login'); ?>">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>          
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password"required >
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="rememberme">
                <label><input type="checkbox" name="remember_me"> Remember me</label>
            </div>
        </form>
    </div>
</body>
</html>
