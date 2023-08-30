<template>
    <div class="master_info">
        <p>I studied languages, cultures, history and religion of Arabic countries and Israel, which is not relevant for my current desire job but this education gave me vast knowledge of different languages, which I can use in my developer journey.</p>
    </div>
</template>


<style scoped>
    .master_info {
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