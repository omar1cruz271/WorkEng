</div>
<main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"> <br> Registro Empresa </br> </h2>
                    <p>Registrate con tu nombre de empresa y un correo electr&oacute;nico.&nbsp;</p>
                </div>
                <form id="formEmpresa">
                    <div class="form-group"><label for="name">Nombre completo de la empresa</label><input class="form-control item" type="text" id="name" name="name" data-validetta="required,maxLength[9]"></div>

                    <div class="form-group"><label for="name">Ingrese un nombre de Usuario</label><input class="form-control item" type="text" id="name" name="cif" data-validetta="required,maxLength[64]"></div>
                    <div class="form-group"><label for="password">Contrase&ntilde;a</label><input class="form-control item" type="password" id="password" name="password" data-validetta="required,minLength[5],maxLength[32]"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" placeholder="ejemplo@dominio.com" id="email" name="email" data-validetta="required,email,maxLength[32]"></div>
                    <div class="form-group"><label for="mobile">Contacto (Teléfono)</label><input class="form-control item" type="tel" id="mobile" name="mobile" data-validetta="required,number,minLength[10],maxLength[10]"></div>
                    <div class="form-group"><label for="mobile">Dirección de la empresa</label><input class="form-control item" type="text" id="mobile" name="direccion" data-validetta="required,minLength[5],maxLength[15]"></div>
                    <div class="form-group"><label for="name">Cédula de Identificación Fiscal (CIF)</label><input class="form-control item" type="text" id="name" name="name" data-validetta="required,maxLength[64]"></div>

                
                    <div class="form-group"><label for="gender">Giro:</label></div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="radio" id="gender" name="gender" value="Manufactureras" checked>
                        <label class="form-check-label" for="gender">
                            Manufactureras
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="radio" id="gender2" name="gender" value="Servicios">
                        <label class="form-check-label" for="gender2">
                            Servicios
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="radio" id="gender3" name="gender" value="Mercado">
                        <label class="form-check-label" for="gender3">
                            Mercado
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="radio" id="gender4" name="gender" value="Tecnologias">
                        <label class="form-check-label" for="gender4">
                            Tecnologias
                        </label>
                    </div>
                    <div class="form-group"><label for="date">Fecha de creación</label><input class="form-control item" type="date" id="date" name="date" data-validetta="required"></div>
                    <input type="submit" id="register-submit" name="register-submit" class="btn btn-primary btn-block" type="submit" value="Registrarme">
                </form>
            </div>
          </section>

</main>
<script>
    $(document).ready(function(){
        $("#formEmpresa").validetta({
            bubblePosition: 'bottom',
            bubbleGapTop: 10,
            bubbleGapLeft: -5,
            onValid:function(e){
                e.preventDefault();
                $.ajax({
                    method:"POST",
                    url:"<?php base_url(); ?>registroEmpresaAjax",
                    data:$("#formEmpresa").serialize(),
                    cache:false,
                    success:function(respAX){
                        var tipoAlerts = new Array("red","green");
                        var AX = JSON.parse(respAX);
                        $.alert({
                            title:AX.title,
                            icon: AX.icon,
                            content:AX.msj,
                            type:tipoAlerts[AX.val],
                            onDestroy:function(){
                                if (AX.val == 1) {
                                    window.location.replace("<?php base_url()?>loginEmpresa");
                                } else {
                                    $('#formEmpresa')[0].reset();
                                }
                            }
                        });
                    }
                });
            }
        });
    });
</script>
