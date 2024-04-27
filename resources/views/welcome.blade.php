<x-guest-layout>
    <x-welcome-header>
    </x-welcome-header>

    {{-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}

    <main class="mt-6 m-20">
        {{-- 
        <div role="alert" class="alert alert-info">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span>New software update available.</span>
          </div>
          <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>Your purchase has been confirmed!</span>
          </div>
          <div role="alert" class="alert alert-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
            <span>Warning: Invalid email address!</span>
          </div>
          <div role="alert" class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>Error! Task failed successfully.</span>
          </div>
    --}}
    <button role="link" class="relative after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:origin-bottom-right after:scale-x-0 after:bg-neutral-800 after:transition-transform after:duration-300 after:ease-[cubic-bezier(0.65_0.05_0.36_1)] hover:after:origin-bottom-left hover:after:scale-x-100">Hover me</button>s
    </main>




    <footer class="footer p-10 bg-base text-base-content mt-auto" data-theme="wowc_neutral">
        <nav>
            <h6 class="footer-title">Team</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
        </nav>
        <nav>
            <h6 class="footer-title">Useful Links</h6>
            <a class="link link-hover" href="https://github.com/World-of-Warclass" target="_blank">Github</a>
            <a class="link link-hover">Special Thanks</a>

        </nav>
        <nav>
            <h6 class="footer-title">Social</h6>
            <div class="grid grid-flow-col gap-4 place-items-center text-2xl">
                <a href="https://github.com/World-of-Warclass" target="_blank" class="transition-transform transform-growth hover:scale-110 duration-200"><span class="icon-[ri--github-fill]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span class="icon-[ri--facebook-circle-fill]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span class="icon-[ri--twitter-x-line]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span class="icon-[ri--youtube-fill]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span class="icon-[ri--soundcloud-line]"></span></a>
            </div>
        </nav>
    </footer>


</x-guest-layout>
