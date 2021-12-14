<x-app-layout>
  <style>
      .juice {
          background-image: url('https://www.copmadrid.org/wp/wp-content/uploads/2020/11/pildoras.jpg');
      }

      .juice2 {
          background-image: url('https://cdn-icons-png.flaticon.com/512/1810/1810119.png');
      }

      .juice3 {
          z-index: 10;
          position: relative;
      }

      .juice3::after {
          content: '';
          position: absolute;
          opacity: .5;
          z-index: -999;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background-image: url('https://i0.wp.com/www.clinicalatino.med.ec/www/wp-content/uploads/2019/04/farmacia-1.jpg?w=848&ssl=1');
      }

      .text-primary {
          color: #f9b529;
      }

      .text-primary-lite {
          color: #fac251;
      }

      .text-secondary {
          color: #294356;
      }

      .text-secondary-lite {
          color: #d5dee5;
      }

      .bg-primary {
          background-color: #db8ad4;
      }

      .bg-primary-lite {
          background-color: #e0cddf;
      }

      .bg-secondary {
          background-color: #294356;
      }

      .bg-secondary-lite {
          background-color: #d5dee5;
      }

      .product {
          background-image: url('https://lh3.googleusercontent.com/proxy/ivaImsoMWySn2HjjgRcfR0FwHiBHGy-LBj8aPeOm_tcJaVqxRVB2GF8-IiBaFUrwAQJ1nYrJnL7bCp1dz2PvGfwYZEMKXdpOeMAqssQKMWYwYQMJeLbMUjUjEun-7bNPiUp4mfov0WLl914h_TJWvjjFm4lOgzIIjRsiRcyWI_U');
      }
      .product2 {
          background-image: url('https://cdn.shopify.com/s/files/1/0368/1363/5716/products/10611_1029400c-91e8-402a-ad77-683cd443bf97_293x293.jpg?v=1623201086');
      }
      .product3 {
          background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0Kcq_DwUV99aHmYO3O269bu5QtJIkAgN4iz8TiH_L02Tho7CeFXbY-cMBUxOF0KCH4II&usqp=CAU');
      }
      .product4 {
          background-image: url('https://www.redaccionmedica.com/images/destacados/el-coste-de-fabricacion-de-los-farmacos-sin-variaciones-al-cierre-de-2018-5024_620x368.jpg');
      }
      .whatsapp {
          position: fixed;
          right:25px; /Margen derecho/
          bottom:20px; /Margen abajo/
          z-index:999;
      }
      .whatsapp img {
          width:60px; /Alto del icono/
          height:60px; /Ancho del icono/
      }
      .whatsapp:hover{
          opacity: 0.7 !important;
          filter: alpha(opacity=70) !important;
      }

      .facebook {
          position: fixed;
          right:25px; /Margen derecho/
          bottom:90px; /Margen abajo/
          z-index:999;
      }
      .facebook img {
          width:60px; /Alto del icono/
          height:60px; /Ancho del icono/
      }
      .facebook:hover{
          opacity: 0.7 !important;
          filter: alpha(opacity=70) !important;
      }

      .telegram {
          position: fixed;
          right:25px; /Margen derecho/
          bottom:160px; /Margen abajo/
          z-index:999;
      }

      .telegram img {
          width:60px; /Alto del icono/
          height:60px; /Ancho del icono/
      }
      .telegram:hover{
          opacity: 0.7 !important;
          filter: alpha(opacity=70) !important;
      }

  </style>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="container">
                  <div class="min-h-screen bg-white">
                      <!-- body -->
                      <main>

                          <div class="whatsapp">
                              <a href="https://api.whatsapp.com/send?phone=59175180391&text=Hola!%20Quisiera%20saber%20mas%20sobre%20la%20pagina"
                                  target="_blank" title="Contactame por Whatsapp">
                                  <img src="https://www.peengler.com/wp-content/uploads/whatsapp.png" alt="WhatsApp" />
                              </a>
                          </div>
                          <br>
                          <br>
                          <br>
                          <div class="facebook">
                              <a href="https://m.me/henry.romeroojeda" target="_blank" title="Contactame por Messenger">
                                  <img src="https://www.peengler.com/wp-content/uploads/messenger.png" alt="Messenger" />
                              </a>
                          </div>
                          <br>
                          <br>
                          <br>

                          <div class="telegram">
                              <a href="https://t.me/Henry_Hache19" target="_blank" title="Contactame por Telegram">
                                  <img src="https://pngimg.com/uploads/telegram/telegram_PNG34.png" alt="Telegram" />
                              </a>
                          </div>
                          <br>
                          <br>
                          <br>

                          <section class="juice3 bg-gray-100 bg-opacity-90 py-10">
                              <div class="container mx-auto px-4 flex flex-col lg:flex-row">
                                  <div class="juice2 mt-6 lg:mt-0 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                                      <div class="max-w-sm">
                                          <p class="text-3xl md:text-4xl font-semibold uppercase">20% sale off</p>
                                          <p class="mt-8 font-semibold">Syncthetic seeds<br />2.0 OZ</p>
                                          <button class="mt-20 bg-white font-semibold px-8 py-2 rounded">Shop Now</button>
                                      </div>
                                  </div>
                              </div>
                          </section>
                          <section class="container mx-auto pt-12 bg-white">
                              <!-- title -->
                              
                              <!-- cards -->
                            
                          </section>
                          <section class="container mx-auto pt-12">
                              <!-- title -->
                              <div class="relative flex items-end font-bold">
                                  <h2 class="text-2xl">Image</h2>
                                  <a href class="ml-10 flex items-center text-gray-400">
                                    
                                      <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                  </a>
                                  <div class="ml-auto flex">
                                      <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                          <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
                                      </a>
                                      <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                          <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                      </a>
                                  </div>
                              </div>
                              <!-- cards -->
                              <div class="mt-10">
                                  <ul class="-m-3.5 flex">
                                      <li class="product m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                      <li class="product2 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                      <li class="product4 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                      <li class="product3 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                  </ul>
                              </div>
                          </section>
                          <!-- footer -->
                          <footer class="mt-16 h-48">
                              <hr>
                              <div class="container mx-auto py-5">
                                  <a href>&copy; 2021 <span class="font-bold">Farmacia Villa el Carmen</span>By: Henry</a>
                              </div>
                          </footer>



                      </main>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>