<template>
    <div class="bachelor_info">
        <p>Same as Master 😅</p>
    </div>
</template>


<style scoped>
    .bachelor_info {
        position: relative;
        display: flex;
        margin: 1rem auto;
        flex-direction: column;
        justify-content: space-around;
    }
    p {
        padding-top: .5rem;
        max-width: 370px;
        border-top: .5px solid rgb(4, 139, 168);
    }

    @media (max-width: 815px) {
        p {
            font-size: .8rem;
            max-width: 100%;
            padding: 0 .5rem;
        }
    }
</style>