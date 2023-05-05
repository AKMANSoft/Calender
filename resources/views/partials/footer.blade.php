<footer>
    <div class="d-flex flex-column pt-4 flex-xl-row gap-4 align-items-center justify-content-between px-60-auto max-1440 mx-auto">
        <a href="/" class="mx-2">
            <img src="/assets/images/logo.svg" height="83" alt="" />
        </a>
        <div class="col-md-auto">
            <div class="row gx-5 gx-xl-4 gy-3 justify-content-center">
                <a href='{{ route('projects.index', ['category' => 'upcoming', 'chain' => 'all']) }}' class='text-decoration-none text-light col-auto fs-14'>Upcoming Events</a>
                <a href='{{route('projects.index', ['category'=>'today', 'chain' => 'all'])}}' class='text-decoration-none text-light col-auto fs-14'>Recently Added</a>
                <a href='{{ route('projects.index', ['category' => 'most popular', 'chain' => 'all']) }}' class='text-decoration-none text-light col-auto fs-14'>Most Popular</a>
                <a href='{{ route('projects.index', ['category' => 'minting soon', 'chain' => 'all']) }}' class='text-decoration-none text-light col-auto fs-14'>Coming Soon</a>
                <a href='{{ route('projects.index', ['category' => 'recently closed', 'chain' => 'all']) }}' class='text-decoration-none text-light col-auto fs-14'>Recently Closed</a>
            </div>
        </div>
        <div class="mx-2">
            <a href="https://moonlanding.media/marketing/" class="btn-theme w-100 px-4 h-46">
                <!-- <button type='button' class='btn-theme'> -->
                Get help selling your project
                <!-- </button> -->
            </a>
        </div>
    </div>
    <div class="bg-secondary-5">
        <div class="max-1440 mx-auto d-flex flex-column flex-md-row gap-4 align-items-center justify-content-between mt-5 px-60-auto py-35">
            <div class='col-auto'>
                <span class='text-muted col'>© All rights reserved. Moonlanding Media</span>
            </div>
            <div class="d-flex col justify-content-end gap-4 gap-lg-5">
                <a href="https://twitter.com/MoonLanding_M" target="_blank"><i class="fa-brands fa-twitter text-muted"></i></a>
                <a href="https://discord.gg/WCHdkApMJF" target="_blank"><i class="fa-brands fa-discord text-muted"></i></a>
                <!-- <a href="#"><i class="fa-brands fa-linkedin-in text-muted"></i></a> -->
            </div>
        </div>
    </div>
    <div class="d-flex flex-column p-5 px-60-auto max-1440 mx-auto">
        <p class="theme-text-sm theme-fw-700 text-light mb-3">Disclaimer:</p>
        <p class="theme-text-sm theme-fw-400 text-light-60" style=" font-size: 12px !important;">
            All investment or financial opinions expressed or listed on or by MoonLanding Media are not recommendations nor advice, are opinions only, and are intended for entertainment purposes only. Do your own research prior to making any kind of investment.
            <br><br>
            All listed projects and their descriptions have been provided by the project teams themselves, are likely to be bias, and are not edited or endorsed by MoonLanding Media in any way. Neither articles nor listings have been fact checked and may contain incorrect information. Please verify all information before relying on it. Use at your own risk. MoonLanding accepts no liability of any sorts.
        </p>
    </div>
</footer>