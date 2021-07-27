<body>

<main class="registro">
    <div class="bg-login">
        <div class="row justify-content-center">
            <div class="col-6 mt-2">
                <div class="card-body text-white bg-dark">
                    <div class="col-auto">
                        <div class="register_card">
                            <div class="form_container">
                                <form class="form" action="registro.php" method="POST">
                                    <div class="subtit">
                                        <h2> Registrarse </h2>
                                    </div>  
                                    <div  class="form-row">
                                        <div class="input-group mb-3 col-6">
                                            <input type="text" name="nombre" class="form-control input_user" placeholder="Nombre">
                                        </div>
                                        <div class="input-group mb-3 col-6">
                                            <input type="text" name="apellido" class="form-control input_pass" placeholder="Apellido">
                                        </div>
                                        <div class="input-group mb-3 col-12">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control input_user" placeholder="Email">
                                        </div>
                                        <div class="input-group mb-3 col-6">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="usuario" class="form-control input_user" placeholder="Usuario">
                                        </div>
                                        <div class="input-group mb-3 col-6">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control input_pass" placeholder="password">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 login_container"></div>
                                    <button type="submit" class="btn btn-block btn-secondary">Registrate</button>
                                    <button type="submit" class="btn btn-block btn-secondary">Limpiar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
