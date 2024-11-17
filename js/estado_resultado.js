function resultado() {
     // Solicitar datos al usuario
     let venta = parseFloat(prompt("Ingrese el total de Ventas:"));
     let devoluciones = parseFloat(prompt("Ingrese las Devoluciones sobre Ventas:"));
     let descuentos = parseFloat(prompt("Ingrese los Descuentos sobre Ventas:"));
     let costoVentas = parseFloat(prompt("Ingrese el Costo de Ventas:"));
     let gastoVentas = parseFloat(prompt("Ingrese el Gasto de Ventas:"));
     let gastoAdministracion = parseFloat(prompt("Ingrese el Gasto de Administración:"));
 
     // Cálculos
     let ventasNetas = venta - devoluciones - descuentos;
     let utilidadBruta = ventasNetas - costoVentas;
     let utilidadOperativa = utilidadBruta - gastoVentas - gastoAdministracion;
     let impuesto = utilidadOperativa * 0.295; // Suponiendo un 29.5% de impuesto
     let utilidadNeta = utilidadOperativa - impuesto;
 
     // Mostrar resultados en la tabla
     document.getElementById("venta").textContent = venta.toLocaleString();
     document.getElementById("devoluciones").textContent = devoluciones.toLocaleString();
     document.getElementById("descuentos").textContent = descuentos.toLocaleString();
     document.getElementById("ventasNetas").textContent = ventasNetas.toLocaleString();
     document.getElementById("costoVentas").textContent = costoVentas.toLocaleString();
     document.getElementById("utilidadBruta").textContent = utilidadBruta.toLocaleString();
     document.getElementById("gastoVentas").textContent = gastoVentas.toLocaleString();
     document.getElementById("gastoAdministracion").textContent = gastoAdministracion.toLocaleString();
     document.getElementById("utilidadOperativa").textContent = utilidadOperativa.toLocaleString();
     document.getElementById("utilidadNeta").textContent = utilidadNeta.toLocaleString();
}