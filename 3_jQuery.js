$(document).ready(function() {
    $('#load-reasons').click(function() {
        let apiUrl = 'https://jsonplaceholder.typicode.com/posts';

        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function(posts) {
                let randomPosts = getRandomPosts(posts, 4);

                randomPosts.forEach(function(post, index) {
                    $('#section-' + (index + 1) + ' p').text(post.title);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data: ', error);
            }
        });
    });

    function getRandomPosts(posts, num) {
        let randomPosts = [];
        let seenIndexes = new Set();

        while (randomPosts.length < num) {
            let randomIndex = Math.floor(Math.random() * posts.length);
            if (!seenIndexes.has(randomIndex)) {
                seenIndexes.add(randomIndex);
                randomPosts.push(posts[randomIndex]);
            }
        }

        return randomPosts;
    }
});