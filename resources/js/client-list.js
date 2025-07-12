(() => {
    const elements = document.querySelectorAll('.js-delete-span > a')
    if (elements.length > 0) {
        document.querySelectorAll('.js-delete-span > a').forEach(el => {
            el.addEventListener('click', e => {
                e.preventDefault();
                const id = el.dataset.id;
                if (confirm(`valóban törlöd? ${id}`)) {
                    fetch('/api/delete-client', {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({ id }),
                    }).then(result => {
                        if (result.ok) {
                            window.location.reload();
                        }
                    })


                }
            })

        })
    }
})()