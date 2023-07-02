<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-outline-secondary custom__btn clay']) }}>
    {{ $slot }}
</button>
