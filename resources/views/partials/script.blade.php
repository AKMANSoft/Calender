<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{asset('assets')}}/js/validate.js"></script>
<script src="{{asset('assets')}}/libs/jquery/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script type="text/javascript">
    function saveCoinbaseCommereceResponse(e) {
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
                    window.open("https://kyc.defilink.finance/");
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
        console.log('payment failed or canceled ..');
    });

    BuyWithCrypto.registerCallback('onPaymentDetected', function(e) {
        // Payment has been detected but not yet confirmed
        saveCoinbaseCommereceResponse(e);
    });
</script>

<script src="{{ asset('assets') }}/libs/glidejs/glide.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        new Glide('.nft-cards-carousel', {
            type: "carousel",
            autoplay: 2500,
            animationDuration: 1000
        }).mount();
    })
    $("#register-success-alert").delay(5000).fadeOut(200, function() {
        $(this).alert('close');
    });

    function openImageInNewTab(imageUrl) {
        window.open(imageUrl, '_blank');
    }

    $(".buy-with-crypto").click((e) => {
        setTimeout(function() {
            $(e.target).removeClass("loading");
            console.log('test');
        }, 10);
    })

    // function redirectToHTTPS() {
    //     if (window.location.protocol == "http:") {
    //         window.location.href = "https://" + window.location.host + window.location.pathname;
    //         console.log('test success');
    //     }
    //     console.log('test success 00');
    // }
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-bs-toggle=tooltip]'
        });
    });

    $("#joinNewsleterForm").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: (response) => {
                $("#newsletterSuccessMessage")
                    .removeClass("d-none")
                    .addClass("d-flex")
                    .delay(5000).fadeOut(200, function() {
                        $(this).removeClass("d-flex").addClass("d-none");
                    });
                $(this).find("input").val("");
                console.log(response);
            },
            error: (error) => {
                $("#newsletterErrorMessage")
                    .removeClass("d-none")
                    .addClass("d-flex")
                    .delay(5000).fadeOut(200, function() {
                        $(this).removeClass("d-flex").addClass("d-none");
                    });
                console.log(error);
            }
        });
    });
</script>
@yield('custom-script')