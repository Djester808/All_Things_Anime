<?php 
    function getTopAnime(): mixed {
        $url = 'https://api.jikan.moe/v4/top/anime';
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }

    function getSeasonalTopStreamingAnime(): mixed {
        $url = 'https://api.jikan.moe/v4/top/anime?filter=airing';
        $response = file_get_contents($url);
        return json_decode($response, true);
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

    /**TODO: Replace this call with an ajax call. */
    function getAnimeEpisodeDetails($animeId, $episodeId): mixed {
        $url = 'https://api.jikan.moe/v4/anime/' . $animeId . '/episodes' . '/' . $episodeId;
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }

    function getAnimeByLetter($letter): mixed {
        $url = 'https://api.jikan.moe/v4/anime?letter=' . $letter;
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }

    /* -------------------------------------------------------------------
    Manga API Calls
    ------------------------------------------------------------------- */

    function getTopManga(): mixed {
        $url = 'https://api.jikan.moe/v4/top/manga';
        $response = file_get_contents($url);
        return json_decode($response, true)['data'];
    }
?>