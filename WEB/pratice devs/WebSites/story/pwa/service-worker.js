// Service worker code here

if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/pwa/service-worker.js')
            .then(registration => {
                console.log('Service Worker reistered with scope:', registration.scope);
            })
            .catch(error =>{
                console.log('Service Worker registration failed:', error);
            });
    });
}