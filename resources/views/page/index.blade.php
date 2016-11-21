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
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    new Vue({
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
            phone: ''
        },
        methods: {
            setActiveMachine: function(maquina){
                this.active_machine = maquina;
                $('#especificaciones').modal('show');
            },
            paymentConekta: function(){
                var that = this;
                Conekta.setPublishableKey("key_E18pcLyxSm2mewwwCWuar8w");
                var errorResponseHandler, successResponseHandler, tokenParams;
                tokenParams = {
                  "card": {
                    "number": "4242424242424242",
                    "name": "Javier Pedreiro",
                    "exp_year": "2017",
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
                    console.log(token)
                    // POST /someUrl
                    that.$http.post('/processPayment', {token: token.id, product: that.active_machine.id, buyer_name: 'Javier Pedreiro', buyer_email: 'kuamatzin@gmail.com'}).then((response) => {

                        // get status
                        response.status;

                        // get status text
                        response.statusText;

                        // get 'Expires' header
                        response.headers.get('Expires');

                        // set data on vm
                        that.$set('someData', response.body);

                    }, (response) => {
                        // error callback
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
                console.log("HOAL")
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