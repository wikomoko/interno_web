<button {{ $attributes->merge(['class' => 'cus-btn bg-color-primary-1 text-white text-font-jost text-weight-600 text-size-18']) }}>
    {{ $slot }} <img src="{{ asset('assets/img/icons/arrow_black.svg') }}" alt="" srcset=""> 
</button>