// Service worker code here

self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open('your-pwa-cache-v1').then((cache) => {
            return cache.addAll([
                '/',
                '/index.html',
                '/style.css',
                '/404Page/index.html',
                '/404Page/style.css',
                '/Public/HTML_CSS_JS Editor/index.html',
                '/Public/Javascript/index.html',
                "/Public/style.css",
                '/TryMoreSlider/images/0.png',
                '/TryMoreSlider/images/1.png',
                '/TryMoreSlider/images/2.png',
                '/TryMoreSlider/images/3.png',
                '/TryMoreSlider/images/4.png',
                '/TryMoreSlider/images/5.png',
                '/TryMoreSlider/images/6.png',
                '/TryMoreSlider/images/7.png',
                '/TryMoreSlider/index.html',
                '/TryMoreSlider/script.js',
                '/TryMoreSlider/style.css',
                '/pwa/icon/logo.png',
                '/pwa/icon/logo192.png',
                '/pwa/icon/logo512.png',
                '/pwa/installButton.js',
                '/pwa/manifest.json',
                '/pwa/service-worker.js',
                '/codemirror/lib/codemirror.css',
                '/codemirror/lib/codemirror.js',
                '/codemirror/theme/dracula.css',
                '/codemirror/mode/htmlmixed/htmlmixed.js',
                '/codemirror/mode/javascript/javascript.js',
                '/codemirror/mode/css/css.js',
                '/codemirror/mode/xml/xml.js',
                '/codemirror/addon/edit/closebrackets.js',
                '/codemirror/addon/edit/closetag.js',
                '/codemirror/addon/edit/matchbrackets.js',
                '/codemirror/addon/edit/matchtags.js',
                '/codemirror/addon/selection/selection-pointer.js',
                // Add more files and URLs to cache as needed
            ]);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});

self.addEventListener('activate', (event) => {
    // Remove old caches if necessary
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.filter((cacheName) => {
                    return cacheName !== 'your-pwa-cache-v1';
                }).map((cacheName) => {
                    return caches.delete(cacheName);
                })
            );
        })
    );
});