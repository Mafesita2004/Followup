document.addEventListener('DOMContentLoaded', function () {
    const notifButton = document.getElementById('notifButton');
    const notifMenu = document.getElementById('notifMenu');

    notifButton.addEventListener('click', function (event) {
        notifMenu.classList.toggle('hidden');
        event.stopPropagation();
    });

    document.addEventListener('click', function (event) {
        if (!notifButton.contains(event.target) && !notifMenu.contains(event.target)) {
            notifMenu.classList.add('hidden');
        }
    });
});

