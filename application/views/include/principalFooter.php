    <footer class="footer-sitio pt-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                    <p class="text-justify"><?= $principal[0]['nosotros'] ?>.</p>
                </div>
                
                <div class="col-md-6 text-center">
                    <h3 class="text-uppercase pb-4">Contacto</h3>
                    <p><?= $principal[0]['contacto'] ?> </p>
                    <nav class="sociales text-center">
                        <ul>
                          <li>
                            <a href="http://facebook.com"> 
                              <span class="sr-only"> Facebook</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://twitter.com"> 
                              <span class="sr-only"> Twitter</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://instagram.com">
                              <span class="sr-only"> Instagram</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://pinterest.com"> 
                              <span class="sr-only"> Pinterest</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://youtube.com"> 
                              <span class="sr-only"> YouTube</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div> <!--col-md-4-->
                <hr class="w-100">
                <p class="text-center copyright w-100">Videojuegos 2019. Todos los derechos reservados</p>
            </div><!--.row-->
        </div> <!--.container-->

    </footer>