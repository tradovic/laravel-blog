<div>
    <input wire:model="search" type="text" placeholder="Search posts..."/>
    <ul>
        @foreach($posts as $post)
            <li wire:key="{{ $post->id }}">{{ $post->body }}</li>
        @endforeach
    </ul>
</div>
