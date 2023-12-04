module.exports = {
    php: "C:\\xampp\\php\\php.exe"   // Windows
  }

  $(".delete-form").on("submit", function(e){
    e.preventDefault();

    var form = $(this);
    $.ajax({
        url: form.attr("action"),
        type: 'POST',
        data: form.serialize(),
        success: function(result){
            alert(result);
            // Remove a linha do produto da tabela
            form.closest('tr').remove();
        }
    });
});