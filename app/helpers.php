<?php

if (!function_exists('convertToEmbeddedMapUrl')) {
    /**
     * Convert a regular Google Maps URL to an embeddable URL.
     *
     * @param string $url
     * @return string
     * @throws Exception
     */
    function convertToEmbeddedMapUrl($url)
    {
        // Validate the URL
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception("Invalid URL provided");
        }

        // Parse the URL
        $parsedUrl = parse_url($url);
        if (strpos($parsedUrl['host'], 'google.com') === false) {
            throw new Exception("Provided URL is not a Google Maps URL");
        }

        // Extract coordinates or query string from the URL
        $path = $parsedUrl['path'] ?? '';
        preg_match('/@([0-9.,\-]+)/', $path, $matches);

        if (!empty($matches[1])) {
            // Coordinates are found
            $coords = $matches[1]; // Example: "37.7749,-122.4194,15z"
            $coords = explode(',', $coords);
            $latitude = $coords[0] ?? '';
            $longitude = $coords[1] ?? '';
            return "https://www.google.com/maps/embed/v1/view?center={$latitude},{$longitude}&zoom=15&key=YOUR_API_KEY";
        }

        throw new Exception("Could not parse the coordinates from the URL.");
    }
}
