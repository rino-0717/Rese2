document.addEventListener('DOMContentLoaded', function() {
    const likeButtons = document.querySelectorAll('.like_btn');

    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const icon = this.querySelector('.like-icon');
            const isLiked = icon.getAttribute('data-liked') === 'true';
            console.log('Button clicked. Current state:', isLiked); // デバッグ用
            if (isLiked) {
                icon.src = likeImageUrl;
                icon.setAttribute('data-liked', 'false');
            } else {
                icon.src = likeRedImageUrl;
                icon.setAttribute('data-liked', 'true');
            }
            console.log('New state:', icon.getAttribute('data-liked')); // デバッグ用
        });
    });
});