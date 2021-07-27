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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>



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
