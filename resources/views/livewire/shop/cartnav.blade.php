<div wire:poll.50ms>
    <li class="nav-item">
        <a href="{{ route('shop.cart') }}" class="nav-link "">
            <i class="fas fa-shopping-cart"></i>

            @if($cartTotal != 0)
            <span class="badge badge-danger">{{ $cartTotal }}</span>
            @endif
        </a>


    </li>
</div>
