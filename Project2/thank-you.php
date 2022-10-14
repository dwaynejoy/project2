<?php
    include 'header.php';
?>
<?php
    include 'navigation.php';
?>
<div class="container">
    <div class="mainContent">
        <section>
            <h1>
                Thank You
            </h1>
            <hr>
        </section>
        <main>
        <p>
            <?php
             echo "Thank you: " . htmlspecialchars($_GET["email"]);
            ?>
        </p>
        We will contact you about the:<br>
        <?php
            echo htmlspecialchars($_GET["location"]) . " trip on the " . htmlspecialchars($_GET["tripDate"])
        ?>
        </main>
    </div>
    <footer>
    </footer>
</div>
<?php
    include 'footer.php';
?>