<h2>Contact list</h2><br/>

<?php
if (count($contacts)){
    foreach ($contacts as $contact){
        echo 'ID: ' . $contact->id . '<br/>';
        echo '<p>Name: ' . $contact->name . '<br/>';
        echo 'Email: ' . $contact->email .  '</p>';
        echo '<h4>Title: ' . $contact->title . '<br/> ';
        echo 'Contents: ' . $contact->contents .  '</h4><br/><br/>';
    }
}
?>