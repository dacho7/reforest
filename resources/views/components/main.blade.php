<main>
    @if (Route::has('donations'))
        @component('components.donations')
        @endcomponent
    @endif
    @if (Route::has('transactions'))
        @component('components.transactions')
        @endcomponent
    @endif
</main>
