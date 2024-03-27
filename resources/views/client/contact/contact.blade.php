<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<meta name="google-site-verification" content="OBHSOz2bJypVuqhse4EbUNPh6u4nlzaqmKaLoOryaqs" />
<style>
    @import url('https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans|Questrial&display=swap');


    body {
        background: #eaeaea;
        font-family: 'Open Sans', sans-serif;
    }

    .banner {
        background: blue;
        color: white;
    }

    .banner,
    .email-content {
        padding: 2em 5em;
        overflow: hidden;
    }

    h1 {
        font-family: 'Questrial', sans-serif;
        font-size: 5em;
        margin: 0 0 .5em 0;
    }

    hr {
        margin-top: 2em;
        background: blue;
    }

    a {
        text-decoration: none;
    }

    .sig {
        font-family: 'Dancing Script', cursive;
        font-size: 3.5em;
        margin: 0;
    }

    .email-container {
        margin: 5% 25% 1% 25%;
        background: #ffffff;
    }

    footer {
        text-align: center;
        margin: 0;
        padding: 1em;
    }
</style>
<main>
    <div class="email-container">
        <div class="email-body">
            <div class="banner">
                <h4>Email phản hồi từ khách hàng!</h4>
                <h1>Liên hệ từ <span>{{ $yourEmail }}</span></h1>
            </div>
            <div class="email-content">
                <p>Chào mừng!</p>
                <p>{{ $body }}</p>
            </div>
        </div>
    </div>
</main>
