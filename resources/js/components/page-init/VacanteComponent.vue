<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light py-3" id="mainNav2">
            <div class="container px-4 px-lg-5">
                <router-link class="navbar-brand" to="/">Talentos Lili-Yoi</router-link>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0" v-for="nav in navs" :key="nav.id" >
                        <li class="nav-item"><a class="nav-link" :href="'#'+nav.link" >{{nav.id}}</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        {{desserts.data}}
        <v-card class="mx-auto my-5" max-width="700">
            <v-card-title>
                Vacantes Lili-Pink
                <v-spacer></v-spacer>
                <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
            </v-card-title>
            <v-data-table :headers="headers" :items="desserts.data" :search="search"></v-data-table>
        </v-card>

            
        <!-- <router-link class="btn btn-light btn-xl" to="/Pagina de inicio">Información</router-link> -->
        <Footer></Footer>
    </div>
</template>
<script>
import Footer  from '../page-init/Footer'
import Nav  from '../page-init/Nav'

export default {
    components:{Footer, Nav},
    
    data () {
       return {
        search: '',
        headers: [

          { text: 'Id', value: 'id' },
          { text: 'Descripción', value: 'description' },
          { text: 'Salario', value: 'salary' },
          { text: 'Cargo', value: 'position' },
        ],
        desserts: [],
        navs:[
            {id:'Iniciar sesión / Registar hoja de vida',link:''}]
            
      }
    },
    mounted () {
      axios
        .get('/vacant.index')
        .then(response => (this.desserts = response))
      },
    methods: {
     
    },
  
}
</script>