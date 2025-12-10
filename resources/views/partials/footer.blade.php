<footer class="bg-neutral-primary-soft rounded-base shadow-xs border border-default m-4">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-body sm:text-center">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-body sm:mt-0">
            <statamic:nav:footer_nav>
                <li>
                    <a
                        href="{{ $url }}"
                        class="hover:underline me-4 md:me-6 flex items-center gap-2"
                        {{ $external_link ? 'target=_blank' : '' }}
                    >
                        {{ $title }}
                        <span class="{{ $external_link->value() ? "inline-block" : "hidden" }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9"/></svg>
                        </span>
                    </a>
                </li>
            </statamic:nav:footer_nav>
{{--            <li>--}}
{{--                <a href="#" class="hover:underline me-4 md:me-6">About</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="hover:underline">Contact</a>--}}
{{--            </li>--}}
        </ul>
    </div>
</footer>
