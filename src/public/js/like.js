document.addEventListener('DOMContentLoaded', function() {
    const likeButtons = document.querySelectorAll('.like_btn');
    const likeImageUrl = '/images/like.png'; // 通常のいいねアイコンのパス
    const likeRedImageUrl = '/images/like_red.png'; // 赤いいいねアイコンのパス

    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const shopId = this.getAttribute('data-shop-id');
            const likeIcon = this.querySelector('.like-icon');
            const isLiked = likeIcon.getAttribute('data-liked') === 'true';

            // Send AJAX request to server to update like status
            fetch(`/like/${shopId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ liked: !isLiked })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Toggle like status
                    if (data.liked) {
                        likeIcon.src = likeRedImageUrl;
                        likeIcon.setAttribute('data-liked', 'true');
                    } else {
                        likeIcon.src = likeImageUrl;
                        likeIcon.setAttribute('data-liked', 'false');
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});