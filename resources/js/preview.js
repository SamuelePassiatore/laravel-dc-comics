const placeholder =
            'https://imgs.search.brave.com/bes1Md0cXSdhNwC5wGXnxjjkNY3FXM5VtRptWbPuJWw/rs:fit:400:300:1/g:ce/aHR0cHM6Ly93d3cu/bmFtZXByb3MuY29t/L2F0dGFjaG1lbnRz/L2VtcHR5LXBuZy44/OTIwOS8';
        const thumb = document.getElementById('thumb');
        const preview = document.getElementById('preview');

        thumb.addEventListener('input', () => {
            const url = thumb.value;
            preview.src = url || placeholder;
            // if (url) {
            //     preview.setAttribute('src', url);
            // } else {
            //     preview.setAttribute('src', placeholder);
            // }
        })