/**
 * Unregister selected Embed block variations.
 */
wp.domReady( () => {
    const embedVariations = [
        'animoto',
        'dailymotion',
        'hulu',
        'reddit',
        'tumblr',
        'vine',
        'amazon-kindle',
        'cloudup',
        'crowdsignal',
        'speaker',
        'scribd',
        'vimeo',
        'soundcloud',
        'twitter',
        'spotify',
        'flickr',
        'imgur',
        'wordpress-tv',
        'wordpress',
        'youtube',
        'kickstarter',
        'mixcloud',
        'pocket-casts',
        'reverbnation',
        'smugmug',
        'speaker-deck',
        'tiktok',
        'ted',
        'pinterest',
        'wolfram',
        'loom',
        'smartframe',
        'descript',
        'goodreads',
        'gif',
        'wolfram'
    ];

    embedVariations.forEach( ( variation ) => {
        wp.blocks.unregisterBlockVariation( 'core/embed', variation );
    } );
} );