<div class="myBtnContainer chapternav-category">
      <div class="chapternav-items">
        <li class="chapternav-item">
        <i class="fas fa-hand-point-right"></i>
          <a class="a todas" id="showAll" onclick="filterSelection('all')" href=>Todas</a>
        </li>
        <li class="chapternav-item">
          <i class="fas fa-industry"></i>
          <a class="a Manufactureras" id="showInv" onclick="filterSelection('Manufactureras')" href="#">Manufactureras</a>
        </li>
        <li class="chapternav-item">
        <i class="fas fa-taxi"></i>
          <a class="a Servicios" id="showMercado" onclick="filterSelection('Servicios')" href="#">Servicios</a>
        </li>
        <li class="chapternav-item">
        <i class="fas fa-shopping-basket"></i>
          <a class="a Mercado" id="showManufactureras" onclick="filterSelection('Mercado')" href="#">Mercado</a>
        </li>
        <li class="chapternav-item">
        <i class="fas fa-microchip"></i>
          <a class="a Tecnologia" id="showCumple" onclick="filterSelection('Tecnologia')" href="#">Tecnologías</a>
        </li>
        
      </div>
    </div>
</div>

<main class="page gallery-page">
    <section class="clean-block clean-gallery dark">
        <div class="container">
            <div class="block-heading" style="padding-top: 140px;">
            <h2 class="text-info">EMPRESAS</h2>
                    <p>Filtramos las empresas que más te pueden interesar de acuerdo a tu mayor interes <b>(<?php echo($interes) ?>)</b>. <br>Elige la empresa que más te agrade para obtener información sobre ella y sobre sus trabajos</p>
                </div>
            <div class="row" id="images"> 
              <div class="col-md-6 col-lg-4 item filterDiv Manufactureras"><a class="lightbox" href="<?php base_url();?>enviarPostales/factureras1"><img  class="img-thumbnail img-fluid image" id="img1" src="assets/img/empresas/factureras/em/image1.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Mercado"><a class="lightbox" href="<?php base_url();?>enviarPostales/Mercado1"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Mercado/image1.png"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Servicios"><a class="lightbox" href="<?php base_url();?>enviarPostales/Servicios1"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Servicios/image1.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Tecnologia"><a class="lightbox" href="<?php base_url();?>enviarPostales/Tecnologia1"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Tecnologia/image1.jpg"></a></div>
             
              <div class="col-md-6 col-lg-4 item filterDiv Manufactureras"><a class="lightbox" href="<?php base_url();?>enviarPostales/factureras2"><img  class="img-thumbnail img-fluid image" id="img1" src="assets/img/empresas/factureras/em/image2.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Mercado"><a class="lightbox" href="<?php base_url();?>enviarPostales/Mercado2"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Mercado/image2.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Servicios"><a class="lightbox" href="<?php base_url();?>enviarPostales/Servicios2"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Servicios/image2.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Tecnologia"><a class="lightbox" href="<?php base_url();?>enviarPostales/Tecnologia2"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Tecnologia/image2.png"></a></div>
             
              <div class="col-md-6 col-lg-4 item filterDiv Manufactureras"><a class="lightbox" href="<?php base_url();?>enviarPostales/factureras3"><img  class="img-thumbnail img-fluid image" id="img1" src="assets/img/empresas/factureras/em/image3.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Mercado"><a class="lightbox" href="<?php base_url();?>enviarPostales/Mercado3"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Mercado/image3.png"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Servicios"><a class="lightbox" href="<?php base_url();?>enviarPostales/Servicios3"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Servicios/image3.png"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Tecnologia"><a class="lightbox" href="<?php base_url();?>enviarPostales/Tecnologia3"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Tecnologia/image3.jpg"></a></div>
              
              <div class="col-md-6 col-lg-4 item filterDiv Manufactureras"><a class="lightbox" href="<?php base_url();?>enviarPostales/factureras4"><img  class="img-thumbnail img-fluid image" id="img1" src="assets/img/empresas/factureras/em/image4.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Mercado"><a class="lightbox" href="<?php base_url();?>enviarPostales/Mercado4"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Mercado/image4.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Servicios"><a class="lightbox" href="<?php base_url();?>enviarPostales/Servicios4"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Servicios/image4.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Tecnologia"><a class="lightbox" href="<?php base_url();?>enviarPostales/Tecnologia4"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Tecnologia/image4.jpg"></a></div>

              <div class="col-md-6 col-lg-4 item filterDiv Manufactureras"><a class="lightbox" href="<?php base_url();?>enviarPostales/factureras5"><img  class="img-thumbnail img-fluid image" id="img1" src="assets/img/empresas/factureras/em/image5.png"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Mercado"><a class="lightbox" href="<?php base_url();?>enviarPostales/Mercado5"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Mercado/image5.png"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Servicios"><a class="lightbox" href="<?php base_url();?>enviarPostales/Servicios5"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Servicios/image5.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Tecnologia"><a class="lightbox" href="<?php base_url();?>enviarPostales/Tecnologia5"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Tecnologia/image5.jpg"></a></div>
              <div class="col-md-6 col-lg-4 item filterDiv Tecnologia"><a class="lightbox" href="<?php base_url();?>enviarPostales/Tecnologia6"><img class="img-thumbnail img-fluid image" src="assets/img/empresas/Tecnologia/image6.png"></a></div>

            </div>
        </div>
    </section>
</main>

<script>
filterSelection('all')
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "<?php echo($interes) ?>";
    else{
      if(c== "<?php echo($interes) ?>") c="";
    }
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }

</script>
