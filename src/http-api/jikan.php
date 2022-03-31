<?php 
    function getTopAnime(): mixed {
        $url = 'https://api.jikan.moe/v4/top/anime';
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }

    function getAnimeById($id): mixed {
        $url = 'https://api.jikan.moe/v4/anime/' . $id;
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }

    function getAnimeImgs($id): mixed {
        $url = 'https://api.jikan.moe/v4/anime/' . $id . '/pictures';
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }

    function getAnimeEpisodeList($id): mixed {
        $url = 'https://api.jikan.moe/v4/anime/' . $id . '/episodes';
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }

    function getAnimeEpisodeDetails($animeId, $episodeId): mixed {
        $url = 'https://api.jikan.moe/v4/anime/' . $animeId . '/episodes' . '/' . $episodeId;
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }
?>