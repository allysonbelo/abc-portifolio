//Link de compartilhamento
const shareButton = document.querySelector('#share-button');
if (navigator.share) {
    shareButton.addEventListener('click', () => {
        navigator.share({
            title: document.title,
            url: window.location.href
        })
            .then(() => console.log('Shared successfully'))
            .catch(error => console.log('Error sharing:', error));
    });
} else {
    // fallback to other share methods
}