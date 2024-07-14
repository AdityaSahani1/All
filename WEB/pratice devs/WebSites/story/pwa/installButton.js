window.addEventListener('beforeinstallprompt', (event) => {
    event.preventDefault();
    const installButton = document.getElementById('install-button');
    installButton.style.display = 'block';

    installButton.addEventListener('click', () => {
        event.prompt();
        event.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accpted the A2HS prompt');
            } else {
                console.log('User dismissed the A2HS prompt');
            }
        });
    });
});