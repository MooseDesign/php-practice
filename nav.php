<!-- Site Navigation -->
<nav>
    <a href="index.php" class="<?php if ($pageTitle == "Home") { echo "on"; } else { echo "default"; } ?>">Home</a>
    <a href="about.php" class="<?php if ($pageTitle == "About") { echo "on"; } else { echo "default"; } ?>">About</a>
    <a href="contact.php" class="<?php if ($pageTitle == "Contact") { echo "on"; } else { echo "default"; } ?>">Contact</a>
    <a href="login.php" class="<?php if ($pageTitle == "Login") { echo "on"; } else { echo "default"; } ?>">Login</a>
</nav>