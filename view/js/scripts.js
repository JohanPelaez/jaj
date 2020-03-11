//Crear la funcion para seleccionar los elementos
const selectElement = (element) => document.querySelector(element);
//Abrir y cerrar el Nav con click
selectElement( ".menu-icons").addEventListener( "click", () => {
  selectElement( "nav").classList.toggle( "active");
});

function fillForm(nombre, supCat, description, id) {
  document.querySelector("#cat_nombre_id").value = nombre;
  document.querySelector("#supCat_nombre").value = supCat;
  document.querySelector("#cat_descripcion").value = description;
  document.querySelector("#cat_id").value = id;
}

function fillFormsc(nombre, cat_id, description, id) {
  document.querySelector("#subCat_nombre").value = nombre;
  document.querySelector("#cat_nombre").value = cat_id;
  document.querySelector("#subCat_descripcion").value = description;
  document.querySelector("#subCat_id").value = id;
}

function fillFormprod(nombre, subcat, prov, stock, codcolor, color, id, cant) {
  document.querySelector("#prod_nombre").value = nombre;
  document.querySelector("#subcat").value = subcat;
  document.querySelector("#prov_id").value = prov;
  document.querySelector("#prod_cod_stock").value = stock;
  document.querySelector("#prod_cod_color").value = codcolor;
  document.querySelector("#color").value = color;
  document.querySelector("#prod_id").value = id;
  document.querySelector("#prod_inventario_no_talla").value = cant;
}

function fillFormprodstock(nombre, subcat, prov, stock, codcolor, color, id, cant) {
  document.querySelector("#prod_nombrest").value = nombre;
  document.querySelector("#subcatst").value = subcat;
  document.querySelector("#prov_idst").value = prov;
  document.querySelector("#prod_cod_stockst").value = stock;
  document.querySelector("#prod_cod_colorst").value = codcolor;
  document.querySelector("#colorst").value = color;
  document.querySelector("#prod_idst").value = id;
  document.querySelector("#prod_inventario_no_tallast").value = cant;
  var select = document.querySelector("#tallasprod22");
  select.innerHTML="";/*para limpiar el codigo*/
  tallas[id].forEach(function(talla){
    var option = document.createElement("option");
    option.text=talla;
    select.add(option);
  })
}

function fillFormprodtela(nombre, subcat, prov, stock, codcolor, color, id, cant) {
  document.querySelector("#prod_nombretela").value = nombre;
  document.querySelector("#subcattela").value = subcat;
  document.querySelector("#prov_tela").value = prov;
  document.querySelector("#prod_cod_stocktela").value = stock;
  document.querySelector("#prod_cod_colortela").value = codcolor;
  document.querySelector("#colortela").value = color;
  document.querySelector("#prod_idtela").value = id;
  document.querySelector("#prod_inventario_no_tallatela").value = cant;
}

function fillFormcli( cli_nombre, cli_ced_identidad, cli_direccion, cli_telefono1, cli_telefono2, cli_correo, cli_id) {
  document.querySelector("#cli_nombrecrear").value = cli_nombre;
  document.querySelector("#cli_ced_identidad").value = cli_ced_identidad;
  document.querySelector("#cli_direccion").value = cli_direccion;
  document.querySelector("#cli_tel1").value = cli_telefono1;
  document.querySelector("#cli_tel2").value = cli_telefono2;
  document.querySelector("#cli_correo").value = cli_correo;
  document.querySelector("#cli_id").value = cli_id;
}

function fillFormprov( prov_nombre, prov_ced_identidad, prov_direccion, prov_telefono1, prov_telefono2, prov_correo, prov_id) {
  document.querySelector("#prov_nombrecrear").value = prov_nombre;
  document.querySelector("#prov_ced_identidad").value = prov_ced_identidad;
  document.querySelector("#prov_direccion").value = prov_direccion;
  document.querySelector("#prov_tel1").value = prov_telefono1;
  document.querySelector("#prov_tel2").value = prov_telefono2;
  document.querySelector("#prov_correo").value = prov_correo;
  document.querySelector("#prov_id1").value = prov_id;
}

function fillFormmaq(maq_nombre, maq_ced_identidad, maq_direccion, maq_telefono1, maq_telefono2, maq_correo, maq_que_maquila, maq_id) {
  document.querySelector("#maq_nombrecrear").value = maq_nombre;
  document.querySelector("#maq_ced_identidad").value = maq_ced_identidad;
  document.querySelector("#maq_direccion").value = maq_direccion;
  document.querySelector("#maq_tel1").value = maq_telefono1;
  document.querySelector("#maq_tel2").value = maq_telefono2;
  document.querySelector("#maq_correo").value = maq_correo;
  document.querySelector("#maq_que_maquila").value = maq_que_maquila;
  document.querySelector("#maq_id").value = maq_id;
}

function fillFormpt( pt_nombre_puesto, pt_descripcion, pt_id) {
  document.querySelector("#pt_nombre").value = pt_nombre_puesto;
  document.querySelector("#pt_descripcion").value = pt_descripcion;
  document.querySelector("#pt_id").value = pt_id;
}

function fillFormemp( emp_ced_id, emp_nombre, emp_apellido1, emp_apellido2, emp_direccion,
 emp_fecha_salida, emp_salario, pt_nombre_puesto, emp_observaciones, emp_telefono1, emp_telefono2, emp_correo) {
  document.querySelector("#emp_ced_id").value = emp_ced_id;
  document.querySelector("#emp_nombre").value = emp_nombre;
  document.querySelector("#emp_apellido1").value = emp_apellido1;
  document.querySelector("#emp_apellido2").value = emp_apellido2;
  document.querySelector("#emp_direccion").value = emp_direccion;
  document.querySelector("#emp_fecha_salida").value = emp_fecha_salida;
  document.querySelector("#emp_salario").value = emp_salario;
  document.querySelector("#pt_id_emp").value = pt_nombre_puesto;
  document.querySelector("#emp_observaciones").value = emp_observaciones;
  document.querySelector("#emp_telefono1").value = emp_telefono1;
  document.querySelector("#emp_telefono2").value = emp_telefono2;
  document.querySelector("#emp_correo").value = emp_correo;
}
