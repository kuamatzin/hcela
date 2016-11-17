/* Los parámetros pueden ser un objeto de javascript, una forma de HTML o una forma de JQuery */

var errorResponseHandler, successResponseHandler, tokenParams;
tokenParams = {
  "card": {
    "number": "4242424242424242",
    "name": "Javier Pedreiro",
    "exp_year": "2014",
    "exp_month": "12",
    "cvc": "123",
    "address": {
        "street1": "Calle 123 Int 404",
        "street2": "Col. Condesa",
        "city": "Ciudad de Mexico",
        "state": "Distrito Federal",
        "zip": "12345",
        "country": "Mexico"
     }
  }
};

/* Después de tener una respuesta exitosa, envía la información al servidor */

successResponseHandler = function(token) {
  return $.post('/process_payment?token_id=' + token.id, function() {
    return document.location = 'payment_succeeded';
  });
};

var conektaSuccessResponseHandler = function(token) {
  var $form = $("#card-form");

  /* Inserta el token_id en la forma para que se envíe al servidor */
  $form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
 
  /* and submit */
  $form.get(0).submit();
};

/* Después de recibir un error */

errorResponseHandler = function(error) {
  return console.log(error.message);
};

/* Tokenizar una tarjeta en Conekta */

Conekta.token.create(tokenParams, successResponseHandler, errorResponseHandler);