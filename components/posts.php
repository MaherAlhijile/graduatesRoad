<div id="posts">
    <?php include './components/popUp.php' ?>
    <?php foreach ($posts as $post): ?>
        <div class="inner">
            <h1>
                <?php echo htmlspecialchars($post['postHeader']); ?>
            </h1>
            <p>
                <?php echo htmlspecialchars($post['postInfo']); ?>
            <p>
        </div>
    <?php endforeach; ?>

</div>