function share() {
    if (navigator.share) {
      navigator.share({
        title: document.title,
        url: window.location.href
      })
        .then(() => console.log('Shared successfully'))
        .catch(error => console.log('Error sharing:', error));
    } else {
      alert('Desculpe, essa é uma função nova disponivel apenas em navegadores mais modernos. ')
    }
  }
  