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



<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.2/b-2.0.0/cr-1.5.4/fc-3.3.3/fh-3.1.9/r-2.2.9/sc-2.0.5/sp-1.4.0/datatables.min.js"></script>

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
