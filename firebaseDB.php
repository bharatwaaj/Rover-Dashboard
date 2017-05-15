<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 12-05-2017
 * Time: 13:34
 */
?>

<script>
    // Initialize Firebase
    // TODO: Replace with your project's customized code snippet
    var firebase;
    var config = {
        apiKey: "AIzaSyClnB03Ytj1m8Qz4WJtcb85X69UZZ224Sw",
        "databaseURL": "https://rover-1490941796982.firebaseio.com",
        "storageBucket": "rover-1490941796982.appspot.com",
        "authDomain": "rover-1490941796982.firebaseapp.com",
        "messagingSenderId": "498648566718",
        "projectId": "rover-1490941796982"
    };
    firebase.initializeApp(config);
    var database = firebase.database();
</script>
