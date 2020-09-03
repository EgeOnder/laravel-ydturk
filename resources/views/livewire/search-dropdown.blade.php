<div>
    <div class="top-search" style="display: block;">
        <input wire:model.debounce.500ms="search" type="text" placeholder="Ara">
        @if (strlen($search) > 2)
            <div style="position: absolute; width: 19vw; background-color: #233a50; color: #abb7c4; text-align: center;">
                @if ($searchResults->count() > 0)
                    <ul style="padding: 10px; text-align: center;">
                        @foreach ($searchResults as $result)
                            @if ($result['media_type'] == 'tv')
                                <a href="{{ route('diziler.show', $result['id']) }}" style="color: #abb7c4;">
                            @else
                                <a href="{{ route('filmler.show', $result['id']) }}" style="color: #abb7c4;">
                            @endif
                                    <li style="padding: 10px;" class="divhover">
                                        @if ($result['poster_path'])
                                            <img src="{{ 'https://image.tmdb.org/t/p/w92/' . $result['poster_path'] }}" alt="poster" style="height: 6rem; text-align: left;">
                                        @endif
                                        @if ($result['media_type'] == 'movie')
                                            <span style="display: inline-block;">{{ $result['title'] }}</span>
                                        @else
                                            <span style="display: inline-block;">{{ $result['name'] }}</span>
                                        @endif
                                    </li>
                                </a>
                            <hr style="background-color: #abb7c4;">
                        @endforeach
                    </ul>
                @else
                    <ul style="padding: 10px; text-align: center;">
                        <li style="padding: 10px;">Sonuç bulunamadı.</li>
                    </ul>
                @endif
            </div>
        @endif
    </div>
</div>
<style>
    .divhover:hover{
        background: #727d88;
    }
</style>
