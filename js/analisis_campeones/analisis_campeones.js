$(document).ready(function () {
  $("#tablaBuscarPersonajes").DataTable({
    info: false,
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.modal({
          header: function (row) {
            var data = row.data();
            return (
              "<h4 class='text-dark'>Detalles de " +
              data[0] +
              " " +
              data[1] +
              " </h4> "
            );
          },
        }),
        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
          tableClass: "table",
        }),
      },
    },
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json",
    },
  });
});

