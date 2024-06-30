document.addEventListener("DOMContentLoaded", function () {
    const isGuildButtonExpanded =
        localStorage.getItem("guildButtonExpanded") === "true";
    const guild_collapse = document.getElementById("guild-collapse");
    const guild_button = guild_collapse.querySelector("input");
    if (guild_button) {
        guild_button.checked = isGuildButtonExpanded;
        updateCollapseButton();

        guild_button.addEventListener("change", function () {
            updateCollapseButton();
        });
    }
});

function updateCollapseButton() {
    const guild_collapse = document.getElementById("guild-collapse");
    const guild_button = guild_collapse.querySelector("input");
    const guild_title =
        guild_collapse.getElementsByClassName("collapse-title")[0];

    const quests_collapse = document.getElementById("quests-collapse");
    const quests_button = quests_collapse.querySelector("input");
    const quests_title =
        quests_collapse.getElementsByClassName("collapse-title")[0];

    if (guild_button) {
        if (guild_button.checked) {
            guild_title.classList.add("text-neutral-400");
        } else {
            guild_title.classList.remove("text-neutral-400");
        }
        localStorage.setItem(
            "guildButtonExpanded",
            guild_button.checked.toString()
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
