
<?php get_header();?>

<main>
<div class="container2">
        <h1>お問い合わせフォーム</h1>
        <form id="contact-form">
            <label for="name">お名前:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" required>

            <label for="email">ご住所:</label>
            <input type="email" id="email" name="maker" required>

            <label for="email">郵便番号:</label>
            <input type="email" id="email" name="carname" required>

            <label for="message">お問い合わせ内容:</label>
            <textarea id="message" name="message" required></textarea><br>

            <br>
            <button type="submit">送信</button><br>
            <p class='mod7'>電話でのご相談は下記より<br>
              052-999-9999(10～19時定休日除く)</p>
        </form>
    </div>
    
</main>
<!-- フッター -->

<?php get_footer(); ?>
