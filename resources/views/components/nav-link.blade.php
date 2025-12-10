@props([
    'title' => '',
    'url' => '#',
    'external_link' => false,
    'active' => false,
])

<a href="{{ $url }}"
   {{ $external_link ? 'target=_blank' : '' }}
   class="py-2 px-3 flex items-center gap-2 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
   aria-current="{{ $active ? "page" : "false" }}">
    {{ $title }}
    <span class="{{ $external_link ? "inline-block" : "hidden" }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9"/></svg>
    </span>
</a>


{{--<a href="#" class="block py-2 px-3 text-white bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0" aria-current="page">Home</a>--}}
{{--<a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">About</a>--}}
