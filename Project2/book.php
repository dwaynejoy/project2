<div class="container">
    <div class="mainContent">
        <section>
            <h1>
                Book a Trip
            </h1>
            <hr>
        </section>
        <main>
        <p>Just Some Quick Details</p>
        <form action="thank-you.php" method="GET" >
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php $email;?>" placeholder="me@me.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
                <label for="location">Location</label>
                <select id="location" name="location" value="<?php $location;?>" required>
                    <option value="" selected disabled hidden>Select</option>
                    <option value="Halifax">Halifax</option>
                    <option value="Sydney">Sydney</option>
                </select><br>
                <label for="tripDate">Trip Date</label>
                <input type="date" id="tripDate" name="tripDate"  value="<?php $tripDate;?>" required><br>
                <input type="submit" name="submit" value="Submit">
        </form>
        </main>
    </div>
    <footer>
    </footer>
</div>