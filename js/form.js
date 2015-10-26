$(document).ready(function ()
{
// ANDERE FORMS
  $(".indienja").hide();
  var janee = ["#formkindibo_vastemedicatie", "#formkindibo_allergie", "#formkindibo_aandacht", "#formkindkdv_vastemedicatie", "#formkindkdv_allergie", "#formkindkdv_aandacht", "#formkindkdv_tevroeggeboren"];
  $.each(janee, function (key, value)
  {

    $(value).bind('change', function (e)
    {
      if ($(value).val() == 'ja')
      {
        $(value).next().show();
      }
      if ($(value).val() == 'nee')
      {
        $(value).next().hide();
      }
    });
  });
  //HUISDOKTER
  $('.huisdokter').next().hide();
  $('.huisdokter').bind('change', function (e)
  {
    if($('.huisdokter').val() == 'niet')
    {
      $('.huisdokter').next().show();
    }
    else
    {
      $('.huisdokter').next().hide();
    }
  });

  // GEZIN FORM
  var max_fields = 10; //maximum input boxes allowed
  var wrapper = $(".input_fields_wrap"); //Fields wrapper
  var add_button = $(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function (e) { //on add input button click
    e.preventDefault();
    if (x < max_fields) { //max input box allowed
      x++; //text box increment
      $html = '<div><label for="formgezin_verblijfsadres" class="required">Adres*:</label><input type="text" id="formgezin_verblijfsadres" name="verblijf[' + x + '][0]" required="required" /><label for="formgezin_verblijfpostcode" class="required">Postcode*:</label><input type="text" id="formgezin_verblijfpostcode" name="verblijf[' + x + '][1]" required="required" /><label for="formgezin_verblijfsgemeente" class="required">Gemeente*:</label><input type="text" id="formgezin_verblijfsgemeente" name="verblijf[' + x + '][2]" required="required" /><a href="#" class="remove_field">Verwijder bovenstaand adres</a></div>'
      $(wrapper).append($html); //add input box
    }
  });
  $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
    e.preventDefault();
    $(this).parent('div').remove();
    x--;
  });
});