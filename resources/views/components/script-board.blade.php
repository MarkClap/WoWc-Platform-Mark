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
    const menu_button = document.getElementById('menu-button');

    if (menu_button.checked) {
        listNavegation.style.marginLeft = '0';    
        listNavegation.style.borderLeft = 'none';  // Quitar el borde izquierdo
    } else {
        listNavegation.style.marginLeft = '11rem';
         // Restaura el borde izquierdo si es necesario
         listNavegation.style.borderLeft = ''; 
    }

}
</script>