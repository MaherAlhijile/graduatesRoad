<button onclick="openPopup()">Add new post</button>
<div id="overlay"></div>
<div id="popup">
    <h2>Popup Form</h2>
    <form action="index.php" method="POST">
        <label for="postAuthor">postAuthor</label>
        <input type="text" id="postAuthor" name="postAuthor" required>
        <br>

        <label for="authorEmail">authorEmail:</label>
        <input type="email" id="authorEmail" name="authorEmail" required>
        <br>

        <label for="postHeader">postHeader:</label>
        <input type="text" id="postHeader" name="postHeader" required>
        <br>

        <label for="postInfo">postInfo:</label>
        <textarea id="postInfo" name="postInfo" rows="4" required></textarea>
        <br>

        <label for="postDate">postDate:</label>
        <input type="date" id="postDate" name="postDate" required>
        <br>

        
        <input type="submit" name="submit" value="send">
    </form>
    <button onclick="closePopup()">Close</button>
</div>