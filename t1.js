<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

$(document).ready(function() {
    $("input[type='checkbox']").change(function() {
      var checked = $(this).prop("checked");
      var id = $(this).attr("name");
  
      $.ajax({
        url: "ldb.php",
        method: "POST",
        data: {
          id: id,
          status: checked ? 1 : 0
        },
        success: function(data) {
          // επιτυχής απάντηση από τον server
          // ανανέωση της σελίδας
          location.reload();
        },
        error: function(xhr, status, error) {
          // αποτυχημένη απάντηση από τον server
          console.error(error);
        }
      });
    });
  });
  