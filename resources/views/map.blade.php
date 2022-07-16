<x-guest-layout>
    <div class="h-screen w-screen" id='map'></div>
</x-guest-layout>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoidGFkYWFhIiwiYSI6ImNsNWZzbGt1MzFlOXczYm8yNzAzd2x0bXIifQ.3VpENyl9CPNfM5fLzhR_1g';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [<?php echo $track->long ?>, <?php echo $track->lat ?>], // starting position [lng, lat]
        zoom: 14, // starting zoom
        projection: 'globe' // display the map as a 3D globe
    });
    map.on('style.load', () => {
        map.setFog({}); // Set the default atmosphere style
    });
    const nav = new mapboxgl.NavigationControl({
        visualizePitch: true
    });
    const scale = new mapboxgl.ScaleControl({
        maxWidth: 80,
        unit: 'imperial'
    });
    map.addControl(scale);

    scale.setUnit('metric');
    map.addControl(nav, 'bottom-right');
    <?php foreach ($track->marshalPosts as $post) { ?>
        new mapboxgl.Marker()
            .setLngLat([<?php echo $post->long ?>, <?php echo $post->lat ?>])
            .addTo(map);
    <?php } ?>
</script>