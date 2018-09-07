<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal web - Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Iniciar sesión</h3>
                    <!--<p class="subtitle has-text-grey">Please login to proceed.</p> -->
                    <div class="box">
                        <figure class="avatar">
                            <img src="images/logo.jpg">
                        </figure>
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" placeholder="Ingresa tu correo" autofocus="" id="user" required>
                                </div>
                            </div>



                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" placeholder="Ingresa contraseña" id="pass" required>
                                </div>
                            </div>

                            <button class="button is-block is-info is-large is-fullwidth" type="submit" id="btn-login">Ingresar</button>

                           
                            <img src="images/ajax-loader.gif" alt="cargando..." style="height: 100px" id="login-carga">
                            
                            <br/>
                            <div class="notification is-danger">
                              <button class="delete msj"></button>
                              <strong>Correo o contraseña inválido</strong>
                          </div>
                            
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="views/registro.php">Regístrate aquí</a> &nbsp;·&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script async type="text/javascript" src="js/bulma.js"></script>
    <script src="js/login.js"></script>
</body>

</html>