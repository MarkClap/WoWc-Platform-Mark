<script>
    document.addEventListener('DOMContentLoaded', function() {
        updateMenu();
        document.getElementById('menu-button').addEventListener('change', function() {
            updateMenu();
        });
    });

    function updateMenu() {
        const menu = document.getElementById('menu');
        const menu_button = document.getElementById('menu-button');

        if (menu_button.checked) {
            menu.classList.remove('left-0');
            menu.classList.add('-left-52');
        } else {
            menu.classList.remove('-left-52');
            menu.classList.add('left-0');
        }
    }
</script>