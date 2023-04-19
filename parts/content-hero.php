<section class="wrapper">
    <div class="hero">
        <div class="hero__social">
            <a href="#" class="dashicons dashicons-linkedin"></a>
            <a href="#" class="dashicons dashicons-instagram"></a>
            <!-- <a href="#" class="dashicons dashicons-whatsapp"></a> -->
            <span id="share-button" class="dashicons dashicons-admin-links"></span>
        </div>
        <div class="hero__content">
            <button id="theme-toggle">Alternar Tema</button>
        </div>
    </div>
</section>

<script>
    //Link de compartilhamento
    const shareButton = document.querySelector('#share-button');
    shareButton.addEventListener('click', () => {
        navigator.share({
                title: document.title,
                url: window.location.href
            })
            .then(() => console.log('Shared successfully'))
            .catch(error => console.log('Error sharing:', error));
    });
</script>