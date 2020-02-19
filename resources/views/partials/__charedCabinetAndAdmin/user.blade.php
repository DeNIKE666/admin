<div class="user">
    <div class="info">
        <a href="{{ route('user.edit', $user) }}">
            <span> {{ $user->name }}</span>
            <span><b>{{ getRoles() }}</b></span>
        </a>
    </div>
</div>
