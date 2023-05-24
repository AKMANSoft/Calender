<div class="newsletter-section px-60-auto py-100">
    <div class="mx-auto d-flex flex-column align-items-center" style="max-width: 700px;">
        <div class="text-center">
            <h3 class="theme-fw-700 mb-2">Be The First To Know</h3>
            <p class="theme-text-body theme-fw-400">Get into the latest hot projects and news before anyone else, to understand and act faster than anyone else. Secure your advantage and subscribe to our newsletter.</p>
        </div>
        <form id="joinNewsleterForm" action="{{route('join-newsleter')}}" method="POST">
            <div class="mt-60 rounded-pill bg-gradient-light w-400 d-flex">
                @csrf
                <input required type="email" class="form-control bg-transparent px-4 border-0 shadow-none" style="width: 100%;" name="email" value="" placeholder="Enter you email" />
                <button class="btn btn-primary col-auto line-50 px-40 rounded-5 border-0 text-light" type="submit">Join</button>
            </div>
            <div id="newsletterSuccessMessage" class="d-none align-items-center justify-content-center mt-4">
                <p class="text-center text-success">
                    You are successfully subscribed. <br>
                    Thank you for subscribing to our news letter.
                </p>
            </div>
        </form>
    </div>
</div>