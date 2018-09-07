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
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Registro de usuario</h3>
                    <!--<p class="subtitle has-text-grey">Please login to proceed.</p> -->
                    <div class="box">
                        <figure class="avatar">
                            <img src="../images/logo.jpg">
                        </figure>
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" placeholder="Ingresa tu correo" autofocus="" id="user" required min="5" max="100">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" placeholder="Ingresa contraseña" id="pass" required min="3" max="50">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder="Ingresa tu nombre" autofocus="" id="nombre" required min="3" max="30">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder="Ingresa tu nombre" autofocus="" id="apellido" required min="3" max="30">
                                </div>
                            </div>
                          
                            <button class="button is-block is-success is-large is-fullwidth" id="registro">Registrar</button>
                             <img src="../images/ajax-loader.gif" alt="cargando..." style="height: 100px" id="login-carga">
                            
                            <br/>
                            <div class="notification is-danger noti-danger">
                              <button class="delete msj"></button>
                              <strong>El correo ingresado ya existe, por favor intenta con otro</strong>
                          </div>

                          <div class="notification is-info noti-success">
                              <button class="delete msj"></button>
                              <strong>Se ha registrado correctamente, ya puedes acceder!</strong>
                          </div


                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="../">Iniciar sesión</a> &nbsp;·&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/registro.js"></script>
</body>

</html>