
<body>
<!--Template-->
<main>
    <div class="row justify-content-center">
        <div class="col-4 mt-2">
            <div id="shadow" class="card-body text-white">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="user_card">
                            <div class="form_container">
                                <form class="form" action="login.php" method="post">
                                    <div class="subtit text-center">
                                        <h2> Iniciar sesion</h2>
                                    </div> 
                                    <div class="form-row">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control input_user" placeholder="usuario@email.com">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control input_pass" placeholder="***********">
                                        </div>
                                    </div>
                                    <div class="recordarme">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                <label class="custom-control-label" for="customControlInline">Recordarme</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-4">
                                        <div class="d-flex justify-content-center links">
                                            ¿No tenes usuario? <a href="index.php?seccion=registro" class="ml-2">Registrate</a>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-dark">Ingresa</button>
                                        <button type="submit" class="btn btn-block btn-dark">Limpiar</button>
                                    </div>
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
