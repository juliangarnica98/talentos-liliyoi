<template>
    <div>
        <Nav></Nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class=" text-white font-weight-bold animate__animated animate__backInLeft">Trabajamos con el corazón</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <!-- <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0 animate__animated animate__backInRight">¿Quiénes somos?</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4 animate__animated animate__backInRight animate__delay-1s">Somos una marca JOVEN, CREATIVA, FRESCA y DIVERTIDA, pensada en mujeres con estas mismas características. El color, la comodidad y la tecnología son nuestras principales cualidades por las que nuestras consumidoras nos refieren.</p>
                        <!-- <a class="btn btn-light btn-xl" href="#services">Get Started!</a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white" id="work">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">¿Quieres ser parte de nuestro equipo?</h2>
                <router-link class="btn btn-light btn-xl" to="/vacantes">Información</router-link>
                <!-- <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Información</a> -->
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">¿Por qué trabajar con nosotros?</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-lili"></i></div>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-lili"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-lili"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-lili"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <!-- <a class="portfolio-box" href="{{ asset('portfolio/fullsize/1.jpg') }}" title="Project Name"> -->
                            <img class="img-fluid" v-bind:src="imagen1" height=100 />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- <a class="portfolio-box" href="{{ asset('portfolio/fullsize/2.jpg') }}" title="Project Name"> -->
                            <img class="img-fluid"  v-bind:src="imagen2" height=100 />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- <a class="portfolio-box" href="{{ asset('portfolio/fullsize/3.jpg') }}" title="Project Name"> -->
                            <img class="img-fluid"  v-bind:src="imagen3" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- <a class="portfolio-box" href="{{ asset('portfolio/fullsize/4.jpg') }}" title="Project Name"> -->
                            <img class="img-fluid"  v-bind:src="imagen4" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- <a class="portfolio-box" href="{{ asset('portfolio/fullsize/5.jpg') }}" title="Project Name"> -->
                            <img class="img-fluid"  v-bind:src="imagen5" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- <a class="portfolio-box" href="{{ asset('portfolio/fullsize/6.jpg') }}" title="Project Name"> -->
                            <img class="img-fluid"  v-bind:src="imagen6" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">¡Mantengámonos en contacto!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">¡Envíenos un mensaje y nos pondremos en contacto con usted lo antes posible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Correo</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Número de telefono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
        <Footer></Footer>
        
    </div>
        
    
</template>

<script>

    import Footer  from '../page-init/Footer'
    import Nav  from '../page-init/Nav'
    export default {
        components:{Footer, Nav},
        mounted() {
            console.log('Component mounted.')
        },
        data(){
                return{
                    imagen1:'./portfolio/thumbnails/1.jpg',
                    imagen2:'./portfolio/thumbnails/2.jpg',
                    imagen3:'./portfolio/thumbnails/3.jpg',
                    imagen4:'./portfolio/thumbnails/4.jpg',
                    imagen5:'./portfolio/thumbnails/5.jpg',
                    imagen6:'./portfolio/thumbnails/6.jpg',
                    
                }
            }
    }
</script>


<!-- <template>
    <v-card
      class="mx-auto"
      max-width="500"
    >
      <v-system-bar
        color="indigo darken-2"
        dark
      >
        <v-spacer></v-spacer>
  
        <v-icon>mdi-window-minimize</v-icon>
  
        <v-icon>mdi-window-maximize</v-icon>
  
        <v-icon>mdi-close</v-icon>
      </v-system-bar>
  
      <v-toolbar
        color="indigo"
        dark
      >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>
  
        <v-toolbar-title>Discover</v-toolbar-title>
  
        <v-spacer></v-spacer>
  
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>
      </v-toolbar>
  
      <v-container fluid>
        <v-row dense>
          <v-col
            v-for="card in cards"
            :key="card.title"
            :cols="card.flex"
          >
            <v-card>
              <v-img
                :src="card.src"
                class="white--text align-end"
                gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                height="200px"
              >
                <v-card-title v-text="card.title"></v-card-title>
              </v-img>
  
              <v-card-actions>
                <v-spacer></v-spacer>
  
                <v-btn icon>
                  <v-icon>mdi-heart</v-icon>
                </v-btn>
  
                <v-btn icon>
                  <v-icon>mdi-bookmark</v-icon>
                </v-btn>
  
                <v-btn icon>
                  <v-icon>mdi-share-variant</v-icon>
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-card>
  </template>
  <script>
  export default {
    data: () => ({
      cards: [
        { title: 'Pre-fab homes', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', flex: 12 },
        { title: 'Favorite road trips', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 6 },
        { title: 'Best airlines', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 6 },
      ],
    }),
  }
</script> -->