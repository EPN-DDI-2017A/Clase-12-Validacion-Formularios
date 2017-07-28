/**
 * Created by chalosalvador on 28/7/17.
 */

$( "#registro" ).validate({
  rules: {
    nombre: {
      required: true
    },
    apellido: {
      required: true
    },
    email: {
      required: true,
      email: true
    },
    clave: {
      required: true
    }
  }
});
