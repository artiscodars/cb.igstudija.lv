</div>

<footer>


  <?php if ($section == 'patient-data') { ?>

  <?php include $_SERVER["DOCUMENT_ROOT"].'/patient-data/patient-footer.php'; ?>


  <?php } elseif($section == 'recipes') { ?>

  <?php include $_SERVER["DOCUMENT_ROOT"].'/recipes/recipe-footer.php'; ?>

<?php } else { ?>

    <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/auth-footer.php'; ?>

<?php } ?>




</footer>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>







<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.4/date-1.1.1/fc-4.0.0/fh-3.2.0/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.2/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>



<script>

$(document).ready(function() {

$('#example').DataTable({
      columnDefs: [
     { orderable: false, targets: 5 },
      { orderable: false, targets: 0 }
    ],
   "order": [[1, "asc"]],
    language: {  url: '//cdn.datatables.net/plug-ins/1.11.2/i18n/lv.json' }

  });


  $('#saved-reports').DataTable({
        columnDefs: [
       { orderable: false, targets: 3 }
      ],
     "order": [[0, "asc"]],
      language: {  url: '//cdn.datatables.net/plug-ins/1.11.2/i18n/lv.json' }

    });

    $('#dati').DataTable({
      
      buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
          columnDefs: [
         { orderable: true }
        ],
       "order": [[0, "asc"]],
        language: {  url: '//cdn.datatables.net/plug-ins/1.11.2/i18n/lv.json' }

      });

    $('#saved-reports-2').DataTable({
      "info":     false,
      "lengthChange": false ,
          columnDefs: [
         { orderable: true}
        ],
       "order": [[0, "asc"]],
        language: {  url: '//cdn.datatables.net/plug-ins/1.11.2/i18n/lv.json' }

      });


} );

</script>



<script>

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});


</script>

</html>
