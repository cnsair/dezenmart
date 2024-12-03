<nav class="fixed bottom-0 inset-x-0 bg-gray-800 p-3 shadow-lg flex justify-around sm:hidden">

    @if ( Auth::user()->isAdmin() )
        <a href="{{ route('admin.dashboard') }}" class="text-white text-center">
            <i class="fas fa-home fa-lg"></i>
            <span class="text-xs block">Home</span>
        </a>
    @elseif ( Auth::user()->isMember() )
        <a href="{{ route('member.dashboard') }}" class="text-white text-center">
            <i class="fas fa-home fa-lg"></i>
            <span class="text-xs block">Home</span>
        </a>
    @endif

    <a href="#" class="text-white text-center">
        <i class="fas fa-shopping-cart fa-lg"></i>
        <span class="text-xs block">Cart</span>
    </a>
    <a href="{{ route('profile.show') }}" class="text-white text-center">
        <i class="fas fa-user fa-lg"></i>
        <span class="text-xs block">Profile</span>
    </a>
    <a href="#" class="text-white text-center">
        <i class="fas fa-wallet fa-lg"></i>
        <span class="text-xs block">Wallet</span>
    </a>
</nav>