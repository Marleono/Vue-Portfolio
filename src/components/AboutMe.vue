<template>
    <div class="section">
        <div class="about_me"><p>My name is Maria Leonova. I am from Saint Petersburg, Russia. I have been studying web development by myself for a couple of years. I also finished an online course on full stack Python developer, which gave me a good start. Now I am looking for a job to have more practice in real work conditions.</p></div>
        <div class="my_photo"><div class="circle"></div><img src="../img/photo1.jpg" alt=""></div>
    </div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    .section {
        margin: 1rem auto;
        display: flex;
        max-height: 30rem;
        justify-content: space-around;
        background-image: url(../img/scattered-forcefields.svg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    img {
        object-fit: contain;
        border-radius: 50%;
        z-index: 2;
        padding: 1rem 1rem;
    }
    .about_me {
        padding: 1rem;
    }
    p {
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        color: rgb(53, 53, 53);
        font-size: 1.5rem;
        line-height: 2rem;
        background-color: rgba(234, 244, 211, .7);
    }
    .my_photo {
        position: relative;
        display: flex;
        justify-content: flex-end;
        max-width: 50%;
    }
    .circle {
        position: absolute;
        background: linear-gradient(rgb(242, 158, 76, .5), rgb(211, 179, 245, .5));
        z-index: 1;
        width: 30rem;
        height: 30rem;
        border-radius: 50%;
    }

    @media (max-width: 1024px) {
        .section {
            flex-wrap: wrap-reverse;
            max-height: 38rem;
        }
        img {
            max-width: 277px;
        }
        .circle {
            max-width: 311px;
            max-height: 304px;
        }
        p {
            font-size: 1rem;
        }
        .about_me {
            padding: 0;
        }
    }
    @media (max-width: 800px) {
        p {
            line-height: 1.5rem;
        }
    }

    @media (max-width: 700px) {
        .my_photo {
            justify-content: center;
        }
        img {
            max-width: 220px;
        }
        .circle {
            max-width: 250px;
            max-height: 250px;
        }
    }
    /* @media (max-width: 417px) {

        img {
            max-width: 200px;
        }
        .circle {
            max-width: 231px;
            max-height: 233px;
        }

    } */


</style>