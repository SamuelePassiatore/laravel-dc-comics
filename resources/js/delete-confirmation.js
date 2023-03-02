const deleteForms = document.querySelectorAll('.delete-forms');
deleteForms.forEach(form => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const serieName = form.getAttribute('data-name');
        const confirm = window.confirm(`Are you sure to delete ${ serieName }?`);
        if (confirm) form.submit();
    });

});