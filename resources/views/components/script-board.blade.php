<script>
    document.addEventListener('DOMContentLoaded', function() {
        updateMenu();
        document.getElementById('menu-button').addEventListener('change', function() {
            updateMenu();
        });
    });

    function updateMenu() {
        const menu = document.getElementById('menu');
        const listNavegation = document.getElementById('list-navegation');
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        updateListNavegation();
        document.getElementById('menu-button').addEventListener('change', function() {
            updateListNavegation();
        });
    });

    function updateListNavegation() {
        const listNavegation = document.getElementById('list-navegation');
        const menu_section = document.getElementById('menu-section');
        const menu_button = document.getElementById('menu-button');

        if (menu_button.checked) {
            menu_section.classList.remove('w-52');
            listNavegation.classList.remove('px-6');
            menu_section.classList.add('w-[4.25rem]');

        } else {
            menu_section.classList.remove('w-[4.25rem]');
            listNavegation.classList.add('px-6');
            menu_section.classList.add('w-52');
        }
    }
</script>
