<div>
    <div class="top-search" style="display: block;">
        <input wire:model.debounce.500ms="search" type="text" placeholder="Ara">
        @if (strlen($search) > 2)
            <div style="position: absolute; width: 19vw; background-color: #233a50; color: #abb7c4;">
                @if ($searchResults->count() > 0)
                    <ul style="padding: 10px; text-align: center;">
                        @foreach ($searchResults as $result)
                            @if ($result['media_type'] == 'movie')
                                <a href="{{ route('filmler.show', $result['id']) }}">
                                    <li style="padding: 10px; display: flex;" class="justify-content-between">
                                        <div>
                                            <img src="{{ 'https://image.tmdb.org/t/p/w92/' . $result['poster_path'] }}" alt="poster" style="height: 8rem;">
                                        </div>
                                        <div>
                                            <span>{{ $result['title'] }}</span>
                                        </div>
                                    </li>
                                </a>
                            @else
                                <a href="{{ route('diziler.show', $result['id']) }}">
                                    <li style="padding: 10px; display: flex;" class="justify-content-between">
                                        <div>
                                            <img src="{{ 'https://image.tmdb.org/t/p/w92/' . $result['poster_path'] }}" alt="poster" style="height: 8rem;">
                                        </div>
                                        <div>
                                            <span style="text-align: center;">{{ $result['name'] }}</span>
                                        </div>
                                    </li>
                                </a>
                            @endif
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
