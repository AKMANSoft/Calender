<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="{{ asset('assets') }}/js/validate.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://commerce.coinbase.com/v1/checkout.js?version=201807"></script>
<script type="text/javascript">

    function saveCoinbaseCommereceResponse(e){
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "response": e,
            },
            url: "{{ route('payments.store') }}",
            success: function(response) {
                if (response.success) {
                    console.log('payment response save in database');
                } else if (response.error) {
                    console.log('error saving payment response in database');
                } else {
                    console.log('server error');
                }
            },
            error: function(response) {
                console.log('server error');
            }
        });
    }
    BuyWithCrypto.registerCallback('onSuccess', function(e) {
        saveCoinbaseCommereceResponse(e);
    });

    BuyWithCrypto.registerCallback('onFailure', function(e) {
        // Charge failed
        saveCoinbaseCommereceResponse(e);
    });

    BuyWithCrypto.registerCallback('onPaymentDetected', function(e) {
        // Payment has been detected but not yet confirmed
        saveCoinbaseCommereceResponse(e);
    });
</script>
@yield('custom-script')
