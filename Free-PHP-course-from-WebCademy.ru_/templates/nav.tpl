<?php
navLinks = [
    "Projects" => "/index.php",
    "Skills" => "/skills.php",
    "Contacts" => "/contacts.php"
];

echo $_SERVER['REQUEST_URI'];

// nav-list__link--active
?>

<nav class="nav">
    <div class="container">
        <div class="nav-row">
            <a href="./index.php" class="logo"><strong>Freelancer</strong> portfolio</a>

            <button class="dark-mode-btn">
                <img src="./img/icons/sun.svg" alt="Light mode" class="dark-mode-btn__icon">
                <img src="./img/icons/moon.svg" alt="Dark mode" class="dark-mode-btn__icon">
            </button>

            <ul class="nav-list">

                <?php
                foreach ($navLinks as $linkText => $linkUrl) {
                    $isActive = $_SERVER['REQUEST_URI'] === $linkUrl;
                    $linkClass = $isActive ? "nav-list__link--active" : "";
                    echo "<li class=\"nav-list__item\"><a href=\"$linkUrl\"
                              class=\"nav-list__link $linkClass\">$linkText</a></li>";
                }
                ?>

                <li class="nav-list__item"><a href="./index.php" class="nav-list__link ">Projects</a></li>
                <li class="nav-list__item"><a href="./skills.php" class="nav-list__link">Skills</a></li>
                <li class="nav-list__item"><a href="./contacts.php" class="nav-list__link">Contacts</a></li>
            </ul>
        </div>
    </div>
</nav>

