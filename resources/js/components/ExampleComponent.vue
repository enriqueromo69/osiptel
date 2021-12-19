<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">los nuevos componentes funcionan</div>
          <input v-model="ejemp" type="text" />
          <button @click="session()">Mensaje bueno</button>
          <button @click="errores()">Mensaje de errores</button>
           <button @click="siOk()">Mensaje de success con reload solo dando en ok</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return { ejemp: "Mensajito" };
  },
  methods: {
    session: function () {
      //alert('hols');
      swal("Hola es un mensajito", "Datos", "success");
    },
    errores: function () {
      //alert('hols');
      swal("Mensajito de error", "Datos", "error");
    },
    siOk: function () {
      //alert('hols');
      swal({
          title:"Mensajito de sesion", 
          text:"Datos", 
          icon:"success",
          closeOnClickOutside:false,
          closeOnEsc:false
      }).then(select=>{
          if(select){
              location.reload();//recarga la pagina solo si se da en ok
          }
      });
    },

  },
};
</script>
