$(document).ready(function(){
  // ajax form
  $("form").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
       type: "POST",
       url: url,
       data: form.serialize(), // serializes the form's elements.
       success: function()
       {
            // show response from the php script.
            $.fancybox.open({
              src  : '#custom-modal',
              type : 'inline'
            });
       }
     });
  });
})