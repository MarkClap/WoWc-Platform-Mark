
document.addEventListener("DOMContentLoaded", function () {
    const isGremioButtonExpanded =
        localStorage.getItem("guildButtonExpanded") === "true";
    const gremio_collapse = document.getElementById("gremio-collapse");
    const gremio_button = gremio_collapse.querySelector("input");

    const isQuestsButtonExpanded =
        localStorage.getItem("questsButtonExpanded") === "true";
    const quests_collapse = document.getElementById("quests-collapse");
    const quests_button = quests_collapse.querySelector("input");

    if (gremio_button) {
        gremio_button.checked = isGremioButtonExpanded;
        updateCollapseButton();

        gremio_button.addEventListener("change", function () {
            updateCollapseButton();
        });
    }

    if (quests_button) {
        quests_button.checked = isQuestsButtonExpanded;
        updateCollapseButton();

        quests_button.addEventListener("change", function () {
            updateCollapseButton();
        });
    }

});

function updateCollapseButton() {
    const gremio_collapse = document.getElementById("gremio-collapse");
    const gremio_button = gremio_collapse.querySelector("input");
    const gremio_title =
        gremio_collapse.getElementsByClassName("collapse-title")[0];

    const quests_collapse = document.getElementById("quests-collapse");
    const quests_button = quests_collapse.querySelector("input");
    const quests_title =
        quests_collapse.getElementsByClassName("collapse-title")[0];

    if (gremio_button) {
        if (gremio_button.checked) {
            gremio_title.classList.add("text-neutral-400");
        } else {
            gremio_title.classList.remove("text-neutral-400");
        }
        localStorage.setItem(
            "gremioButtonExpanded",
            gremio_button.checked.toString()
        );
    }

    if (quests_button) {
        if (quests_button.checked) {
            quests_title.classList.add("text-neutral-400");
        } else {
            quests_title.classList.remove("text-neutral-400");
        }
        localStorage.setItem(
            "questsButtonExpanded",
            quests_button.checked.toString()
        );
    }
}
