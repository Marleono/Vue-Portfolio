<template>
    <div class="details">
        <p>I studied on online Python Full Stack developer course by SkillFactory. On the course there was information about front-end libraries, languages and frameworks (html, css, javascript) and also there was a backend part with the basics of Python language, Django framework and introduction to Docker. During the course and my own practise I also tried working with firebase database, GitHub and Vue framework.</p>
    </div>
</template>


<style scoped>
    .details {
        display: flex;
        margin: 1rem auto;
        justify-content: space-around;
    }
    p {
        padding-top: .5rem;
        max-width: 370px;
        border-top: .5px solid rgb(4, 139, 168);
        text-align: justify;
    }

    @media (max-width: 815px) {
        p {
            font-size: .8rem;
            max-width: 100%;
            padding: 0 .5rem;
            text-align: center;
        }
    }
</style>