<template>
    <div>
        <button class="effect effect-1">Details</button>
    </div>
</template>

<style scoped>
    button {
        position: relative;
        width: 100px;
        padding: .3rem .5rem;
        border-radius: 7px;
        cursor: pointer;
        background: transparent;
        border: 1px solid rgba(4, 139, 168, 0.5);
        outline: none;
        transition: 1s ease-in-out;
        font-family: 'Itim', cursive;
        font-size: 1rem;
    }

    .effect {
        text-align: center;
        display: inline-block;
        color: rgb(53, 53, 53);
        text-transform: capitalize;
        overflow: hidden;
    }

    .effect.effect-1 {
        transition: all 0.2s linear 0s;

    }
    .effect-1:before {
            content: "➺";
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 30px;
            background-color: rgba(211, 179, 245, .5);
            border-radius: 0 50% 50% 0;
            transform: scale(0,1);
            transform-origin: left center;
            transition: all 0.2s linear 0s;
    }
  
    .effect-1:hover {
        text-indent: 30px;
    }
                
    .effect-1:hover:before {
            transform: scale(1,1);
            text-indent: 0;
    }
</style>