<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

$(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
      // Πάρτε την τιμή του checkbox και το όνομά του
      var checkbox_value = $(this).is(":checked") ? 1 : 0;
      var checkbox_name = $(this).attr("name");
  
      // Κάντε ένα αίτημα AJAX στον server για να ενημερώσετε τη βάση δεδομένων
      $.ajax({
        url: "ldb.php",
        type: "POST",
        data: {
          name: checkbox_name,
          status: checkbox_value
        },
        success: function(data) {
          console.log("Επιτυχής ενημέρωση της βάσης δεδομένων!");
          // Ενημερώστε το checkbox στην οθόνη αν η ενημέρωση ήταν επιτυχής
          $("input[name='" + checkbox_name + "']").prop("checked", checkbox_value);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log("Σφάλμα κατά την ενημέρωση της βάσης δεδομένων: " + textStatus, errorThrown);
          // Επαναφέρετε την τιμή του checkbox στην αρχική του τιμή αν υπήρξε σφάλμα
          $("input[name='" + checkbox_name + "']").prop("checked", !checkbox_value);
        }
      });
    });
  });
  