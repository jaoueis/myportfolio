<div class="contact_form_container grid-x" id="main_form" data-magellan-target="main_form">
    <h2 class="cell">shoot me a message!</h2>
    <form method="POST" action="mail.php" class="cell medium-10 medium-offset-1 large-6 large-offset-3">
        <div class="form_element">
            <label for="name" class="form_label">Name</label>
            <input type="text" name="user_name" id="name" class="form_input">
        </div>
        <div class="form_element">
            <label for="email" class="form_label">Email</label>
            <input type="email" name="user_email" id="email" class="form_input">
        </div>
        <div class="form_element">
            <label for="comment" class="form_label">Comment</label>
            <input type="text" name="user_message" id="comment" class="form_input">
        </div>
        <input id="submit" name="submit" type="submit" value="submit">
    </form>
</div>