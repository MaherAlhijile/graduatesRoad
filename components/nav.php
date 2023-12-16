<nav>
    <a href="#">طريق الخريجين</a>
    <a href="#" onclick="openPopup2()">تسجيل الدخول</a>

    <div id="overlay2"></div>
    <div id="popup2">
        <h2>Popup Form</h2>
        <form action="index.php" method="POST">
            <label for="name">name</label>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" required>
            <br>

            <label for="major">major:</label>
            <input type="text" id="major" name="major" required>
            <br>

            <label for="university">university:</label>
            <input type="text" id="university" name="major" required>            <br>

            <input type="submit" name="send" value="send">
        </form>
        <button onclick="closePopup()">Close</button>
    </div>
</nav>