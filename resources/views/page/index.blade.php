@extends('page.master')

@section('content')

    @include('page.slider') 

    @include('page.maquinaria') 

    @include('page.herramientas')

    @include('page.quienes_somos')

    @include('page.contacto')

    @include('page.footer')

    @include('page.modals')

@endsection

@section('scripts')
<script>
    $("#especificaciones").on("hidden.bs.modal", function () {
        vm.active_machine = "";
    });
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    var vm = new Vue({
        el: "body",
        data: {
            active_machine: '',
            pago: false,
            errors: '',
            name: '',
            email: '',
            message: '',
            corp_name: '',
            state: '',
            city: '',
            phone: '',
            //Card Validation
            valid_card: false,
            brand_card: '',
            card_number: '',
            card_name: '',
            card_cvc: '',
            card_expYear: '',
            card_expMonth: '',
            boton_pagar: true,
            boton_procesando_pago: false
        },
        methods: {
            setActiveMachine: function(maquina){
                this.active_machine = maquina;
                $( "#active_tab" ).trigger( "click" );
                $('#especificaciones').modal('show');
            },
            validarTarjeta: function(){
                this.valid_card = Conekta.card.validateNumber(this.card_number);
                this.brand_card = Conekta.card.getBrand(this.card_number);
            },
            paymentConekta: function(){
                var that = this;
                Conekta.setPublishableKey("key_E18pcLyxSm2mewwwCWuar8w");
                var errorResponseHandler, successResponseHandler, tokenParams;
                tokenParams = {
                  "card": {
                    "number": this.card_number,
                    "name": this.card_name,
                    "exp_year": this.card_expYear,
                    "exp_month": this.card_expMonth,
                    "cvc": this.card_cvc,
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
                    // POST /someUrl
                    that.$http.post('/processPayment', {token: token.id, product: that.active_machine.id, buyer_name: that.card_name, buyer_email: 'kuamatzin@gmail.com'}, {before : function(){
                        that.boton_pagar = false;
                        that.boton_procesando_pago = true;
                    }}).then((response) => {
                        that.boton_pagar = true;
                        that.boton_procesando_pago = false;
                        if (response.status == 400) {
                            swal(response.data.status);
                            sweetAlert("Oops...", response.data.status, "error");
                        }
                        else {
                            that.card_name = ''
                            that.card_number = ''
                            that.card_expMonth = ''
                            that.card_expYear = ''
                            that.card_cvc = ''
                            that.valid_card = false
                            swal("Perfecto!", "¡Pago procesado con éxito!", "success")
                        }
                    }, (response) => {
                        
                    });
                };

                /* Después de recibir un error */
                errorResponseHandler = function(error) {
                  return console.log(error.message);
                };

                /* Tokenizar una tarjeta en Conekta */
                Conekta.token.create(tokenParams, successResponseHandler, errorResponseHandler);
            },
            contacto: function(){
                var that = this;
                this.$http.get('/enviar_email/?name=' + this.name + '&corp_name=' + this.corp_name + '&state=' + this.state + '&city=' + this.city + '&email=' + this.email + '&phone=' + this.phone + '&message=' + this.message).then(function(response){
                    if (response.body == 'Exito') {
                        swal("Enseguida nos pondremos en contacto contigo")
                        that.name = ''
                        that.corp_name = ''
                        that.state = ''
                        that.city = ''
                        that.email = ''
                        that.phone = ''
                        that.message = ''
                    }
                    else {
                        that.errors = JSON.parse(response.body);
                    }
                }, function(error){

                })
            }
        }
    })
</script>
@endsection