
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing:border-box
        }   
        body {
            width: 100vw;
            height: 100vh;
            margin: 0 0 0 0;
            /* background-color: #e6edf0; */
            font-family: sans-serif;
        }
        .column-container{
            height: 100%;
            width: 100vw;
            flex-wrap: nowrap;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto
        }
        .column {
            width: 100vw;
            height: 100vh;
            max-width: 50%;
            min-width: 600px;
            margin:auto
        }
        .form-container {
            min-height: 300px;
            width: 350px;
            margin: 20px auto;
            align-items: center;
            color: #3d3d3d
        }
        input {
           width: 100%;
           height: 40px;
           font-size: 16px;
           margin: 10px 0 10px 0;
           border-style: solid;
           border-radius: 5px;
           border-width: 1px;
           padding: 0 15px 0 15px
        }
    </style>

</head>
<body>
    <div class="column-container">
        <div class="column" >
            <div class="form-container">
                <div >
                    <p>These forms do not have validations and efforts to sanitize the inputs that mitigates the risk of attacks such as cross site scripting and SQL injctions</p>
                </div>
                <div >
                    <h5>Login</h5>
                </div>
                <form method="post" action="/app/controller/login-controller.php" class="form-input">
                    <div class="intput-item">
                        <input type="email" name="email" placeholder="email" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="password" name="password" placeholder="password" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="submit" name="submit" value="login"/>
                    </div>
                </form>
            </div>
            <div class="form-container">
                <div >
                    <h5>Sign up</h5>
                </div>
                <form method="post" action="" class="form-input">
                    <div class="intput-item">
                        <input type="email" name="email" placeholder="email" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="password" name="password" placeholder="password" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="password" name="repassword" placeholder="renter password" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="submit" value="Sign up"/>
                    </div>
                </form>
            </div>

        </div>


        <div class="column">
        <div class="form-container">
                <div >
                    <p>These forms has validations and efforts to sanitize the inputs to mitigate the risk of attacks such as cross site scripting and SQL injctions</p>
                </div>
                <div >
                    <h5>Login</h5>
                </div>
                <form method="post" action="" class="form-input">
                    <div class="intput-item">
                        <input type="email" name="email" placeholder="email" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="password" name="password" placeholder="password" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="submit" value="Login"/>
                    </div>
                </form>
            </div>
            <div class="form-container">
                
                <div >
                    <h5>Sign up</h5>
                </div>
                <form method="post" action="" class="form-input">
                    <div class="intput-item">
                        <input type="email" name="email" placeholder="email" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="password" name="password" placeholder="password" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="password" name="repassword" placeholder="renter password" />
                        <span></span>
                    </div>
                    <div class="intput-item">
                        <input type="submit" value="Sign up"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>