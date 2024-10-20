document.querySelectorAll('.action-link').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const url = this.href;
        const action = this.dataset.action;

        if (action === 'delete') {
            if (!confirm('Are you sure you want to delete this item?')) {
                return;
            }

            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Failed to delete item.');
                }
            });
        } else {
            location.href = url;
        }
    });
});
